<?php
$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
?>

<!-- MODAL LANÇAMENTO HORAS -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <form action="../includes/crud_horas.php" method="POST" class="form-floating">
        <input type="hidden" name="url" value="<?php echo $url; ?>">
        <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
        <input type="hidden" name="id_setor" id="setor_user" value="<?php echo $setor_user; ?>">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Lançar horas<?php if (isset($_SESSION['gestor']) or isset($_SESSION['admin'])) : echo ' para ' .  $dados_user['nome_user'];
                                    endif; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col mb-3 form-floating">
                            <select class="form-select text-uppercase" name="id_empresa" id="id_empresa" required onchange="getProduto(this.value);">
                                <option value="">Selecione</option>
                                <?php $sqlEmpresas = "SELECT * FROM empresas WHERE status_empresa = 1 ORDER BY nome_empresa";
                                $resultadoEmpresas = mysqli_query($conexao, $sqlEmpresas);
                                while ($dados_empresas = mysqli_fetch_array($resultadoEmpresas)) : ?>
                                    <option value="<?php echo $dados_empresas['id_empresa']; ?>"><?php echo $dados_empresas['nome_empresa']; ?></option>
                                <?php endwhile; ?>
                            </select>
                            <label class="form-label">Empresa</label>
                        </div>
                        <div class="col mb-3 form-floating">
                            <select class="form-select text-uppercase" name="id_produto" id="id_produto" disabled required onchange="getProjeto(this.value);">
                            </select>
                            <label class="form-label">Produto</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 form-floating">
                            <select class="form-select text-uppercase" name="id_projeto" id="id_projeto" disabled required>
                            </select>
                            <label class="form-label">Projeto</label>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-6 form-floating">
                                    <input type="text" data-input-mask="hora" id="horas" name="horas" min="1" max="999" class="form-control" required>
                                    <label class="form-label">Horas</label>
                                </div>
                                <div class="col-6 form-floating">
                                    <select class="form-select" name="minutos" id="minutos" disabled>
                                        <option value="0">00</option>
                                        <option value="15">15</option>
                                        <option value="30">30</option>
                                        <option value="45">45</option>
                                    </select>
                                    <label class="form-label">Minutos</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (isset($_SESSION['gestor']) or (isset($_SESSION['admin']))) : ?>
                        <label class="form-label">Lançar horas em data retroativa</label>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" data-input-mask="hora" name="dia" placeholder="Dia" min="1" max="12" class="form-control">
                            </div>
                            <div class="col">
                                <select class="form-select" name="mes">
                                    <option value="<?php echo $mes; ?>"><?php echo $meses[$mes - 1] ?></option>
                                    <option value="<?php echo ($mes - 1); ?>"><?php echo $meses[$mes - 2]; ?> </option>
                                </select>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="col mb-4">
                        <label class="form-label">Descrição rápida</label>
                        <textarea class="form-control" maxlength="500" name="descricao" cols="30" rows="2" required></textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Lançar horas
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="btnGroupDrop1">
                            <li class="p-3">Você tem certeza?</li>
                            <li><button type="submit" class="btn btn-success w-100 text-light" style="border-radius: 0 0 7px 7px;">SIM</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- FECHA MODAL -->

<!-- MODAL CRIAÇÃO COLABORADOR -->
<div class="modal fade" id="modalColab" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <form action="../includes/crud_colab.php" method="POST" class=" form-floating">
        <input type="hidden" name="url" value="<?php echo $url; ?>">
        <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Adicionar Gestor ou Colaborador</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col mb-3 form-floating">
                            <input type="text" name="nome" class="form-control text-uppercase" required>
                            <label class="form-label">Nome Completo</label>
                        </div>
                        <div class="col mb-3 form-floating">
                            <input type="email" name="email" class="form-control text-lowercase" required>
                            <label class="form-label">E-mail</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col mb-3 form-floating">
                            <input type="text" name="valor" class="form-control" data-input-mask="money" required>
                            <label class="form-label">Valor por Hora</label>
                        </div>
                        <div class="col mb-3 form-floating">
                            <select class="form-select" name="setor" required>
                                <option value="">Selecione</option>
                                <?php $sqlSetor = "SELECT * FROM setores WHERE status_setor = 1 AND id_setor != 1 ORDER BY nome_setor";
                                $resultadoSetor = mysqli_query($conexao, $sqlSetor);
                                while ($dados_setor = mysqli_fetch_array($resultadoSetor)) : ?>
                                    <option value="<?php echo $dados_setor['id_setor']; ?>"><?php echo $dados_setor['nome_setor']; ?></option>
                                <?php endwhile; ?>
                            </select>
                            <label class="form-label">Departamento</label>
                        </div>
                        <div class="col mb-3 form-floating">
                            <select class="form-select" name="cargo" required>
                                <option value="">Selecione</option>
                                <?php $sqlCargo = "SELECT * FROM cargos WHERE id_cargo != 1";
                                $resultadoCargo = mysqli_query($conexao, $sqlCargo);
                                while ($dados = mysqli_fetch_array($resultadoCargo)) : ?>
                                    <option value="<?php echo $dados['cargo_numero']; ?>"><?php echo $dados['cargo_nome']; ?></option>
                                <?php endwhile; ?>
                            </select>
                            <label class="form-label">Cargo</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastrar Colaborador
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="btnGroupDrop1">
                            <li class="p-3">Você tem certeza?</li>
                            <li><button type="submit" class="btn btn-success w-100 text-light" style="border-radius: 0 0 7px 7px;">SIM</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- FECHA MODAL -->

<!-- MODAL CRIAÇÃO PROJETO -->
<div class="modal fade" id="ModalProjeto" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <form action="../includes/crud_projeto.php" method="POST" class="form-floating">
        <input type="hidden" name="url" value="<?php echo $url; ?>">
        <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Criar novo projeto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col mb-3 form-floating">
                            <select class="form-select text-uppercase" name="empresa_projeto" id="empresa_projeto" required onchange="getProdutoProj(this.value);">
                                <option value="">Selecione</option>
                                <?php $sqlEmpresas = "SELECT * FROM empresas WHERE status_empresa = 1 ORDER BY nome_empresa";
                                $resultadoEmpresas = mysqli_query($conexao, $sqlEmpresas);
                                while ($dados_empresas = mysqli_fetch_array($resultadoEmpresas)) : ?>
                                    <option value="<?php echo $dados_empresas['id_empresa']; ?>"><?php echo $dados_empresas['nome_empresa']; ?></option>
                                <?php endwhile; ?>
                            </select>
                            <label class="form-label">Empresa</label>
                        </div>
                        <div class="col mb-3 form-floating">
                            <select class="form-select text-uppercase" name="produto_projeto" id="produto_projeto" disabled required>
                            </select>
                            <label class="form-label">Produto</label>
                        </div>
                        <?php if (isset($_SESSION['admin'])) : ?>
                            <div class="col mb-3 form-floating">
                                <select class="form-select text-uppercase" name="setor_projeto" id="setor_projeto" required>
                                    <option value="">Selecione</option>
                                    <?php $sqlSetores = "SELECT * FROM setores WHERE id_setor != 1 ORDER BY nome_setor";
                                    $resultadoSetor = mysqli_query($conexao, $sqlSetores);
                                    while ($setor = mysqli_fetch_array($resultadoSetor)) :
                                        echo '<option value=' . $setor['id_setor'] . '>' . $setor['nome_setor'] . '</option>';
                                    endwhile; ?>
                                </select>
                                <label class="form-label">Departamento</label>
                            </div>
                        <?php else : ?>
                            <input type="hidden" name="setor_projeto" value="<?php echo $setor_user; ?>">
                        <?php endif; ?>
                    </div>
                    <div class="row mb-3">
                        <div class="col-8 mb-3 form-floating">
                            <input type="text" name="nome_projeto" class="form-control text-uppercase" required>
                            <label class="form-label">Nome do Projeto</label>
                        </div>
                        <div class="col mb-3 form-floating">
                            <input type="text" name="prazo_projeto" class="form-control">
                            <label class="form-label"> Estimativa de Prazo</label>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <label class="form-label">Descrição rápida</label>
                        <textarea class="form-control" maxlength="2000" name="descricao_projeto" required></textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Criar Projeto
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="btnGroupDrop1">
                            <li class="p-3">Você tem certeza?</li>
                            <li><button type="submit" class="btn btn-success w-100 text-light" style="border-radius: 0 0 7px 7px;">SIM</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- FECHA MODAL -->

<!-- MODAL CRIAÇÃO GESTOR -->
<div class="modal fade" id="exampleModalGestor" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <form action="../includes/crud_gestor.php" method="POST" class=" form-floating">
        <input type="hidden" name="url" value="<?php echo $url; ?>">
        <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Adicionar Gestor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-12 mb-3 form-floating">
                            <input type="text" name="nome_gestor" class="form-control" required>
                            <label class="form-label">Nome Completo</label>
                        </div>
                        <div class="col mb-3 form-floating">
                            <input type="email" name="email_gestor" class="form-control" required>
                            <label class="form-label">E-mail</label>
                        </div>
                        <div class="col mb-3 form-floating">
                            <select class="form-select" name="setor_gestor" required>
                                <option value="">Selecione</option>
                                <?php $sqlSetor = "SELECT * FROM setores WHERE status_setor = 1 AND id_setor != 1 ORDER BY nome_setor";
                                $resultadoSetor = mysqli_query($conexao, $sqlSetor);
                                while ($dados_setor = mysqli_fetch_array($resultadoSetor)) : ?>
                                    <option value="<?php echo $dados_setor['id_setor']; ?>"><?php echo $dados_setor['nome_setor']; ?></option>
                                <?php endwhile; ?>
                            </select>
                            <label class="form-label">Departamento</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastrar Gestor
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="btnGroupDrop1">
                            <li class="p-3">Você tem certeza?</li>
                            <li><button type="submit" class="btn btn-success w-100 text-light" style="border-radius: 0 0 7px 7px;">SIM</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- FECHA MODAL -->
<!-- MODAL CRIAÇÃO SETOR -->
<div class="modal fade" id="exampleModalSetor" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <form action="../includes/crud_setor.php" method="POST" class="form-floating">
        <input type="hidden" name="url" value="<?php echo $url; ?>">
        <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Criar Departamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-12 mb-3 form-floating">
                            <input type="text" name="nome_setor" class="form-control text-uppercase" required>
                            <label class="form-label">Nome do Departamento</label>
                        </div>
                        <!-- <div class="col mb-3 form-floating">
                            <label class="form-label">Empresa</label>
                            <select class="form-select" name="id_empresa" required>
                                <option value="">Selecione a Empresa</option>
                                <?php $sqlEmpresa = "SELECT * FROM empresas ORDER BY nome_empresa";
                                $resultadoEmpresa = mysqli_query($conexao, $sqlEmpresa);
                                while ($empresa = mysqli_fetch_array($resultadoEmpresa)) : ?>
                                    <option value="<?php echo $empresa['id_empresa']; ?>"><?php echo $empresa['nome_empresa']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div> -->
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Criar Departamento
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="btnGroupDrop1">
                            <li class="p-3">Você tem certeza?</li>
                            <li><button type="submit" class="btn btn-success w-100 text-light" style="border-radius: 0 0 7px 7px;">SIM</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- FECHA MODAL -->
<!-- MODAL CRIAÇÃO PRODUTO -->
<div class="modal fade" id="ModalProduto" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <form action="../includes/crud_produto.php" method="POST" class="form-floating">
        <input type="hidden" name="url" value="<?php echo $url; ?>">
        <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Criar Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col mb-3 form-floating">
                            <input type="text" name="nome_produto" class="form-control text-uppercase" required>
                            <label class="form-label">Nome do Produto</label>
                        </div>
                        <div class="col mb-3 form-floating">
                            <select class="form-select" name="id_empresa" required>
                                <option value="">Selecione a Empresa</option>
                                <?php $sqlEmpresa = "SELECT * FROM empresas ORDER BY nome_empresa";
                                $resultadoEmpresa = mysqli_query($conexao, $sqlEmpresa);
                                while ($empresa = mysqli_fetch_array($resultadoEmpresa)) : ?>
                                    <option value="<?php echo $empresa['id_empresa']; ?>"><?php echo $empresa['nome_empresa']; ?></option>
                                <?php endwhile; ?>
                            </select>
                            <label class="form-label">Empresa</label>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Descrição</label>
                            <textarea class="form-control" maxlength="2000" name="descricao_produto" cols="30" rows="2" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Criar Setor
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="btnGroupDrop1">
                            <li class="p-3">Você tem certeza?</li>
                            <li><button type="submit" class="btn btn-success w-100 text-light" style="border-radius: 0 0 7px 7px;">SIM</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- FECHA MODAL -->
<!-- MODAL CRIAÇÃO EMPRESAS -->
<div class="modal fade" id="ModalEmpresas" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <form action="../includes/crud_empresa.php" method="POST" class="form-floating">
        <input type="hidden" name="url" value="<?php echo $url; ?>">
        <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Criar Empresas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-12 mb-3 form-floating">
                            <input type="text" name="nome_empresa" class="form-control text-uppercase" required>
                            <label class="form-label">Nome da Empresa</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Criar Empresa
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="btnGroupDrop1">
                            <li class="p-3">Você tem certeza?</li>
                            <li><button type="submit" class="btn btn-success w-100 text-light" style="border-radius: 0 0 7px 7px;">SIM</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- FECHA MODAL -->