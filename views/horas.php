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
        <div class="page-title">Relatório de Horas</div>
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
                        <?php if (isset($_GET['mes'])) : ?>
                            <p class="ms-2 mb-0 fs-3 text-blue"><?php echo $soma ?>h <span class="text-dark fs-4 ">Lançadas no mês de <?php echo $meses[$mes - 1]; ?> </span></p>
                        <?php else : ?>
                            <p class="ms-2 mb-0 fs-3 text-blue"><?php echo $soma ?>h <span class="text-dark fs-4 ">Lançadas </span></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="card widget mb-4">

            <!-- SELECTS -->
            <div class="card-header mb-5 mb-lg-3">
                <div class="row">
                    <div class="col-sm-9">
                        <h5 class="card-title">Horas Lançadas</h5>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-floating">
                            <select id="mesLista" class="form-select" required>
                                <option value="">Selecione</option>
                                <?php
                                $sql = "SELECT * FROM meses AS m JOIN (SELECT DISTINCT mes FROM horas_lancadas WHERE id_user = '$id_user') AS h ON m.mes_numero = h.mes";
                                $resultado = mysqli_query($conexao, $sql);
                                while ($meses = mysqli_fetch_array($resultado)) : ?>
                                    <option value="<?php echo '?mes=' . $meses['mes'] ?>"><?php echo $meses['mes_nome'] ?></option>
                                <?php endwhile; ?>
                            </select>
                            <label class="form-label">Filtrar por mês</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SELECTS -->
            <div class="card-body table-responsive">
                <table class="table table-hover" id="datatable-example">
                    <thead class="table-dark">
                        <tr>
                            <th class="small">ID</th>
                            <th class="">Dia</th>
                            <th class="">Projeto</th>
                            <th class="">Produto</th>
                            <th class="">Empresa</th>
                            <th class="text-center">Descrição</th>
                            <th class="text-center">Horas</th>
                            <?php if (isset($_SESSION['admin']) or isset($_SESSION['financ']) or isset($_SESSION['diretor'])) : ?>
                                <th class="text-center">Custo</th>
                            <?php endif;
                            if (isset($_SESSION['gestor'])) : ?>
                                <th class="text-end">Excluir</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Seleção Users do Setor do mês 'horade.php'
                        if (isset($_GET['mes'])) :
                            $sqlUser = "SELECT * FROM horas_lancadas AS h JOIN users AS u ON h.id_user = u.id_user JOIN projetos AS p ON h.id_projeto = p.id_projeto JOIN setores AS s ON h.id_setor = s.id_setor JOIN empresas AS e ON h.id_empresa = e.id_empresa JOIN produtos AS t ON h.id_produto = t.id_produto WHERE h.id_user = '$id_user' AND h.status_hora = 1 AND mes = '$mes' ORDER BY h.id_hora DESC";
                        else :
                            $sqlUser = "SELECT * FROM horas_lancadas AS h JOIN users AS u ON h.id_user = u.id_user JOIN projetos AS p ON h.id_projeto = p.id_projeto JOIN setores AS s ON h.id_setor = s.id_setor JOIN empresas AS e ON h.id_empresa = e.id_empresa JOIN produtos AS t ON h.id_produto = t.id_produto WHERE h.id_user = '$id_user' AND h.status_hora = 1 ORDER BY h.id_hora DESC";
                        endif;
                        $resultadoHorasUser = mysqli_query($conexao, $sqlUser);
                        while ($horas_user = mysqli_fetch_array($resultadoHorasUser)) : ?>
                            <tr>
                                <td class="text-muted small">
                                    <?php echo $horas_user['id_hora']; ?>
                                </td>
                                <td class="text-muted small">
                                    <?php echo $horas_user['dia'] . '/' . $horas_user['mes'] . '/' . $horas_user['ano'] ?>
                                </td>
                                <td>
                                    <strong>
                                        <?php echo $horas_user['nome_projeto']; ?>
                                    </strong>
                                </td>
                                <td>
                                    <?php echo $horas_user['nome_produto']; ?>
                                </td>
                                <td>
                                    <?php echo $horas_user['nome_empresa']; ?>
                                </td>

                                <td class="text-center">
                                    <i class="bi bi-info-circle-fill text-secondary fs-4 pointer-event" data-bs-container="body" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable<?php echo $horas_user['id_hora']; ?>"></i>
                                </td>
                                <div class="modal fade" id="exampleModalScrollable<?php echo $horas_user['id_hora']; ?>" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Descrição da Hora #<?php echo $horas_user['id_hora']; ?> </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?php echo $horas_user['descricao']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <td class="text-secondary text-center">
                                    <span class="text-secondary fs-6"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <?php $hora_user = $horas_user['minutos'] / 60;
                                        $hora_user = convertHoras($hora_user);
                                        echo $hora_user;
                                        ?>
                                    </span>
                                </td>
                                <?php if (isset($_SESSION['admin']) or isset($_SESSION['financ']) or isset($_SESSION['diretor'])) : ?>
                                    <td class="text-center">
                                        <span class='text-success fs-6'><i class="fa fa-money" aria-hidden="true"></i>
                                            <?php echo $horas_user['valor_hora']; ?>
                                        </span>
                                    </td>
                                <?php endif;
                                if (isset($_SESSION['gestor'])) : ?>
                                    <td class="text-end">
                                        <form action="../includes/deletar_hora.php" method="POST">
                                            <input type="hidden" name="id_hora" value="<?php echo $horas_user['id_hora']; ?>">
                                            <input type="hidden" name="url" value="<?php echo $url; ?>">
                                            <button type="submit" class="btn btn-danger text-light btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Excluir Hora"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
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