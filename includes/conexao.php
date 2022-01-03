<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$dir = __DIR__;

$servidor = "localhost";

if (substr($dir, 0, 2) == 'C:') :
    $usuario = "root";
    $senha = "";
    $banco = "bancodehoras";
else :
    $usuario = "atlangro_bancodehoras";
    $senha = "EgD.rbr3Xg@y";
    $banco = "atlangro_bancodehoras_v3";
endif;

$conexao = mysqli_connect($servidor, $usuario, $senha) or die(mysqli_error($conexao));
$db = mysqli_select_db($conexao, $banco);
mysqli_set_charset($conexao, "utf8");