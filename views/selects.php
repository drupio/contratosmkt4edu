<div class="card-header d-flex align-items-center justify-content-between">
    <div class="row">
        <div class="col-auto">
            <div class="input-group">
                <select id="colaboradores" class="form-control" required>
                    <option value="">Filtrar por Colaborador</option>
                    <?php
                    $sqlColaborador = "SELECT * FROM users WHERE setor_user = '$setor_user' AND nivel_user = 1 AND id_user != '$id_user' ORDER BY nome_user";
                    $resultadoColaborador = mysqli_query($conexao, $sqlColaborador);
                    while ($colaborador = mysqli_fetch_array($resultadoColaborador)) : ?>
                        <option value="<?php echo '?id=' . $colaborador['id_user']; ?>"><?php echo $colaborador['nome_user']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
        </div>
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