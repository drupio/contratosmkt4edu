<?php
$sql = "SELECT * FROM users WHERE id_user = '$id_user'";
$resultado = mysqli_query($conexao, $sql);
$senhaUser = mysqli_fetch_array($resultado);
if ($senhaUser['pwd_user'] == "25d55ad283aa400af464c76d713c07ad" and $senhaUser['id_user'] == $_SESSION['id_user']) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Troque sua Senha!</strong> <a href="../views/perfil.php">Clique aqui</a> e altere para uma de sua preferência.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif;
if (isset($_SESSION['success'])) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sucesso!!!</strong> Alteração realizada.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif;
unset($_SESSION['success']); ?>
<?php if (isset($_SESSION['erro'])) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Erro!!!</strong> Alteração não realizada.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif;
unset($_SESSION['erro']); ?>
<?php if (isset($_SESSION['erro-senha'])) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Erro!!!</strong> As senhas não coincidem.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif;
unset($_SESSION['erro-senha']); ?>
<?php if (isset($_SESSION['erro-peso'])) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Erro!!!</strong> Imagem acima de 1 mb.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif;
unset($_SESSION['erro-peso']); ?>
<?php if (isset($_SESSION['erro-user'])) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>E-mail inválido!</strong> Esse e-mail já está sendo usado por outro colaborador.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif;
unset($_SESSION['erro-user']); ?>