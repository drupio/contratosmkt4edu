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
        <div class="page-title">Horas do Dia</div>
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
        <?php include '../includes/alertas.php'; ?>
        <div class="card bg-light border-0 mb-4">
            <div class="card-body text-center text-sm-start">
                <div class="row align-items-center">
                    <div class="col-sm-auto">
                        <div class="display-3">
                            <i class="bi bi-stopwatch text-purple"></i>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <p class="ms-2 mb-0 fs-3 text-blue"><?php echo $somaDia ?>h <span class="text-dark fs-4 ">Lançadas hoje </span></p>
                        <?php if ($somaDia != 0) : ?>
                            <p class="ms-2 mb-0">Você lançou <span class="text-pink"><?php echo $somaDia ?>h </span> de um total de
                                <?php if (date('D') == 'Fri') : echo '<span class="text-pink">8:00h</span> a serem trabalhadas.';
                                else : echo '<span class="text-pink">9:00h</span> a serem trabalhadas.';
                                endif; ?>
                            </p>
                        <?php else : echo "<p class='ms-2 mb-0'>Você ainda não lançou horas hoje.</p>";
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="card widget">
            <div class="card-header">
                <h5 class="card-title">Horas lançadas hoje</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover" id="datatable-example">
                    <thead class="table-dark">
                        <th class="small">ID</th>
                        <th>Produto - Projeto</th>
                        <th>Empresa</th>
                        <th class="text-center">Horas</th>
                        <th class="text-center">Descrição</th>
                        <th class="text-center">Excluir</th>
                    </thead>
                    <tbody>
                        <?php
                        while ($horas_user_hoje = mysqli_fetch_array($resultadoHorasUsersHoje)) : ?>
                            <tr>
                                <td class="text-muted small"><?php echo $horas_user_hoje['id_hora']; ?></td>
                                <td><?php echo '<strong>' . $horas_user_hoje['nome_produto'] . '</strong> - ' .  $horas_user_hoje['nome_projeto']; ?></td>
                                <td><?php echo $horas_user_hoje['nome_empresa']; ?></td>
                                <td class="text-secondary text-center">
                                    <span class="text-secondary fs-6"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <?php
                                        $hora_user = $horas_user_hoje['minutos'] / 60;
                                        $hora_user = convertHoras($hora_user);
                                        echo $hora_user;
                                        ?>
                                    </span>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-info-circle-fill text-secondary fs-4 pointer-event" data-bs-container="body" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable<?php echo $horas_user_hoje['id_hora']; ?>"></i>
                                </td>
                                <div class="modal fade" id="exampleModalScrollable<?php echo $horas_user_hoje['id_hora']; ?>" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Descrição da Hora #<?php echo $horas_user_hoje['id_hora']; ?> </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?php echo $horas_user_hoje['descricao']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <td class="text-center">
                                    <form action="../includes/deletar_hora.php" method="POST">
                                        <input type="hidden" name="id_hora" value="<?php echo $horas_user_hoje['id_hora']; ?>">
                                        <input type="hidden" name="url" value="<?php echo $url; ?>">
                                        <button type="submit" class="btn btn-danger text-light btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Excluir Hora #<?php echo $horas_user_hoje['id_hora']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <p class="text-muted text-end mt-2"><small><i class="fa fa-info-circle" aria-hidden="true"></i> Você só pode excluir horas no dia em que foram lançadas.</small></p>

        </div>
    </div>
    <?php
    include '../includes/modal-horas.php';
    include '../includes/footer.php';
    ?>