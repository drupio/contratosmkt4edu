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

$empresaProjeto = mysqli_real_escape_string($conexao, $_POST['empresa_projeto']);
$setorProjeto = mysqli_real_escape_string($conexao, $_POST['setor_projeto']);
$produtoProjeto = mysqli_real_escape_string($conexao, $_POST['produto_projeto']);
$nomeProjeto = mysqli_real_escape_string($conexao, $_POST['nome_projeto']);
$nomeProjeto = strtoupper($nomeProjeto);
$prazoProjeto = mysqli_real_escape_string($conexao, $_POST['prazo_projeto']);
$descricaoProjeto = mysqli_real_escape_string($conexao, $_POST['descricao_projeto']);
$user = mysqli_real_escape_string($conexao, $_POST['id_user']);

$sqlProjeto = "INSERT INTO projetos (empresa_projeto, setor_projeto, produto_projeto, nome_projeto, prazo_projeto, descricao_projeto, projeto_criado_em, projeto_criado_por) VALUES ('$empresaProjeto', '$setorProjeto', '$produtoProjeto', '$nomeProjeto', '$prazoProjeto', '$descricaoProjeto', '$data', '$user')";

if (mysqli_query($conexao, $sqlProjeto)) :
    $_SESSION['success'] = true;
    header("Location: $url");
else :
    // $_SESSION['erro'] = true;
    // header("Location: $url");
    $msg = mysqli_error($conexao);
    echo $msg;
endif;
