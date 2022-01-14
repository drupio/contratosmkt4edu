<?php
session_start();
include 'conexao.php';

$url = mysqli_escape_string($conexao, $_POST['url']);
$hora = mysqli_real_escape_string($conexao, $_POST['id_hora']);

$sql = "UPDATE horas_lancadas SET status_hora = 0 WHERE id_hora = '$hora'";
if (mysqli_query($conexao, $sql)) :
    $_SESSION['success'] = true;
    header("Location: $url");
else :
    // $_SESSION['erro'] = true;
    // header("Location: $url");
    $msg = mysqli_error($conexao);
    echo $msg;
endif;
