<?php
session_start();

include 'conexao.php';

$dir = __DIR__ . '/users';

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

// tamanho do upload
define('KB', 1024);
define('MB', 1048576);
define('GB', 1073741824);
define('TB', 1099511627776);
$pesoArquivo = 1000 * KB;


$url = mysqli_escape_string($conexao, $_POST['url']);

if (isset($_POST['mudar_senha'])) :
    $user = mysqli_escape_string($conexao, $_POST['id']);
    $pwd = mysqli_escape_string($conexao, $_POST['pwd']);
    $pwd2 = mysqli_escape_string($conexao, $_POST['pwd2']);

    if ($pwd == $pwd2) :

        $pwd = md5($pwd);

        $sql = "UPDATE users SET pwd_user = '$pwd' WHERE id_user = '$user'";

        if (mysqli_query($conexao, $sql)) :
            $_SESSION['success'] = true;
            header("Location: $url");
        else :
            $_SESSION['erro'] = true;
            header("Location: $url");
        endif;
    else :
        $_SESSION['erro-senha'] = true;
        header("Location: $url");
    endif;
endif;

if (isset($_POST['mudar_foto'])) :
    $user = mysqli_escape_string($conexao, $_POST['id']);
    if (
        $_FILES['foto']['size'] > $pesoArquivo
    ) :
        $_SESSION['erro-peso'] = true;
        header("Location: $url");
        exit;
    else :
        $foto = md5($_FILES['foto']['name'] . rand(1, 999)) . '.jpg';
        move_uploaded_file($_FILES['foto']['tmp_name'], "$dir/$foto");

        $sql = "UPDATE users SET foto_user = '$foto' WHERE id_user = '$user'";
        if (mysqli_query($conexao, $sql)) :
            echo $dir;
            $_SESSION['success'] = true;
            header("Location: $url");
        else :
            $_SESSION['erro'] = true;
            header("Location: $url");
        endif;
    endif;
endif;
