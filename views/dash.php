<?php
include '../includes/regras.php';
include '../includes/head.php';
include '../includes/menu.php';
// include '../includes/widget-horas.php';
?>
</div>
</div>
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


        <div class="col-lg-5 col-md-12">
            <div class="card widget h-100">
                <div class="card-header d-flex">
                    <h6 class="card-title">
                        Channels
                        <a href="#" class="bi bi-question-circle ms-1 small" data-bs-toggle="tooltip" title="Channels where your products are sold"></a>
                    </h6>
                </div>
                <div class="card-body">
                    <div id="sales-channels"></div>
                    <div class="row text-center mb-3 mt-4">
                        <div class="col-4">
                            <div class="display-7">48%</div>
                            <div class="text-success my-2 small">
                                <i class="bi bi-arrow-up me-1 small"></i>30.50%
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-circle-fill text-orange me-2 small"></i>
                                <span class="text-muted">Social</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="display-7">30%</div>
                            <div class="text-danger my-2 small">
                                <i class="bi bi-arrow-down me-1 small"></i>15.20%
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-circle-fill text-cyan me-2 small"></i>
                                <span class="text-muted">Google</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="display-7">22%</div>
                            <div class="text-success my-2 small">
                                <i class="bi bi-arrow-up me-1 small"></i>1.80%
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-circle-fill text-indigo me-2 small"></i>
                                <span class="text-muted">Email</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include '../includes/modal.php';
    include '../includes/footer.php';
    ?>