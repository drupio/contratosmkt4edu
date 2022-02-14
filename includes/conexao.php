<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$dir = __DIR__;

$servidor = "localhost";

if (substr($dir, 0, 2) == 'C:') :
    $usuario = "root";
    $senha = "";
    $banco = "cadastromkt4edu";
else :
    $usuario = "mkt_user";
    $senha = "$0i6Wx{QUzaY";
    $banco = "cadastro_db";
endif;

$conexao = mysqli_connect($servidor, $usuario, $senha) or die(mysqli_error($conexao));
$db = mysqli_select_db($conexao, $banco);
mysqli_set_charset($conexao, "utf8");
