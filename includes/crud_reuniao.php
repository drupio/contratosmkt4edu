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
$id = mysqli_escape_string($conexao, $_POST['id']);
$user = mysqli_escape_string($conexao, $_POST['user']);
$reuniao = mysqli_escape_string($conexao, $_POST['reuniao']);
$projeto = $_POST['projeto'];

$sql = "INSERT INTO reuniao VALUES (default, '$id', '$reuniao', '$data', '$user')";
if (mysqli_query($conexao, $sql)) :
    for ($i = 0; $i < count($projeto); $i++) :
        $sqlp = "INSERT INTO projetos_clientes (cliente, projeto) VALUES ('$id', '$projeto[$i]')";
        if (mysqli_query($conexao, $sqlp)) :
            $_SESSION['success'] = true;
            header("Location: $url");
        else :
            $msg = mysqli_error($conexao);
            echo $msg;
        endif;
    endfor;
    $_SESSION['success'] = true;
    header("Location: $url?id=$id");
else :
    $msg = mysqli_error($conexao);
    echo $msg;
endif;
