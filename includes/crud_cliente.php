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
$cnpj = mysqli_real_escape_string($conexao, $_POST['cnpj']);

$sql = "SELECT * FROM clientes WHERE cnpj = '$cnpj'";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($resultado);
$row = mysqli_num_rows($resultado);

if ($dados > 0) :
    $_SESSION['erro-user'] = true;
    header("Location: $url");
    exit;
else :
    $nome_cliente = mysqli_real_escape_string($conexao, $_POST['nome_cliente']);
    $quantitativo = mysqli_real_escape_string($conexao, $_POST['quantitativo']);
    $extensao = mysqli_real_escape_string($conexao, $_POST['extensao']);
    $de_ano = mysqli_real_escape_string($conexao, $_POST['de_ano']);
    $ate_ano = mysqli_real_escape_string($conexao, $_POST['ate_ano']);
    $bonificacao = mysqli_real_escape_string($conexao, $_POST['bonificacao']);
    $observacao = mysqli_real_escape_string($conexao, $_POST['observacao']);
    $projeto = $_POST['projeto'];

    $sql = "INSERT INTO clientes (nome_cliente, cnpj, quantitativo, extensao, de_ano, ate_ano, bonificacao, observacao) VALUES ('$nome_cliente', '$cnpj', '$quantitativo', '$extensao', '$de_ano', '$ate_ano', '$bonificacao', '$observacao')";
    if (mysqli_query($conexao, $sql)) :
        for ($i = 0; $i < count($projeto); $i++) :
            $sqlp = "INSERT INTO projetos_clientes (cliente, projeto) VALUES ('$cnpj', '$projeto[$i]')";
            if (mysqli_query($conexao, $sqlp)) :
                $_SESSION['success'] = true;
                header("Location: $url");
            else :
                $msg = mysqli_error($conexao);
                echo $msg;
            endif;
        endfor;
        $_SESSION['success'] = true;
        header("Location: $url");
    else :
        $msg = mysqli_error($conexao);
        echo $msg;
    endif;
endif;
