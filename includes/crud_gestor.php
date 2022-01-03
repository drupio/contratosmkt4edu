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

$user = mysqli_real_escape_string($conexao, $_POST['id_user']);
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$cargo = mysqli_real_escape_string($conexao, $_POST['cargo']);
$setor = mysqli_real_escape_string($conexao, $_POST['setor']);
$valor = mysqli_real_escape_string($conexao, $_POST['valor_hora_user']);

$sql = "SELECT * FROM users WHERE email_user = '$email'";
$resultado = mysqli_query($conexao, $sql);
$row = mysqli_num_rows($resultado);

if ($row != 0) :
    $_SESSION['erro'] = true;
    header("Location: $url");
else :

    $sqlgestor = "INSERT INTO users (nome_user, email_user, nivel_user, setor_user, valor_hora_user, criado_em, criado_por) VALUES ('$nivel', '$emailgestor', '$nomegestor', '$cargogestor', '$setorGestor', '$data', '$user')";

    if (mysqli_query($conexao, $sqlgestor)) :
        $_SESSION['success'] = true;
        header("Location: $url");
    else :
        // $_SESSION['erro'] = true;
        // header("Location: $url");
        $msg = mysqli_error($conexao);
        echo $msg;
    endif;
endif;
