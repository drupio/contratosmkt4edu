<?php

date_default_timezone_set('America/Fortaleza');

$hora = date('H');
$minuto = date('i');
$segundos = date('s');

$dia = date('d');
$mes = date('m');
$ano = date('Y');
$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

$data = $dia . '/' . $meses[$mes - 1] . '/' . $ano . ' - ' . $hora . ':' . $minuto . ':' . $segundos;

include 'conexao.php';

session_start();
if (!isset($_SESSION['on'])) :
    $_SESSION['off'] = true;
    header('Location: ../index.php');
    exit;
endif;

$id_user = $_SESSION['id_user'];
$setor_user = $_SESSION['setor_user'];
$url = $_SERVER['PHP_SELF'];

// Se existir GET mes
if (isset($_GET['mes'])) :
    $mes = filter_input(INPUT_GET, 'mes', FILTER_SANITIZE_NUMBER_INT);
endif;

// Se existir GET usuário
if (isset($_GET['id'])) :
    $id_user = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $url = $_SERVER['PHP_SELF'] . '?id=' . $id_user;
endif;

// Se existir GET projeto
if (isset($_GET['p_id'])) :
    $id_projeto = filter_input(INPUT_GET, 'p_id', FILTER_SANITIZE_NUMBER_INT);
endif;

// Nível de usuário
if ($_SESSION['nivel'] == 1010) :
    $_SESSION['admin'] = true;
elseif ($_SESSION['nivel'] == 99) :
    $_SESSION['diretor'] = true;
elseif ($_SESSION['nivel'] == 88) :
    $_SESSION['gestor'] = true;
elseif ($_SESSION['nivel'] == 77) :
    $_SESSION['rechum'] = true;
elseif ($_SESSION['nivel'] == 66) :
    $_SESSION['financ'] = true;
endif;

if (isset($_SESSION['admin'])) :
    // Selecionar dados do usuário
    $sql = "SELECT * FROM users AS u JOIN cargos AS c ON c.cargo_numero = u.nivel_user WHERE u.id_user = '$id_user'";
    $resultadoUser = mysqli_query($conexao, $sql);
    $dados_user = mysqli_fetch_array($resultadoUser);
else :
    $sql = "SELECT * FROM users AS u JOIN cargos AS c ON c.cargo_numero = u.nivel_user WHERE u.id_user = '$id_user' AND setor_user = '$setor_user'";
    $resultadoUser = mysqli_query($conexao, $sql);
    $dados_user = mysqli_fetch_array($resultadoUser);
endif;

// Seleção das horas do dia
$sqlHorasHoje = "SELECT * FROM horas_lancadas AS h JOIN projetos AS p ON h.id_projeto = p.id_projeto JOIN empresas AS e ON h.id_empresa = e.id_empresa JOIN produtos AS t ON h.id_produto = t.id_produto WHERE h.id_user = '$id_user' AND h.status_hora = 1 AND h.mes = '$mes' AND h.dia = '$dia' AND h.ano = '$ano' ORDER BY h.id_hora DESC";
$resultadoHorasUsersHoje = mysqli_query($conexao, $sqlHorasHoje);

// Cálculo das horas

if (isset($_GET['mes'])) :
    $sqlCalclHoras = "SELECT sum(minutos) AS total FROM horas_lancadas WHERE id_user = '$id_user' AND status_hora = 1 AND mes = '$mes'";
else :
    $sqlCalclHoras = "SELECT sum(minutos) AS total FROM horas_lancadas WHERE id_user = '$id_user' AND status_hora = 1";
endif;
$resultadoCalcHoras = mysqli_query($conexao, $sqlCalclHoras);
$calcHoras = mysqli_fetch_assoc($resultadoCalcHoras);
$soma = $calcHoras['total'] / 60;
$soma = convertHoras($soma);

// Cálculo das horas dia
$sqlHorasDia = "SELECT sum(minutos) AS totalDia FROM horas_lancadas WHERE id_user = '$id_user' AND dia = '$dia' AND mes = '$mes' AND ano = '$ano' AND status_hora = 1";
$resultadoCalcHorasDia = mysqli_query($conexao, $sqlHorasDia);
$calcHorasDia = mysqli_fetch_assoc($resultadoCalcHorasDia);
$somaDia = $calcHorasDia['totalDia'] / 60;
$somaDia = convertHoras($somaDia);

function convertHoras($horasInteiras)
{
    // Define o formato de saida
    $formato = '%02d:%02d';
    // Converte para minutos
    $minutos = $horasInteiras * 60;
    // Calcula para o formato hora
    $horas = floor($minutos / 60);
    $minutos = ($minutos % 60);
    // Retorna o valor
    return sprintf($formato, $horas, $minutos);
}
