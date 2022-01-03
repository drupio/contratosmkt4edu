<?php
session_start();

date_default_timezone_set('America/Fortaleza');

$hora = date('H');
$minuto = date('i');
$segundos = date('s');

$dia = date('d');
$mes = date('m');
$ano = date('Y');
$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

$data = $dia . ' de ' . $meses[$mes - 1] . ' de ' . $ano . ' - ' . $hora . ':' . $minuto . ':' . $segundos;

include 'conexao.php';

//Clear
function clear($input)
{
    global $conexao;
    //sql
    $var = mysqli_escape_string($conexao, $input);
    // xss
    $var = htmlspecialchars($var);
    return $var;
}

$url = mysqli_escape_string($conexao, $_POST['url']);
$user = mysqli_escape_string($conexao, $_POST['id_user']);
$empresa = mysqli_escape_string($conexao, $_POST['id_empresa']);
$setor = mysqli_escape_string($conexao, $_POST['id_setor']);
$produto = mysqli_escape_string($conexao, $_POST['id_produto']);
$projeto = mysqli_escape_string($conexao, $_POST['id_projeto']);
$hora_lancada = mysqli_real_escape_string($conexao, $_POST['horas']);

if (!empty($_POST['minutos'])) :
    $minuto_lancado = mysqli_real_escape_string($conexao, $_POST['minutos']);
else :
    $minuto_lancado = 0;
endif;

$horas = $hora_lancada * 60 + $minuto_lancado;

if (!empty($_POST['dia'])) :
    $dia = mysqli_real_escape_string($conexao, $_POST['dia']);
endif;
if (!empty($_POST['mes'])) :
    $mes = mysqli_real_escape_string($conexao, $_POST['mes']);
endif;

$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);

$sqlValor = "SELECT * FROM users WHERE id_user = '$user'";
$resultadoValor = mysqli_query($conexao, $sqlValor);
$valorHora = mysqli_fetch_array($resultadoValor);
$valorHora = $valorHora['valor_hora_user'];
$valorTotal = $horas / 60 * $valorHora;

$sqlHora = "INSERT INTO horas_lancadas (id_user, valor_hora, id_empresa, id_produto, id_projeto, id_setor, descricao, minutos, dia, mes, ano, data_lancamento) VALUES ('$user', '$valorTotal', '$empresa', '$produto', '$projeto', '$setor', '$descricao', '$horas', '$dia', '$mes', '$ano', '$data')";

if (mysqli_query($conexao, $sqlHora)) :
    $_SESSION['success'] = true;
    header("Location: $url");
    exit;
else :
    $_SESSION['erro'] = true;
    header("Location: $url");
    // $msg = mysqli_error($conexao);
    // echo $msg;
endif;



// $user = mysqli_real_escape_string($conexao, $_POST['id']);
// $projeto = mysqli_real_escape_string($conexao, $_POST['projeto']);

// $sqlProjeto = "SELECT * FROM projetos WHERE id_projeto = '$projeto'";
// $resultadoProjeto = mysqli_query($conexao, $sqlProjeto);
// $empresa = mysqli_fetch_array($resultadoProjeto);
// $empresa = $empresa['empresa_projeto'];

// if (!empty($_POST['dia'])) :
//     $dia = mysqli_real_escape_string($conexao, $_POST['dia']);
// endif;
// if (!empty($_POST['mes'])) :
//     $mes = mysqli_real_escape_string($conexao, $_POST['mes']);
// endif;

// $setor = mysqli_real_escape_string($conexao, $_POST['setor']);
// $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
// $hora_lancada = mysqli_real_escape_string($conexao, $_POST['horas']);

// if (!empty($_POST['minutos'])) :
//     $minuto_lancado = mysqli_real_escape_string($conexao, $_POST['minutos']);
// else :
//     $minuto_lancado = 0;
// endif;

// $horas = $hora_lancada * 60 + $minuto_lancado;

// $sqlHora = "INSERT INTO horas_lancadas (id_user, id_projeto, id_setor, id_empresa, descricao, horas, dia, mes, ano, data_lancamento) VALUES ('$user',  '$projeto', '$setor', '$empresa', '$descricao', '$horas', '$dia', '$mes', '$ano', '$data')";

// if (mysqli_query($conexao, $sqlHora)) :
//     $_SESSION['success'] = true;
//     header("Location: $url");
// else :
//     // $_SESSION['erro'] = true;
//     // header("Location: $url");
//     $msg = mysqli_error($conexao);
//     echo $msg;
// endif;
