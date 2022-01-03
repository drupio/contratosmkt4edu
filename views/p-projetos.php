<?php
include '../includes/regras.php';
include '../includes/head.php';
include '../includes/menu.php';
?>

</div>

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
        <?php
        $p_id = filter_input(INPUT_GET, 'p_id', FILTER_SANITIZE_NUMBER_INT);
        $page = 'projetos';
        $idpage = 'id_projeto';
        $sqlPage = "SELECT * FROM $page WHERE $idpage = $p_id";
        $resultado = mysqli_query($conexao, $sqlPage);
        $dataPage = mysqli_fetch_array($resultado);
        ?>
        <div class="page-title">Relatório de Horas: <strong class="ms-2 text-secondary text-uppercase"><?php echo $dataPage['nome_projeto']; ?></strong></div>
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
                    $p_id = filter_input(INPUT_GET, 'p_id', FILTER_SANITIZE_NUMBER_INT);
                    if (isset($_GET['mes'])) :
                        $sqlTotalHoras = "SELECT sum(minutos) AS total FROM horas_lancadas WHERE id_projeto = $p_id AND status_hora = 1 AND mes = '$mes'";
                    else :
                        $sqlTotalHoras = "SELECT sum(minutos) AS total FROM horas_lancadas WHERE id_projeto = $p_id AND status_hora = 1";
                    endif;
                    $resultadoTotalHoras = mysqli_query($conexao, $sqlTotalHoras);
                    $totalhoras = mysqli_fetch_assoc($resultadoTotalHoras);
                    $soma = $totalhoras['total'] / 60;
                    $soma = convertHoras($soma);
                    ?>
                    <p class="ms-2 mb-0 fs-3 text-blue">
                        <?php echo $soma ?>h <span class="text-dark fs-4 ">Lançadas</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="card widget mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div class="row">
                    <div class="col-auto">
                        <div class="input-group">
                            <select id="mesLista" class="form-control" required>
                                <option value="">Filtrar por Mês</option>
                                <option value="<?php echo '?p_id=' . $_GET['p_id'] ?>">Todos</option>
                                <?php
                                $sql = "SELECT * FROM meses AS m JOIN (SELECT DISTINCT mes FROM horas_lancadas WHERE id_projeto = '$p_id') AS h ON m.mes_numero = h.mes";
                                $resultado = mysqli_query($conexao, $sql);
                                while ($meses = mysqli_fetch_array($resultado)) : ?>
                                    <option value="<?php echo '?p_id=' . $_GET['p_id'] . '&mes=' . $meses['mes'] ?>"><?php echo $meses['mes_nome'] ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table mb-0 table-hover text-uppercase" id="datatable-example">
                    <thead class="table-dark">
                        <tr class="">
                            <th class="small">ID</th>
                            <th class="">Data</th>
                            <th class="">Projeto</th>
                            <th class="">Colaborador</th>
                            <th class="text-center">Descrição</th>
                            <th class="text-center">Horas</th>
                            <?php if (isset($_SESSION['admin'])) : ?>
                                <th class="text-center">Custo</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_GET['mes'])) :
                            $sql = "SELECT * FROM horas_lancadas AS h JOIN users AS u ON h.id_user = u.id_user JOIN projetos AS p ON h.id_projeto = p.id_projeto WHERE h.id_projeto = '$id_projeto' AND h.status_hora = 1 AND h.mes = '$mes' ORDER BY h.id_hora DESC";
                        else :
                            $sql = "SELECT * FROM horas_lancadas AS h JOIN users AS u ON h.id_user = u.id_user JOIN projetos AS p ON h.id_projeto = p.id_projeto WHERE h.id_projeto = '$id_projeto' AND h.status_hora = 1 ORDER BY h.id_hora DESC";
                        endif;
                        $resultado = mysqli_query($conexao, $sql);
                        while ($H = mysqli_fetch_array($resultado)) : ?>
                            <tr data-bs-container="body" data-bs-toggle="modal" data-bs-target="#modal<?php echo $H['id_hora']; ?>">
                                <td class="text-muted small">
                                    <?php echo $H['id_hora']; ?>
                                </td>
                                <td class="text-muted small">
                                    <?php echo $H['dia'] . '/' . $H['mes'] . '/' . $H['ano']  ?>
                                </td>
                                <td>
                                    <strong><?php echo $H['nome_projeto']; ?></strong>
                                </td>
                                <td>
                                    <a href="horade.php?id=<?php echo $H['id_user']; ?>">
                                        <?php echo explode(' ', trim($H['nome_user']))[0]; ?>
                                    </a>
                                </td>

                                <td class="text-center">
                                    <i class="bi bi-info-circle-fill text-secondary fs-4 pointer-event"></i>
                                </td>
                                <div class="modal fade" id="modal<?php echo $H['id_hora']; ?>" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Descrição da Hora #<?php echo $H['id_hora']; ?> </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?php echo $H['descricao']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <td class="text-center">
                                    <span class="text-secondary fs-6"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <?php $hora_user = $H['minutos'] / 60;
                                        $hora_user = convertHoras($hora_user);
                                        echo $hora_user;
                                        ?>
                                    </span>
                                </td>
                                <?php if (isset($_SESSION['admin'])) : ?>
                                    <td class="text-center">
                                        <span class='text-success fs-6'><i class="fa fa-money" aria-hidden="true"></i>
                                            <?php echo $H['valor_hora']; ?>
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