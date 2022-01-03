<?php
include '../includes/regras.php';
include '../includes/head.php';
include '../includes/menu.php';


?>
</div>
</div>
<!-- ../  menu -->

<?php if ($_SESSION['nivel'] != 1) : ?>
    <!-- layout-wrapper  -->
    <div class="layout-wrapper">

        <!-- header -->
        <div class="header">
            <div class="menu-toggle-btn">
                <!-- Menu close button for mobile devices  -->
                <a href="#">
                    <i class="bi bi-list"></i>
                </a>
            </div>
            <!-- Logo  -->
            <a href="#" class="logo">
                <img width="100" src="../assets/images/logo.svg" alt="logo">
            </a>
            <!-- ../ Logo  -->
            <div class="page-title">Colaboradores</div>
            <?php if (isset($_SESSION['rechum']) or (isset($_SESSION['admin']))) : ?>
                <div class="header-bar ms-auto">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item ms-3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalColab">
                                <i class="bi bi-plus-circle"></i> Criar Colaborador
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="header-mobile-buttons">
                    <button type="button" class="btn btn-primary d-md-none actions-btn" data-bs-toggle="modal" data-bs-target="#modalColab">
                        <i class="bi bi-plus-circle"></i> Criar Colaborador
                    </button>
                </div>
            <?php endif; ?>
        </div>
        <!-- ../ header -->

        <!-- content -->
        <div class="content pt-1">
            <?php include '../includes/alertas.php'; ?>
            <!-- <div class="card bg-light border-0 mb-4">
                <div class="card-body text-center">
                    <div class="d-flex align-items-center">
                        <div class="display-7">
                            <i class="bi bi-stopwatch text-purple"></i>
                        </div>
                        <div>
                            <?php
                            if (isset($_SESSION['admin'])) :
                                $sqlTotalHoras = "SELECT sum(minutos) AS total FROM horas_lancadas WHERE status_hora = 1  AND mes = '$mes'";
                            else :
                                $sqlTotalHoras = "SELECT sum(minutos) AS total FROM horas_lancadas WHERE id_setor = '$setor_user' AND status_hora = 1 AND mes = '$mes'";
                            endif;
                            $resultadoTotalHoras = mysqli_query($conexao, $sqlTotalHoras);
                            $totalhoras = mysqli_fetch_assoc($resultadoTotalHoras);
                            $soma = $totalhoras['total'] / 60;
                            $soma = convertHoras($soma);
                            ?>
                            <p class="ms-2 mb-0 fs-3 text-blue"><?php echo $soma ?>h <span class="text-dark fs-4 ">Lançadas no mês de <?php echo $meses[$mes - 1]; ?> </span></p>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="my-4">
                <table class="table table-custom table-lg mb-0 text-uppercase" id="datatable-example">
                    <thead class="">
                        <tr class="">
                            <th class="">Colaborador</th>
                            <th class="">Setor</th>
                            <th class="text-center">Horas</th>
                            <?php if (isset($_SESSION['admin']) or isset($_SESSION['financ'])) : ?>
                                <th class="text-center">R$ Total</th>
                            <?php endif; ?>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['admin']) or isset($_SESSION['rechum'])) :
                            $sqlColaboradores = "SELECT * FROM users AS u JOIN setores AS s ON u.setor_user = s.id_setor WHERE nivel_user = 1 ORDER BY nome_user ";
                        elseif (isset($_SESSION['gestor'])) :
                            $sqlColaboradores = "SELECT * FROM users AS u JOIN setores AS s ON u.setor_user = s.id_setor WHERE nivel_user = 1 AND setor_user = '$setor_user' ORDER BY nome_user";
                        endif;
                        $resultado = mysqli_query($conexao, $sqlColaboradores);
                        while ($colaborador = mysqli_fetch_array($resultado)) : ?>
                            <tr>
                                <td>
                                    <a href="horade.php?id=<?php echo $colaborador['id_user']; ?>">
                                        <?php if (!empty($colaborador['foto_user'])) : ?>
                                            <img src="<?php echo "../assets/images/user/" . $colaborador['foto_user']; ?>" class="rounded-circle avatar me-3" alt="image">
                                        <?php else : ?>
                                            <img src="../assets/images/user.png" class="rounded-circle avatar me-3" alt="image">
                                        <?php endif; ?>
                                        <?php echo explode(' ', trim($colaborador['nome_user']))[0]; ?>
                                    </a>
                                </td>
                                <td><?php echo $colaborador['nome_setor']; ?></td>
                                <td class="text-secondary text-center">
                                    <span class='text-secondary fs-6'><i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <?php
                                        $sqlHoras = "SELECT sum(minutos) AS total FROM horas_lancadas WHERE id_user = {$colaborador['id_user']} AND status_hora = 1";
                                        $resultadoSumHoras = mysqli_query($conexao, $sqlHoras);
                                        $sumHoraHoras = mysqli_fetch_array($resultadoSumHoras);
                                        $sumHora = $sumHoraHoras['total'] / 60;
                                        $sumHora = convertHoras($sumHora);
                                        echo $sumHora;
                                        ?>
                                    </span>
                                </td>
                                <?php if (isset($_SESSION['admin']) or isset($_SESSION['financ'])) : ?>
                                    <td class="text-center">
                                        <span class='text-success fs-6'>
                                            <?php
                                            $sqlValorUser = "SELECT sum(valor_hora) AS total FROM horas_lancadas WHERE id_user = {$colaborador['id_user']} AND status_hora = 1";
                                            $resultadoSumValorUser = mysqli_query($conexao, $sqlValorUser);
                                            $sumHoraValorUser = mysqli_fetch_array($resultadoSumValorUser);
                                            if ($sumHoraValorUser['total'] > 0) {
                                                echo '<i class="fa fa-money" aria-hidden="true"></i> ' . $sumHoraValorUser['total'];
                                            } else {
                                                echo '<span class="text-muted"><i class="fa fa-money" aria-hidden="true"></i> 0.00</span>';
                                            };
                                            ?>
                                        </span>
                                    </td>
                                <?php endif; ?>
                                <td class="text-center">
                                    <?php if ($colaborador['status_user'] == 1) {
                                        echo '<span class="badge bg-success text-uppercase">Ativo</span>';
                                    } else {
                                        echo '<span class="badge bg-light text-dark text-uppercase">Desligado</span>';
                                    }; ?>
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
endif;
include '../includes/footer.php';
?>