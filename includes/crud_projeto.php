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
$dir = __DIR__ . '/anexos';

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
$user = mysqli_escape_string($conexao, $_POST['user']);

$id_cliente = mysqli_real_escape_string($conexao, $_POST['id_cliente']);
$projeto = mysqli_real_escape_string($conexao, $_POST['projeto']);
$status = mysqli_real_escape_string($conexao, $_POST['status']);
$hora = mysqli_real_escape_string($conexao, $_POST['horas']);
$hora = $hora * 60;
$minuto = mysqli_real_escape_string($conexao, $_POST['minutos']);
$minuto = $hora + $minuto;
$comentario = mysqli_real_escape_string($conexao, $_POST['comentario']);

if ($_FILES['anexo']['size'] > 0) :
    $arquivo = $_FILES['anexo']['name'];
    $arquivo = str_replace(' ', '-', $arquivo);
    $ext = pathinfo($arquivo, PATHINFO_EXTENSION);
    $arquivonome = pathinfo($arquivo, PATHINFO_FILENAME);
    $anexo = $arquivonome . '_' . $id_cliente . '_' . md5(rand(1, 99)) . '.' . $ext;
    move_uploaded_file($_FILES['anexo']['tmp_name'], "$dir/$anexo");
else :
    $anexo = null;
endif;

$sqlProjeto = "INSERT INTO timeline VALUES (default, '$id_cliente', '$projeto', '$status', '$minuto', '$anexo', '$comentario', '$data', '$user')";
if (mysqli_query($conexao, $sqlProjeto)) :
    $sqlstatus = "UPDATE projetos_clientes SET status = '$status' WHERE cliente = '$id_cliente' AND projeto = '$projeto'";
    if (mysqli_query($conexao, $sqlstatus)) :
        $_SESSION['success'] = true;
        header("Location: $url?id=$id_cliente");
    else :
        $msg = mysqli_error($conexao);
        echo $msg;
    endif;
endif;
