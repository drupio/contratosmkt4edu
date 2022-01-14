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
$nomeProduto = mysqli_real_escape_string($conexao, $_POST['nome_produto']);
$nomeProduto = strtoupper($nomeProduto);
$id_empresa = mysqli_real_escape_string($conexao, $_POST['id_empresa']);
$descricao = mysqli_real_escape_string($conexao, $_POST['descricao_produto']);
$nomeUser = mysqli_real_escape_string($conexao, $_POST['id_user']);

$sqlProduto = "INSERT INTO produtos (nome_produto, empresa_produto, descricao_produto, produto_criado_por, produto_criado_em) VALUES ('$nomeProduto', '$id_empresa', '$descricao', '$nomeUser', '$data')";

if (mysqli_query($conexao, $sqlProduto)) :
    $_SESSION['success'] = true;
    header("Location: $url");
else :
    // $_SESSION['erro'] = true;
    // header("Location: $url");
    $msg = mysqli_error($conexao);
    echo $msg;
endif;
