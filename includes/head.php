<!doctype html>
<html lang="pt-BR">

<head>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "2d2da1a0-e87d-49b7-ae22-74337f599a58",
            });
        });
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Atlan Group | Gestor de Horas</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="../dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css">

    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="../dist/css/bootstrap-docs.css" type="text/css">

    <!-- Slick -->
    <link rel="stylesheet" href="../libs/slick/slick.css" type="text/css">

    <!-- Ajax Google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../dist/icons/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="../dist/css/app.css" type="text/css">

    <!-- CSS -->
    <link rel="stylesheet" href="../libs/dataTable/datatables.min.css" type="text/css">
    <link rel="stylesheet" href="../libs/datepicker/daterangepicker.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="theme-color" content="#f5f4fe" />

</head>

<body class="">

    <!-- preloader -->
    <div class="preloader">
        <img src="../assets/images/logo.svg" alt="logo">
        <div class="preloader-icon"></div>
    </div>
    <!-- ../ preloader -->
    <!-- menu -->
    <div class="menu">
        <div class="menu-header">
            <a href="#" class="menu-header-logo">
                <img src="../assets/images/logo.svg" alt="logo">
            </a>
            <a href="#" class="btn btn-sm menu-close-btn">
                <i class="bi bi-x"></i>
            </a>
        </div>
        <div class="menu-body">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <div class="avatar me-3 border">
                        <?php if (!empty($dados_user['foto_user'])) : ?>
                            <img src="<?php echo "../assets/images/user/" . $dados_user['foto_user']; ?>" class="rounded-circle" alt="image">
                        <?php else : ?>
                            <img src="../assets/images/user.png" class="rounded-circle" alt="image">
                        <?php endif; ?>
                    </div>
                    <div>
                        <div class="fw-bold text-dark text-uppercase"><?php echo $dados_user['nome_user']; ?></div>
                        <small class="text-muted"><?php echo $dados_user['cargo_nome']; ?></small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="perfil.php" class="dropdown-item d-flex align-items-center">
                        <i class="bi bi-person dropdown-item-icon"></i> Perfil
                    </a>
                    <a href="../includes/logout.php" class="dropdown-item d-flex align-items-center text-danger">
                        <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                    </a>
                </div>
            </div>