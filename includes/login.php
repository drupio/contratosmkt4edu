<?php
session_start();
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

$login = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['pwd']);
$senha = md5($senha);

$login = trim($login);

$sql = "SELECT * FROM users WHERE email_user = '$login' AND pwd_user = '$senha' AND status_user = 1";
$resultado = mysqli_query($conexao, $sql);
$row = mysqli_num_rows($resultado);

// 2e8a97057eedd058f5be91e80152e3e2

if ($row == 1) :
    $dados = mysqli_fetch_assoc($resultado);
    $_SESSION['on'] = true;
    $_SESSION['id_user'] = $dados['id_user'];
    header('Location: ../views/dash.php');
else :
    $_SESSION['erro'] = true;
    header('Location: ../index.php');
endif;
