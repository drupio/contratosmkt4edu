<?php

date_default_timezone_set('America/Fortaleza');

$hora = date('H');
$minuto = date('i');
$segundos = date('s');

$dia = date('d');
$mes = date('m');
$ano = date('Y');
$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

$data = $dia . '/' . $meses[$mes - 1] . '/' . $ano . ' - ' . $hora . ':' . $minuto . ':' . $segundos;

include 'conexao.php';

session_start();
if (!isset($_SESSION['on'])) :
    $_SESSION['off'] = true;
    header('Location: ../index.php');
    exit;
endif;

$id_user = $_SESSION['id_user'];
$url = $_SERVER['PHP_SELF'];

$sql = "SELECT * FROM users WHERE id_user = '$id_user'";
$resultadoUser = mysqli_query($conexao, $sql);
$dados_user = mysqli_fetch_array($resultadoUser);
