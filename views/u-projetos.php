<?php
include '../includes/regras.php';
include '../includes/head.php';
include '../includes/menu.php';
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
        <div class="page-title">Projetos</div>
        <div class="header-bar ms-auto">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item ms-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-plus-circle"></i> Lançar Horas
                    </button>
                </li>
            </ul>
        </div>
        <!-- Header mobile buttons -->
        <div class="header-mobile-buttons">
            <button type="button" class="btn btn-primary d-md-none actions-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-plus-circle"></i> Horas
            </button>
        </div>
        <!-- ../ Header mobile buttons -->
    </div>
    <!-- ../ header -->

    <!-- content -->
    <div class="content pt-1">
        <div class="my-4">
            <?php include '../includes/alertas.php'; ?>
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-title">Total de horas lançadas por projeto</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-custom table-lg mb-0 text-uppercase">
                    <thead class="">
                        <tr class="">
                            <th class="">Projeto</th>
                            <th class="">Produto</th>
                            <th class="">Empresa</th>
                            <th class="text-md-center">Descrição</th>
                            <th class="text-md-end">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // $sql = "SELECT * FROM projetos AS p JOIN (SELECT DISTINCT id_projetos FROM horas_lancadas WHERE id_user = '$id_user' AND status_hora = 1) AS h ON h.id_projeto = p.id_projeto JOIN produtos AS t ON h.id_produto = t.id_produto JOIN empresas AS e ON h.id_empresa = e.id_empresa ";
                        $sql = "SELECT *, DISTINCT id_projeto FROM horas_lancadas AS h JOIN projetos AS p ON h.id_projeto = p.id_projeto WHERE h.id_user = '$id_user'";
                        $resutado = mysqli_query($conexao, $sql);
                        while ($horas_projetos = mysqli_fetch_array($resutado)) : ?>
                            <tr class="pointer-event" data-bs-container="body" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable<?php echo $horas_projetos['id_projeto']; ?>">
                                <td><strong><?php echo $horas_projetos['nome_projeto']; ?></strong></td>
                                <td><?php echo $horas_projetos['nome_produto']; ?></td>
                                <td><?php echo $horas_projetos['nome_empresa']; ?></td>
                                <td class="text-md-center">
                                    <i class="bi bi-info-circle-fill text-secondary fs-4 pointer-event"></i>
                                </td>
                                <div class="modal fade" id="exampleModalScrollable<?php echo $horas_projetos['id_projeto']; ?>" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Descrição do projeto <strong><?php echo $horas_projetos['nome_projeto']; ?></strong> </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?php echo $horas_projetos['descricao_projeto']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <td class="text-secondary text-md-end">
                                    <span class="text-secondary fs-6"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <?php
                                        $sqlHoras = "SELECT sum(minutos) AS total FROM horas_lancadas WHERE id_user = '$id_user' AND id_projeto = {$horas_projetos['id_projeto']} AND status_hora = 1";
                                        $resultHP = mysqli_query($conexao, $sqlHoras);
                                        $sumHoraHoras = mysqli_fetch_array($resultHP);
                                        $sumHora = $sumHoraHoras['total'] / 60;
                                        $sumHora = convertHoras($sumHora);
                                        echo $sumHora;
                                        ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    include '../includes/modal-horas.php';
    include '../includes/footer.php';
    ?>