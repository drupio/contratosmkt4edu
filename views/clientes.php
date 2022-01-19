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
        <div class="page-title">Clientes</div>
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
                <i class="bi bi-plus-circle"></i> Novo Cliente
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
                        <?php
                        $sqlC = "SELECT * FROM clientes AS c JOIN status_clientes AS s ON c.status_cliente = s.id_status";
                        $r = mysqli_query($conexao, $sqlC);
                        while ($d = mysqli_fetch_array($r)) :
                        ?>
                            <tr>
                                <td>
                                    <?php if (!empty($d['logo_cliente'])) : ?>
                                        <a class="image-popup" href="<?php echo $img_dir . 'logos' . '/' . $d['logo_cliente']; ?>">
                                            <img width="100" class="rounded-circle border avatar me-3" src="../includes/logos/<?php echo $d['logo_cliente']; ?>" alt="">
                                        </a>
                                    <?php else : ?>
                                        <img src="../assets/images/logos/logo.png" class="rounded-circle border avatar me-3" alt="image">
                                    <?php endif; ?>
                                </td>
                                <td class="text-wrap">
                                    <?php echo $d['nome_cliente']; ?>
                                </td>
                                <td class="text-wrap text-center">
                                    <?php echo $d['nome_status']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $d['quantitativo']; ?>
                                </td>
                                <td>
                                    <div class="d-flex flex-wrap">
                                        <?php
                                        $sqlProjetos = "SELECT * FROM projetos_clientes AS c JOIN projetos_existentes AS p ON c.projeto = p.id_projeto JOIN status_projetos AS s ON c.status = s.id_status WHERE cliente = '{$d['id_cliente']}' ";
                                        $rP = mysqli_query($conexao, $sqlProjetos);
                                        $exist = mysqli_num_rows($rP);
                                        if ($exist == 0) :
                                            echo "<span class='badge m-1 bg-dark text-uppercase'> Nenhum Projeto Cadastrado</span>";
                                        else :
                                            while ($p = mysqli_fetch_array($rP)) :
                                                if ($p['status'] == 1) :
                                                    $cor = 'info';
                                                elseif ($p['status'] == 2) :
                                                    $cor = 'warning';
                                                elseif ($p['status'] == 3) :
                                                    $cor = 'secondary';
                                                elseif ($p['status'] == 4) :
                                                    $cor = 'secondary';
                                                elseif ($p['status'] == 5) :
                                                    $cor = 'danger';
                                                elseif ($p['status'] == 6) :
                                                    $cor = 'success';
                                                endif;
                                        ?>
                                                <span class="badge m-1 bg-<?php echo $cor ?> text-uppercase" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $p['nome_status'] ?>"> <?php echo $p['nome_projeto'] ?></span>
                                        <?php endwhile;
                                        endif; ?>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <form action="view.php" method="GET">
                                        <input type="hidden" name="id" value="<?php echo $d['id_cliente']; ?>">
                                        <button type="submit" class="btn btn-sm  btn-outline-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </form>

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