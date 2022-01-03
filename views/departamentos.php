<?php
include '../includes/regras.php';
include '../includes/head.php';
include '../includes/menu.php';
?>
</div>
</div>
<!-- ../  menu -->

<?php if ($_SESSION['nivel'] != 1) : ?>
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
            <div class="page-title">Departamentos</div>
            <?php if (isset($_SESSION['admin'])) : ?>
                <div class="header-bar ms-auto">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item ms-3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalSetor">
                                <i class="bi bi-plus-circle"></i> Criar Departamento
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="header-mobile-buttons">
                    <button type="button" class="btn btn-primary d-md-none actions-btn" data-bs-toggle="modal" data-bs-target="#exampleModalSetor">
                        <i class="bi bi-plus-circle"></i> Criar Departamento
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
                            <th class="">Departamento</th>
                            <th class="text-center">Colaboradores</th>
                            <th class="text-center">Horas Lançadas</th>
                            <?php if (isset($_SESSION['admin']) or isset($_SESSION['financ']) or isset($_SESSION['diretor'])) : ?>
                                <th class="text-end">R$ Total</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sqlSetor = "SELECT * FROM setores WHERE id_setor != 1 ORDER BY nome_setor";
                        $resultadoSetor = mysqli_query($conexao, $sqlSetor);
                        while ($dados_Setor = mysqli_fetch_array($resultadoSetor)) :
                        ?>
                            <tr>
                                <td>
                                    <a href="p-departamentos.php?p_id=<?php echo $dados_Setor['id_setor']; ?>"><strong><?php echo $dados_Setor['nome_setor']; ?></strong></a>
                                </td>
                                <td class="text-center">
                                    <?php
                                    $sql = "SELECT count(id_user) AS total FROM users WHERE setor_user = {$dados_Setor['id_setor']}";
                                    $resultado = mysqli_query($conexao, $sql);
                                    $dados = mysqli_fetch_array($resultado);
                                    $total = $dados['total'];
                                    echo $total;
                                    ?>
                                </td>
                                <td class="text-center">
                                    <span class='text-secondary fs-6'><i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <?php
                                        $sqlSetor = "SELECT sum(minutos) AS total FROM horas_lancadas WHERE id_setor = {$dados_Setor['id_setor']} AND status_hora = 1";
                                        $resultadoSumSetor = mysqli_query($conexao, $sqlSetor);
                                        $sumHoraSetor = mysqli_fetch_array($resultadoSumSetor);
                                        $sumHora = $sumHoraSetor['total'] / 60;
                                        $sumHora = convertHoras($sumHora);
                                        echo $sumHora;
                                        ?>
                                    </span>
                                </td>
                                <?php if (isset($_SESSION['admin']) or isset($_SESSION['financ']) or isset($_SESSION['diretor'])) : ?>
                                    <td class="text-end">
                                        <span class='text-success fs-6'>
                                            <?php
                                            $sqlSetor = "SELECT sum(valor_hora) AS total FROM horas_lancadas WHERE id_setor = {$dados_Setor['id_setor']} AND status_hora = 1";
                                            $resultadoSumSetor = mysqli_query($conexao, $sqlSetor);
                                            $sumHoraSetor = mysqli_fetch_array($resultadoSumSetor);
                                            if ($sumHoraSetor['total'] > 0) {
                                                echo '<i class="fa fa-money" aria-hidden="true"></i> ' . $sumHoraSetor['total'];
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
endif;
include '../includes/footer.php';
?>