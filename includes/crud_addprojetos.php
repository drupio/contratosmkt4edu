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
$nome_projeto = mysqli_escape_string($conexao, $_POST['nome_projeto']);
$desc_projeto = mysqli_escape_string($conexao, $_POST['desc_projeto']);

$sqlProjeto = "INSERT INTO projetos_existentes VALUES (default, '$nome_projeto', '$desc_projeto')";
if (mysqli_query($conexao, $sqlProjeto)) :
    $_SESSION['success'] = true;
    header("Location: $url");
else :
    $msg = mysqli_error($conexao);
    echo $msg;
endif;
