<?php
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