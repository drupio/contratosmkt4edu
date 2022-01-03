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
        <?php if (isset($_SESSION['admin'])) : ?>
            <div class="page-title">Empresas</div>
            <div class="header-bar ms-auto">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item ms-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalEmpresas">
                            <i class="bi bi-plus-circle"></i> Criar Empresa
                        </button>
                    </li>
                </ul>
            </div>
            <div class="header-mobile-buttons">
                <button type="button" class="btn btn-primary d-md-none actions-btn" data-bs-toggle="modal" data-bs-target="#ModalEmpresas">
                    <i class="bi bi-plus-circle"></i> Criar Empresa
                </button>
            </div>
        <?php endif; ?>
    </div>
    <!-- ../ header -->

    <!-- content -->
    <div class="content pt-1">
        <?php include '../includes/alertas.php'; ?>
        <div class="card bg-light border-0 mb-4">
            <div class="card-body text-center">
                <div class="d-flex align-items-center">
                    <div class="display-7">
                        <i class="bi bi-stopwatch text-purple"></i>
                    </div>
                    <?php
                    $sqlTotalHoras = "SELECT sum(minutos) AS total FROM horas_lancadas WHERE status_hora = 1";
                    $resultadoTotalHoras = mysqli_query($conexao, $sqlTotalHoras);
                    $totalhoras = mysqli_fetch_assoc($resultadoTotalHoras);
                    $soma = $totalhoras['total'] / 60;
                    $soma = convertHoras($soma);
                    ?>
                    <p class="ms-2 mb-0 fs-3 text-blue"><?php echo $soma ?>h <span class="text-dark fs-4 ">Lançadas no total</span></p>
                </div>
            </div>
        </div>
        <div class="my-4">
            <table class="table table-custom table-lg mb-0 text-uppercase">
                <thead>
                    <tr class="">
                        <th class="">Empresa</th>
                        <th class="text-center">Horas</th>
                        <?php if (isset($_SESSION['admin']) or isset($_SESSION['financ']) or isset($_SESSION['diretor'])) : ?>
                            <th class="text-end">R$ Total</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sqlEmpresa = "SELECT * FROM empresas WHERE status_empresa = 1 ORDER BY nome_empresa";
                    $resultadoEmpresa = mysqli_query($conexao, $sqlEmpresa);
                    while ($empresa = mysqli_fetch_array($resultadoEmpresa)) : ?>
                        <tr>
                            <td>
                                <a href="p-empresas.php?p_id=<?php echo $empresa['id_empresa']; ?>"><strong><?php echo $empresa['nome_empresa']; ?></strong></a>
                            </td>
                            <td class="text-secondary text-center">
                                <span class='text-secondary fs-6'><i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <?php
                                    $sqlSumEmpresa = "SELECT sum(minutos) AS total FROM horas_lancadas WHERE id_empresa = {$empresa['id_empresa']} AND status_hora = 1";
                                    $resultadoSumEmpresa = mysqli_query($conexao, $sqlSumEmpresa);
                                    $sumHoraEmpresa = mysqli_fetch_array($resultadoSumEmpresa);
                                    $sumHora = $sumHoraEmpresa['total'] / 60;
                                    $sumHora = convertHoras($sumHora);
                                    echo $sumHora;
                                    ?>
                                </span>
                            </td>
                            <?php if (isset($_SESSION['admin']) or isset($_SESSION['financ']) or isset($_SESSION['diretor'])) : ?>
                                <td class="text-end">
                                    <span class='text-success fs-6'>
                                        <?php
                                        $sqlValor = "SELECT sum(valor_hora) AS total FROM horas_lancadas WHERE id_empresa = {$empresa['id_empresa']} AND status_hora = 1";
                                        $resultadoSumValor = mysqli_query($conexao, $sqlValor);
                                        $sumHoraValor = mysqli_fetch_array($resultadoSumValor);
                                        if ($sumHoraValor['total'] > 0) {
                                            echo '<i class="fa fa-money" aria-hidden="true"></i> ' . $sumHoraValor['total'];
                                        } else {
                                            echo '<span class="text-muted"><i class="fa fa-money" aria-hidden="true"></i> 0.00</span>';
                                        }
                                        ?>
                                    </span>
                                </td>
                            <?php endif; ?>
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