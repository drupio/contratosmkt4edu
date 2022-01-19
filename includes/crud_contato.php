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
$user = mysqli_escape_string($conexao, $_POST['user']);
$id = mysqli_escape_string($conexao, $_POST['id']);
$responsavel = mysqli_real_escape_string($conexao, $_POST['responsavel']);
$telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
$whatsapp = mysqli_real_escape_string($conexao, $_POST['whatsapp']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);
$site = mysqli_real_escape_string($conexao, $_POST['site']);

$sql = "UPDATE clientes SET responsavel = '$responsavel', telefone = '$telefone', whatsapp = '$whatsapp', email = '$email', site = '$site', endereco = '$endereco', editado_em = '$data', editado_por = '$user' WHERE id_cliente = '$id'";
if (mysqli_query($conexao, $sql)) :
    $_SESSION['success'] = true;
    header("Location: $url?id=$id");
else :
    $msg = mysqli_error($conexao);
    echo $msg;
endif;
