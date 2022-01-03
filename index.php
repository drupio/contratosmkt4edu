<?php
session_start();
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Atlan Group | Gestor de Projetos</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" />

    <!-- Themify icons -->
    <link rel="stylesheet" href="./dist/icons/themify-icons/themify-icons.css" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="./dist/css/app.css" type="text/css">
    <!-- <link rel="stylesheet" href="./src/scss/core/custom-variables.scss"> -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="auth">
    <!-- begin::preloader-->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- end::preloader -->
    <div class="form-wrapper">
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="d-block d-lg-none text-center text-lg-start">
                                    <img width="120" src="./assets/images/logo.svg" alt="logo">
                                </div>
                                <div class="my-5 text-center text-lg-start">
                                    <h1 class="display-8">Entrar</h1>
                                    <p class="text-muted">Insira seus dados para continuar</p>
                                </div>
                                <form action="./includes/login-horas.php" method="POST" class="mb-5">
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="email" autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" name="pwd" class="form-control" placeholder="senha">
                                    </div>
                                    <div class="text-center text-lg-start">
                                        <p class="small">Esqueceu a senha? <a href="reset-password.php">Recupere aqui</a>.</p>
                                        <button type="submit" class="btn btn-primary">Logar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php
                        if (isset($_SESSION['erro'])) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Erro!!!</strong> E-mail não encontrado.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                            unset($_SESSION['erro']);
                        elseif (isset($_SESSION['off'])) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Sessão expirada.</strong> Faça o login novamente.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                            unset($_SESSION['off']);
                        elseif (isset($_SESSION['success'])) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Sucesso!</strong> Enviamos a senha para seu email.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                            unset($_SESSION['success']);
                        endif;
                        ?>
                    </div>
                    <div class="col d-none d-lg-flex border-start align-items-center justify-content-center flex-column text-center">
                        <div>
                            <img width="250" src="./assets/images/logo.svg" alt="logo">
                            <p class="lead mt-5">Bem-vindo ao portal do colaborador.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bundle scripts -->
    <script src="./libs/bundle.js"></script>

    <!-- Main Javascript file -->
    <script src="./dist/js/app.min.js"></script>
</body>

</html>