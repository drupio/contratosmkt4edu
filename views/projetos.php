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
            <div class="page-title">Projetos</div>
            <?php if (isset($_SESSION['gestor']) or (isset($_SESSION['admin']))) : ?>
                <div class="header-bar ms-auto">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item ms-3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalProjeto">
                                <i class="bi bi-plus-circle"></i> Criar Projeto
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="header-mobile-buttons">
                    <button type="button" class="btn btn-primary d-md-none actions-btn" data-bs-toggle="modal" data-bs-target="#ModalProjeto">
                        <i class="bi bi-plus-circle"></i> Criar Projeto
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
                        if (isset($_SESSION['admin']) or isset($_SESSION['financ'])) :
                            $sqlTotalHoras = "SELECT sum(minutos) AS total FROM horas_lancadas WHERE status_hora = 1";
                        else :
                            $sqlTotalHoras = "SELECT sum(minutos) AS total FROM horas_lancadas WHERE id_setor = '$setor_user' AND status_hora = 1";
                        endif;
                        $resultadoTotalHoras = mysqli_query($conexao, $sqlTotalHoras);
                        $totalhoras = mysqli_fetch_assoc($resultadoTotalHoras);
                        $soma = $totalhoras['total'] / 60;
                        $soma =  convertHoras($soma);
                        ?>
                        <p class="ms-2 mb-0 fs-3 text-blue"><?php echo $soma ?>h <span class="text-dark fs-4 ">Lançadas no total</span></p>
                    </div>
                </div>
            </div>
            <div class="my-4">
                <table class="table table-custom table-lg mb-0 text-uppercase" id="datatable-example">
                    <thead class="">
                        <tr class="">
                            <th class="">Projeto</th>
                            <th class="">Produto - Empresa</th>
                            <th class="">Departamento</th>
                            <th class="text-center">Descrição</th>
                            <!-- <th class="text-center">Prazo</th> -->
                            <th class="text-center">Horas</th>
                            <?php if (isset($_SESSION['admin']) or isset($_SESSION['financ']) or isset($_SESSION['diretor'])) : ?>
                                <th class="text-end">R$ Total</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['admin']) or isset($_SESSION['financ'])) :
                            $sqlProjeto = "SELECT * FROM projetos AS p JOIN empresas AS e ON p.empresa_projeto = e.id_empresa JOIN produtos AS pdt ON p.produto_projeto = pdt.id_produto JOIN setores AS s ON p.setor_projeto = s.id_setor WHERE status_projeto = 1 ORDER BY nome_projeto";
                        else :
                            $sqlProjeto = "SELECT * FROM projetos AS p JOIN empresas AS e ON p.empresa_projeto = e.id_empresa JOIN produtos AS pdt ON p.produto_projeto = pdt.id_produto JOIN setores AS s ON p.setor_projeto = s.id_setor WHERE setor_projeto = '$setor_user' AND status_projeto = 1 ORDER BY nome_projeto";
                        endif;
                        $resultadoProjeto = mysqli_query($conexao, $sqlProjeto);
                        while ($projeto = mysqli_fetch_array($resultadoProjeto)) : ?>
                            <tr>
                                <td><a href="p-projetos.php?p_id=<?php echo $projeto['id_projeto']; ?>"><strong><?php echo $projeto['nome_projeto']; ?></strong></a></td>
                                <td>
                                    <?php echo '<strong>' . $projeto['nome_produto'] . '</strong> - ' . $projeto['nome_empresa']; ?>
                                </td>
                                <td>
                                    <?php echo $projeto['nome_setor']; ?>
                                </td>
                                <td class="text-center">
                                    <i class="bi bi-info-circle-fill text-secondary fs-4 pointer-event" data-bs-container="body" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable<?php echo $projeto['id_projeto']; ?>"></i>
                                </td>
                                <div class="modal fade" id="exampleModalScrollable<?php echo $projeto['id_projeto']; ?>" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Descrição do projeto <strong><?php echo $projeto['nome_projeto']; ?></strong> </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?php echo $projeto['descricao_projeto']; ?></p>
                                                <p class="text-secondary">Prazo final do projeto: <strong><?php echo $projeto['prazo_projeto']; ?></strong></p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <?php
                                                $sqlProj = "SELECT * FROM projetos AS p JOIN users AS u ON p.projeto_criado_por = u.id_user WHERE p.id_projeto = {$projeto['id_projeto']}";
                                                $resultadoProj = mysqli_query($conexao, $sqlProj);
                                                $proj = mysqli_fetch_array($resultadoProj); ?>
                                                <span class="small">
                                                    <strong>criado em:</strong> <?php echo $proj['projeto_criado_em']; ?>
                                                </span>
                                                <span class="small">
                                                    <strong>criado por:</strong> <?php echo $proj['nome_user']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <td><?php echo $projeto['prazo_projeto']; ?></td> -->
                                <td class="text-secondary text-center">
                                    <span class='text-secondary fs-6'><i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <?php
                                        $sqlHoraProjeto = "SELECT sum(minutos) AS total FROM horas_lancadas WHERE id_projeto = {$projeto['id_projeto']} AND status_hora = 1";
                                        $resultadoHoraProjeto = mysqli_query($conexao, $sqlHoraProjeto);
                                        $horaProjeto = mysqli_fetch_array($resultadoHoraProjeto);
                                        $hora_projeto = $horaProjeto['total'] / 60;
                                        $hora_projeto = convertHoras($hora_projeto);
                                        echo $hora_projeto;
                                        ?>
                                    </span>
                                </td>
                                <?php if (isset($_SESSION['admin']) or isset($_SESSION['financ']) or isset($_SESSION['diretor'])) : ?>
                                    <td class="text-center">
                                        <span class='text-success fs-6'>
                                            <?php
                                            $sqlValor = "SELECT sum(valor_hora) AS total FROM horas_lancadas WHERE id_projeto = {$projeto['id_projeto']} AND status_hora = 1";
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
endif;
include '../includes/footer.php';
?>