<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password - Atlan Group | Gestor de Projetos</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.png" />

    <!-- Themify icons -->
    <link rel="stylesheet" href="./dist/icons/themify-icons/themify-icons.css" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="./dist/css/app.css" type="text/css">

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
                                    <h1 class="display-8 mb-3">Recuperar Senha</h1>
                                    <p class="text-muted">Digite seu email cadastrado para enviarmos a senha.</p>
                                </div>
                                <form action="./includes/recuperar-senha.php" method="POST">
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control" autofocus placeholder="Seu email">
                                    </div>
                                    <div class="text-center text-lg-start">
                                        <button type="submit" class="btn btn-primary mb-4">Enviar</button>
                                        <a href="index.php" class="btn btn-danger mb-4">Voltar</a>
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
                            <p class="lead my-5">Bem-vindo ao portal do colaborador.</p>
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