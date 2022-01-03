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

require '../php-mailer/PHPMailer.php';
require '../php-mailer/SMTP.php';
require '../php-mailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


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

$user = mysqli_real_escape_string($conexao, $_POST['id_user']);
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$nivel = mysqli_real_escape_string($conexao, $_POST['cargo']);
$setor = mysqli_real_escape_string($conexao, $_POST['setor']);
$valor = mysqli_real_escape_string($conexao, $_POST['valor']);
$valor = str_replace(",", ".", $valor);

$sql = "SELECT * FROM users WHERE email_user = '$email'";
$resultado = mysqli_query($conexao, $sql);
$row = mysqli_num_rows($resultado);

if ($row != 0) :
    $_SESSION['erro-user'] = true;
    header("Location: $url");
else :

    $sql = "INSERT INTO users (nome_user, email_user, nivel_user, setor_user, valor_hora_user, criado_em, criado_por) VALUES ( '$nome', '$email', '$nivel', '$setor', '$valor', '$data', '$user')";
    if (mysqli_query($conexao, $sql)) :
        $_SESSION['success'] = true;
        header("Location: $url");

        $mail = new PHPMailer(true);
        try {
            //DADOS DO DISPARADOR
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = "true";
            $mail->SMTPSecure = "tls";
            $mail->Port = "587";
            $mail->Username = "contato@viamaker.com";
            $mail->Password = "Su3VHwtXQl9V";
            //DE:
            $mail->setFrom("contato@viamaker.com");
            //PARA:
            $mail->addAddress($email);
            //ACEITA HTML E SÍMBOLOS NA MENSAGEM
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            //ASSUNTO:
            $mail->Subject = "BEM VINDO!";
            //MENSAGEM
            $mail->Body = " <p>Olá <strong>$nomeUser</strong> </p>
                            <p>Seja bem-vindo(a) ao <strong>Portal Atlan Group</strong> </p>
                            <p>Seu login de acesso é: $emailUser e sua senha inicial é: <strong>12345678</strong> </p>
                            <p>Por favor, troque-a por uma de sua preferência em seu perfil.</p>
                            <p>Acesse o Portal <a href='https://atlangroup.com.br/projetos'>aqui</a>.</p>
                            <p>Atlan Group</p>
                            <img src='http://atlangroup.com.br/projetos/assets/images/logo.svg' width='200px' alt=''>
                            ";
        } catch (Exception $e) {
            echo "Colaborador cadastrado com falha no envio do email. <br> Informar senha: 12345678 para logar no painel <br> Erro =  {$mail->ErrorInfo}";
        }
    else :
        // $_SESSION['erro'] = true;
        // header("Location: $url");
        $msg = mysqli_error($conexao);
        echo $msg;
    endif;
endif;
