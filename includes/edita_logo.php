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

$dir = __DIR__ . '/logos';

// tamanho do upload
define('KB', 1024);
define('MB', 1048576);
define('GB', 1073741824);
define('TB', 1099511627776);
$pesoArquivo = 1000 * KB;


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
$id_cliente = mysqli_escape_string($conexao, $_POST['id_cliente']);

if ($_FILES['logo']['size'] > $pesoArquivo) :
    $_SESSION['erro-peso'] = true;
    header("Location: $url");
    exit;
else :
    $logo_cliente = md5($_FILES['logo']['name'] . rand(1, 999)) . '.jpg';
    move_uploaded_file($_FILES['logo']['tmp_name'], "$dir/$logo_cliente");
endif;

$sql = "UPDATE clientes SET logo_cliente = '$logo_cliente' WHERE id_cliente = '$id_cliente'";
if (mysqli_query($conexao, $sql)) :
    $_SESSION['success'] = true;
    header("Location: $url?id=$id_cliente");
else :
    $msg = mysqli_error($conexao);
    echo $msg;
endif;
