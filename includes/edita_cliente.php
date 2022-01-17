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
$quantitativo = mysqli_real_escape_string($conexao, $_POST['quantitativo']);
$extensao = mysqli_real_escape_string($conexao, $_POST['extensao']);
$de_ano = mysqli_real_escape_string($conexao, $_POST['de_ano']);
$ate_ano = mysqli_real_escape_string($conexao, $_POST['ate_ano']);
$bonificacao = mysqli_real_escape_string($conexao, $_POST['bonificacao']);
$bonificacao = str_replace('R$ ', '', $bonificacao);
$pago_em = mysqli_real_escape_string($conexao, $_POST['pago_em']);
$observacao = mysqli_real_escape_string($conexao, $_POST['observacao']);
$status = mysqli_real_escape_string($conexao, $_POST['status_cliente']);

$sql = "UPDATE clientes SET quantitativo = '$quantitativo', extensao = '$extensao', de_ano = '$de_ano', ate_ano = '$ate_ano', bonificacao = '$bonificacao', pago_em = '$pago_em', observacao = '$observacao', status_cliente = '$status' WHERE id_cliente = '$id_cliente'";
if (mysqli_query($conexao, $sql)) :
    $_SESSION['success'] = true;
    header("Location: $url?id=$id_cliente");
else :
    $msg = mysqli_error($conexao);
    echo $msg;
endif;
