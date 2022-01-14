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
$nomeEmpresa = mysqli_real_escape_string($conexao, $_POST['nome_empresa']);
$nomeEmpresa = strtoupper($nomeEmpresa);
$nomeUser = mysqli_real_escape_string($conexao, $_POST['id_user']);

$sqlEmpresa = "INSERT INTO empresas (nome_empresa, empresa_criada_por, empresa_criada_em) VALUES ('$nomeEmpresa', '$nomeUser', '$data')";

if (mysqli_query($conexao, $sqlEmpresa)) :
    $_SESSION['success'] = true;
    header("Location: $url");
else :
    // $_SESSION['erro'] = true;
    // header("Location: $url");
    $msg = mysqli_error($conexao);
    echo $msg;
endif;
