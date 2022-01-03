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

if ($row == 1) :
    $dados = mysqli_fetch_assoc($resultado);
    $_SESSION['on'] = true;
    $_SESSION['id_user'] = $dados['id_user'];
    $_SESSION['setor_user'] = $dados['setor_user'];
    $_SESSION['nivel'] = $dados['nivel_user'];
    if ($_SESSION['nivel'] == 88 or $_SESSION['nivel'] == 77) {
        header('Location: ../views/colaboradores.php');
    } elseif ($_SESSION['nivel'] == 1010 or $_SESSION['nivel'] == 99 or $_SESSION['nivel'] == 66) {
        header('Location: ../views/empresas.php');
    } else {
        header('Location: ../views/dash.php');
    };
else :
    $_SESSION['erro'] = true;
    header('Location: ../index.php');
endif;
