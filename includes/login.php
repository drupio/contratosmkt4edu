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

$sql = "SELECT * FROM users WHERE email_user = '$login' AND pwd_user = '$senha'";
$resultado = mysqli_query($conexao, $sql);
$row = mysqli_num_rows($resultado);

// VM@102030
// d6de27e20a21c38f45169587d8154d27

if ($row == 1) :
    $dados = mysqli_fetch_assoc($resultado);
    $_SESSION['on'] = true;
    $_SESSION['id_user'] = $dados['id_user'];
    header('Location: ../views/dash.php');
else :
    $_SESSION['erro'] = true;
    header('Location: ../index.php');
endif;
