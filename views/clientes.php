<?php
include '../includes/regras.php';
include '../includes/head.php';
include '../includes/menu.php';
// include '../includes/widget-horas.php';
?>
<!-- ../  menu -->

<!-- layout-wrapper -->
<div class="layout-wrapper">

    <!-- header -->
    <div class="header">
        <div class="menu-toggle-btn">
            <!-- Menu close button for mobile devices -->
            <a href="#">
                <i class="bi bi-list"></i>
            </a>
        </div>
        <!-- Logo -->
        <a href="#" class="logo">
            <img width="100" src="../assets/images/logo.svg" alt="logo">
        </a>
        <!-- ../ Logo -->
        <div class="page-title">Dashboard</div>
        <div class="header-bar ms-auto">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item ms-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="bi bi-plus-circle"></i> Novo Cliente
                    </button>
                </li>
            </ul>
        </div>
        <!-- Header mobile buttons -->
        <div class="header-mobile-buttons">
            <button type="button" class="btn btn-primary d-md-none actions-btn" data-bs-toggle="modal" data-bs-target="#addModal">
                <i class="bi bi-plus-circle"></i> Add Cliente
            </button>
        </div>
        <!-- ../ Header mobile buttons -->
    </div>
    <!-- ../ header -->

    <!-- content -->
    <div class="content pt-1">
        <?php include '../includes/alertas.php'; ?>


        <div class="card widget">
            <div class="card-header">
                <h5 class="card-title">Lista de Clientes</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-custom table-lg mb-0 text-uppercase" id="datatable">
                    <thead>
                        <tr>
                            <th>LOGO</th>
                            <th>CLIENTE</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Quant</th>
                            <th class="">Projetos</th>
                            <th class="actions">Acessar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a class="image-popup" href="../assets/images/logos/logo.png">
                                    <img src="../assets/images/logos/logo.png" class="rounded-circle border avatar me-3" alt="image">
                                </a>
                            </td>
                            <td class="text-wrap">
                                COLÔNIA HOLANDESA
                            </td>
                            <td class="text-wrap text-center">
                                <span class="small">Assinado em</span> 22/01/2022
                            </td>
                            <td>
                                1523
                            </td>
                            <td>
                                <div class="d-flex flex-wrap">
                                    <span class="badge m-1 bg-success text-uppercase">WEBSITE</span>
                                    <span class="badge m-1 bg-danger text-uppercase">LABORATÓRIO</span>
                                    <span class="badge m-1 bg-warning text-uppercase">VÍDEO</span>
                                    <span class="badge m-1 bg-dark text-uppercase">FACHADA</span>
                                    <span class="badge m-1 bg-primary text-uppercase">PESQUISA</span>
                                    <span class="badge m-1 bg-warning text-uppercase">FOTOS</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <a href="view.php" class="btn btn-sm  btn-outline-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="image-popup" href="../assets/images/logos/logo.png">
                                    <img src="../assets/images/logos/logo.png" class="rounded-circle border avatar me-3" alt="image">
                                </a>
                            </td>
                            <td class="text-wrap">
                                COLÔNIA HOLANDESA
                            </td>
                            <td class="text-wrap text-center">
                                NO GO
                            </td>
                            <td>
                                1523
                            </td>
                            <td>
                                <div class="d-flex flex-wrap">
                                    <span class="badge m-1 bg-success text-uppercase">WEBSITE</span>
                                    <span class="badge m-1 bg-danger text-uppercase">LABORATÓRIO</span>
                                    <span class="badge m-1 bg-warning text-uppercase">VÍDEO</span>
                                    <span class="badge m-1 bg-dark text-uppercase">FACHADA</span>
                                    <span class="badge m-1 bg-primary text-uppercase">PESQUISA</span>
                                    <span class="badge m-1 bg-warning text-uppercase">FOTOS</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <a href="view.php" class="btn btn-sm  btn-outline-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="image-popup" href="../assets/images/logos/logo.png">
                                    <img src="../assets/images/logos/logo.png" class="rounded-circle border avatar me-3" alt="image">
                                </a>
                            </td>
                            <td class="text-wrap">
                                COLÔNIA HOLANDESA
                            </td>
                            <td class="text-wrap text-center">
                                EMITIDO
                            </td>
                            <td>
                                1523
                            </td>
                            <td>
                                <div class="d-flex flex-wrap">
                                    <span class="badge m-1 bg-success text-uppercase">WEBSITE</span>
                                    <span class="badge m-1 bg-danger text-uppercase">LABORATÓRIO</span>
                                    <span class="badge m-1 bg-warning text-uppercase">VÍDEO</span>
                                    <span class="badge m-1 bg-dark text-uppercase">FACHADA</span>
                                    <span class="badge m-1 bg-primary text-uppercase">PESQUISA</span>
                                    <span class="badge m-1 bg-warning text-uppercase">FOTOS</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <a href="view.php" class="btn btn-sm  btn-outline-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="image-popup" href="../assets/images/logos/logo.png">
                                    <img src="../assets/images/logos/logo.png" class="rounded-circle border avatar me-3" alt="image">
                                </a>
                            </td>
                            <td class="text-wrap">
                                COLÔNIA HOLANDESA
                            </td>
                            <td class="text-wrap text-center">
                                NEGOCIAÇÃO
                            </td>
                            <td>
                                1523
                            </td>
                            <td>
                                <div class="d-flex flex-wrap">
                                    <span class="badge m-1 bg-success text-uppercase">WEBSITE</span>
                                    <span class="badge m-1 bg-danger text-uppercase">LABORATÓRIO</span>
                                    <span class="badge m-1 bg-warning text-uppercase">VÍDEO</span>
                                    <span class="badge m-1 bg-dark text-uppercase">FACHADA</span>
                                    <span class="badge m-1 bg-primary text-uppercase">PESQUISA</span>
                                    <span class="badge m-1 bg-warning text-uppercase">FOTOS</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <a href="view.php" class="btn btn-sm  btn-outline-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    include '../includes/modal.php';
    include '../includes/footer.php';
    ?>