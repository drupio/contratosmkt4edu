<?php
$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
?>

<!-- MODAL LANÇAMENTO HORAS -->
<div class="modal fade" id="addModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <form action="../includes/#.php" class="form-floating" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="url" value="<?php echo $url; ?>">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Cadastrar Novo Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="" class="form-label">Logo</label>
                            <input type="file" name="logo" class="form-control" id="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 mb-3 form-floating">
                            <input type="text" data-input-mask="cnpj" name="cnpj" class="form-control" placeholder="CNPJ" required>
                            <label>CNPJ</label>
                        </div>
                        <div class="col-md-9 mb-3 form-floating">
                            <input type="text" class="form-control text-uppercase" name="cliente" placeholder="Cliente" required>
                            <label>Cliente</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 mb-3 form-floating">
                            <input type="number" class="form-control" data-input-mask="anos" name="anos" min="1" max="9999" placeholder="Quantitativo" required>
                            <label>Quantitativo</label>
                        </div>
                        <div class="col-md-3 mb-3 form-floating">
                            <input type="number" class="form-control" data-input-mask="ano" name="anos" min="1" max="99" placeholder="Extensão do Contrato" required>
                            <label>Extensão do contrato (em anos)</label>
                        </div>
                        <div class="col-md-2 mb-3 form-floating">
                            <input type="number" class="form-control" data-input-mask="anos" name="de" min="2020" placeholder="De" max="2100" required>
                            <label>De:</label>
                        </div>
                        <div class="col-md-2 mb-3 form-floating">
                            <input type="number" class="form-control" data-input-mask="anos" name="ate" min="2020" max="2100" placeholder="Até" required>
                            <label>Até:</label>
                        </div>
                        <div class="col-md-2 mb-3 form-floating">
                            <input type="text" class="form-control" name="bonificacao" placeholder="Bonificação">
                            <label>Bonificação (R$)</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Projetos do cliente</label>
                            <div class="d-flex flex-wrap">
                                <div class="form-check px-4 mb-3">
                                    <input class="form-check-input" type="checkbox" checked value="" id="1">
                                    <label class="form-check-label" for="1">
                                        Audiovisual
                                    </label>
                                </div>
                                <div class="form-check px-4 mb-3">
                                    <input class="form-check-input" type="checkbox" checked value="" id="2">
                                    <label class="form-check-label" for="2">
                                        Website
                                    </label>
                                </div>
                                <div class="form-check px-4 mb-3">
                                    <input class="form-check-input" type="checkbox" checked value="" id="3">
                                    <label class="form-check-label" for="3">
                                        Fachada
                                    </label>
                                </div>
                                <div class="form-check px-4 mb-3">
                                    <input class="form-check-input" type="checkbox" checked value="" id="4">
                                    <label class="form-check-label" for="4">
                                        Pesquisa
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 form-floating">
                            <textarea class="form-control" maxlength="2000" name="obs" placeholder="Observação" style="height: 100px;"></textarea>
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