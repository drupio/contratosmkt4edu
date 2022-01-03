<div class="card-header d-flex align-items-center justify-content-between">
    <div class="row">
        <?php if (isset($_SESSION['gestor'])) : ?>
            <!-- <div class="col-auto">
                <div class="input-group">
                    <select id="empresas" class="form-control" required>
                        <option value="">Centro de Custo</option>
                        <?php
                        $sqlEmpresa = "SELECT * FROM empresas WHERE status = 1 ORDER BY nome_empresa";
                        $resultadoEmpresa = mysqli_query($conexao, $sqlEmpresa);
                        while ($empresa = mysqli_fetch_array($resultadoEmpresa)) : ?>
                            <option value="empresas.php?id=<?php echo $empresa['id_empresa']; ?>"><?php echo $empresa['nome_empresa']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
            <div class="col-auto">
                <div class="input-group">
                    <select id="projetos" class="form-control" required>
                        <option value="">Projetos</option>
                        <?php
                        $sqlProjeto = "SELECT * FROM projetos WHERE setor_projeto = '$setor_user' AND status = 1 ORDER BY nome_projeto";
                        $resultadoProjeto = mysqli_query($conexao, $sqlProjeto);
                        while ($projeto = mysqli_fetch_array($resultadoProjeto)) : ?>
                            <option value="projetos.php?id=<?php echo $projeto['id_projeto']; ?>"><?php echo $projeto['nome_projeto']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div> -->
            <div class="col-auto">
                <div class="input-group">
                    <select id="colaboradores" class="form-control" required>
                        <option value="">Filtrar por Colaborador</option>
                        <?php
                        $sqlColaborador = "SELECT * FROM users WHERE setor_user = '$setor_user' AND nivel_user = 1 AND id_user != '$id_user' ORDER BY nome_user";
                        $resultadoColaborador = mysqli_query($conexao, $sqlColaborador);
                        while ($colaborador = mysqli_fetch_array($resultadoColaborador)) : ?>
                            <option value="<?php echo 'horade.php?id=' . $colaborador['id_user']; ?>"><?php echo $colaborador['nome_user']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
        <?php endif; ?>
        <div class="col-auto">
            <div class="input-group">
                <select id="mesLista" class="form-control" required>
                    <option value="">Filtrar por Mês</option>
                    <option value="<?php echo '?id=' . $_GET['id'] ?>">Todos</option>
                    <?php
                    $sql = "SELECT * FROM meses AS m JOIN (SELECT DISTINCT mes FROM horas_lancadas WHERE id_user = '$id_user') AS h ON m.mes_numero = h.mes";
                    $resultado = mysqli_query($conexao, $sql);
                    while ($meses = mysqli_fetch_array($resultado)) : ?>
                        <option value="<?php echo '?id=' . $_GET['id'] . '&mes=' . $meses['mes'] ?>"><?php echo $meses['mes_nome'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
        </div>
    </div>
</div>