<?php
session_start();

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

$email = mysqli_escape_string($conexao, $_POST['email']);
$email = trim($email);

$sql = "SELECT * FROM users WHERE email_user = '$email'";
$resultado = mysqli_query($conexao, $sql);
$row = mysqli_num_rows($resultado);

if ($row == 1) :
    $dados = mysqli_fetch_assoc($resultado);
    $nome = $dados['nome_user'];
    $resetSenha = md5($dados['pwd_user']);
    $senha = substr($resetSenha, 0, 8);
    $novaSenha = md5($senha);

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
        $mail->Subject = "RECUPERAÇÃO DE SENHA";
        //MENSAGEM
        $mail->Body = " <p>Olá <strong>$nome</strong> </p>
                        <p>A sua senha de acesso temporária é: <strong>$senha</strong> </p>
                        <p>Por favor, troque-a por uma de sua preferência em seu perfil.</p>
                        <p>Acesse o Portal <a href='https://atlangroup.com.br/projetos'>aqui</a>.</p>
                        <p>Atlan Group</p>
                        <img src='http://atlangroup.com.br/projetos/assets/images/logo.svg' width='200px' alt=''>
                        ";
        if ($mail->Send()) :
            $sqlSenha = "UPDATE users SET pwd_user = '$novaSenha' WHERE email_user = '$email'";
            if (mysqli_query($conexao, $sqlSenha)) :
                $_SESSION['success'] = true;
                header("Location: ../index.php");
            endif;
        else :
            $_SESSION['erro'] = true;
            header("Location: ../index.php");
        endif;
    } catch (Exception $e) {
        echo "Erro! {$mail->ErrorInfo}";
    }
else :
    $_SESSION['erro'] = true;
    header("Location: ../reset-password.php");
endif;
