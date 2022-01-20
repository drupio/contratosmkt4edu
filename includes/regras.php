<?php

//CONEXÃO E AUTENTICAÇÃO
include 'conexao.php';
session_start();
if (!isset($_SESSION['on'])) :
    $_SESSION['off'] = true;
    header('Location: ../index.php');
    exit;
endif;

//HORÁRIOS E DATAS
date_default_timezone_set('America/Fortaleza');
$hora = date('H');
$minuto = date('i');
$segundos = date('s');
$dia = date('d');
$mes = date('m');
$ano = date('Y');
$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
$data = $dia . '/' . $meses[$mes - 1] . '/' . $ano . ' - ' . $hora . ':' . $minuto . ':' . $segundos;

//ID DO USUÁRIO LOGADO
$id_user = $_SESSION['id_user'];

//URL ATUAL DA PÁGINA
$url = $_SERVER['PHP_SELF'];

//DIRETÓRIO UPLOAD/DOWNLOAD
$dir = substr(__DIR__, 0, 2);
if ($dir != 'C:') :
    $img_dir = 'https://dash.mktforeducation.com/includes/';
else :
    $img_dir = '../includes/';
endif;

//SELECT INFOS DO USUÁRIO
$sql = "SELECT * FROM users WHERE id_user = '$id_user'";
$resultadoUser = mysqli_query($conexao, $sql);
$dados_user = mysqli_fetch_array($resultadoUser);
$email_user = $dados_user['email_user'];

//SELECT INFOS DO CLIENTE
if (isset($_GET['id'])) :
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $sqlCliente = "SELECT * FROM clientes AS c JOIN status_clientes AS s ON c.status_cliente = s.id_status WHERE c.id_cliente = '$id'";
    $rCliente = mysqli_query($conexao, $sqlCliente);
    $dCliente = mysqli_fetch_array($rCliente);
    $cnpj = $dCliente['cnpj'];

    $sqlReuniao = "SELECT * FROM reuniao WHERE cliente = '$id' ORDER BY id DESC";
    $rReuniao = mysqli_query($conexao, $sqlReuniao);
    $dReuniao = mysqli_fetch_array($rReuniao);
    $existeReuniao = mysqli_num_rows($rReuniao);
    if ($existeReuniao > 0) :
        $reuniao = $dReuniao['reuniao'];
        $reuniaoData = $dReuniao['criado_em'];
        $reuniaoUser = $dReuniao['criado_por'];
    endif;
endif;

//SOMA CLIENTES
$sql_id = "SELECT count(id_cliente) AS total_id FROM clientes";
$res_id = mysqli_query($conexao, $sql_id);
$total_id = mysqli_fetch_array($res_id);
$total_id = $total_id['total_id'];

//SOMA PROJETOS
$sqlSomaProjetos = "SELECT count(id) AS total_projetos FROM projetos_clientes";
$res_sum_projetos = mysqli_query($conexao, $sqlSomaProjetos);
$total_projetos = mysqli_fetch_array($res_sum_projetos);
$total_projetos = $total_projetos['total_projetos'];

//SELECT STATUS CLIENTES
$sqlStatusClientes = "SELECT *, count(status_cliente) AS total_status FROM clientes AS c JOIN status_clientes AS s ON c.status_cliente = s.id_status GROUP BY c.status_cliente, s.id_status";
$res_status_clientes = mysqli_query($conexao, $sqlStatusClientes);

//FUNÇÃO CONVERTER MINUTOS EM HORAS
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
