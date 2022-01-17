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
        <div class="page-title">Projetos</div>
        <div class="header-bar ms-auto">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item ms-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProjeto">
                        <i class="bi bi-plus-circle"></i> Novo Projeto
                    </button>
                </li>
            </ul>
        </div>
        <!-- Header mobile buttons -->
        <div class="header-mobile-buttons">
            <button type="button" class="btn btn-primary d-md-none actions-btn" data-bs-toggle="modal" data-bs-target="#addProjeto">
                <i class="bi bi-plus-circle"></i> Novo Projeto
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
                <h5 class="card-title">Projetos Existentes</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-custom table-lg mb-0">
                    <thead>
                        <tr>
                            <th class="text-muted small">#ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th class="text-center">Quant</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sqlC = "SELECT * FROM projetos_existentes";
                        $r = mysqli_query($conexao, $sqlC);
                        while ($p = mysqli_fetch_array($r)) :
                        ?>
                            <tr>
                                <td class="text-muted small">
                                    <?php echo $p['id_projeto']; ?>
                                </td>
                                <td>
                                    <strong class="text-uppercase"><?php echo $p['nome_projeto']; ?></strong>
                                </td>
                                <td class="text-wrap w-75">
                                    <?php echo $p['desc_projeto']; ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    $sql = "SELECT count(id) AS TOTAL FROM projetos_clientes WHERE projeto = '{$p['id_projeto']}' ";
                                    $res = mysqli_query($conexao, $sql);
                                    $count = mysqli_fetch_array($res);
                                    $count = $count['TOTAL'];
                                    echo $count;
                                    ?>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    include '../includes/modal.php';
    include '../includes/footer.php';
    ?>