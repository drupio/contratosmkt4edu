<?php
$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
?>

<!-- MODAL CLIENTE -->
<div class="modal fade" id="addModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <form action="../includes/crud_cliente.php" class="form-floating" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="url" value="<?php echo $url; ?>">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Cadastrar Novo Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-3 mb-3 form-floating">
                            <input type="text" data-input-mask="cnpj" name="cnpj" class="form-control" placeholder="CNPJ" required>
                            <label>CNPJ</label>
                        </div>
                        <div class="col-md-9 mb-3 form-floating">
                            <input type="text" class="form-control text-uppercase" name="nome_cliente" placeholder="Cliente" required>
                            <label>Cliente</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 mb-3 form-floating">
                            <input type="number" class="form-control" name="quantitativo" min="1" max="9999" placeholder="Quantitativo" required>
                            <label>Quantitativo</label>
                        </div>
                        <div class="col-md-3 mb-3 form-floating">
                            <input type="number" class="form-control" data-input-mask="ano" name="extensao" min="1" max="99" placeholder="Extensão do Contrato" required>
                            <label>Extensão do contrato (em anos)</label>
                        </div>
                        <div class="col-md-2 mb-3 form-floating">
                            <input type="number" class="form-control" data-input-mask="anos" name="de_ano" min="2020" placeholder="De" max="2100" required>
                            <label>De:</label>
                        </div>
                        <div class="col-md-2 mb-3 form-floating">
                            <input type="number" class="form-control" data-input-mask="anos" name="ate_ano" min="2020" max="2100" placeholder="Até" required>
                            <label>Até:</label>
                        </div>
                        <div class="col-md-2 mb-3 form-floating">
                            <input type="text" class="form-control" data-input-mask="money" name="bonificacao" placeholder="Bonificação">
                            <label>Bonificação (R$)</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 form-floating">
                            <select name="status_cliente" class="form-select" required>
                                <option value="">Selecione</option>
                                <?php $sql = "SELECT * FROM status_clientes";
                                $resultado = mysqli_query($conexao, $sql);
                                while ($status = mysqli_fetch_array($resultado)) : ?>
                                    <option value="<?php echo $status['id_status'] ?>"><?php echo $status['nome_status'] ?></option>
                                <?php endwhile; ?>
                            </select>
                            <label>Status do Cliente</label>
                        </div>
                        <div class="col-md-8 form-floating">
                            <textarea class="form-control" maxlength="2000" name="observacao" placeholder="Observação" style="height: 100px;"></textarea>
                            <label>Observação</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastrar
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

<!-- MODAL PROJETO -->
<div class="modal fade" id="addProjeto" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <form action="../includes/crud_addprojetos.php" class="form-floating" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="url" value="<?php echo $url; ?>">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Cadastrar Novo Projeto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control text-uppercase" name="nome_projeto" placeholder="Nome do Projeto" required>
                            <label>Nome do Projeto</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" maxlength="2000" name="desc_projeto" placeholder="Descrição do Projeto" style="height: 100px;"></textarea>
                            <label>Descrição do Projeto</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastrar
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