<?php
include '../includes/regras.php';
include '../includes/head.php';
include '../includes/menu.php';
// include '../includes/widget-horas.php';
?>
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
        <div class="page-title">Visão Geral</div>

    </div>
    <!-- ../ header -->

    <!-- content -->
    <div class="content pt-1">
        <?php include '../includes/alertas.php'; ?>

        <div class="d-flex flex-column flex-md-row text-center align-items-center text-md-start mb-3">
            <figure class="me-4 flex-shrink-0">
                <?php if (!empty($dCliente['logo_cliente'])) : ?>
                    <img width="100" class="rounded-pill" src="<?php echo $img_dir . '/logos' . '/' . $dCliente['logo_cliente']; ?>" alt="">
                <?php else : ?>
                    <img width="100" class="rounded-pill" src="../assets/images/logos/logo.png" alt="">
                <?php endif; ?>
            </figure>
            <div class="m-0">
                <h2 class="text-uppercase mb-0"><?php echo $dCliente['nome_cliente'] ?></h2>
                <p class="small text-muted">
                    ID: <?php echo $dCliente['id_cliente'] ?>
                </p>
            </div>
        </div>
        <div class="row flex-column-reverse flex-md-row">
            <div class="col-md-9">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="mb-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6 class="card-title mb-4">Dados Gerais</h6>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">CNPJ</label>
                                            <input type="text" class="form-control" disabled value="<?php echo $dCliente['cnpj']; ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">STATUS</label>
                                            <input type="text" class="form-control" disabled value="<?php echo $dCliente['nome_status']; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label">Extensão do Contrato</label>
                                            <input type="text" class="form-control" disabled value="<?php echo $dCliente['extensao']; ?> anos">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">De (ano)</label>
                                            <input type="text" class="form-control" disabled value="<?php echo $dCliente['de_ano']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Até (ano)</label>
                                            <input type="text" class="form-control" disabled value="<?php echo $dCliente['ate_ano']; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label">Quantitativo</label>
                                            <input type="text" class="form-control" disabled value="<?php echo $dCliente['quantitativo']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Bonificação</label>
                                            <input type="text" class="form-control" disabled value="R$ <?php echo $dCliente['bonificacao']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Bonificação paga em</label>
                                            <input type="text" class="form-control" disabled value="<?php echo $dCliente['pago_em'] ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Observação</label>
                                        <textarea name="observacao" disabled class="form-control"><?php echo $dCliente['observacao'] ?></textarea>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title mb-4">Contatos</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Responsável</label>
                                                <input type="text" class="form-control" disabled value="<?php echo $dCliente['responsavel'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Telefone</label>
                                                <input type="text" class="form-control" disabled value="<?php echo $dCliente['telefone'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Whatsapp</label>
                                                <input type="text" class="form-control" disabled value="<?php echo $dCliente['whatsapp'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">E-mail</label>
                                                <input type="email" class="form-control" disabled value="<?php echo $dCliente['email'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Website</label>
                                                <input type="text" class="form-control" disabled value="<?php echo $dCliente['site'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Endereço</label>
                                                <input type="text" class="form-control" disabled value="<?php echo $dCliente['endereco'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="tab-pane fade" id="editar" role="tabpanel" aria-labelledby="editar-tab">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h6 class="card-title mb-4">Editar Dados Gerais</h6>
                                <div class="col-md-6 mb-3">
                                    <label for="" class="form-label">Atualizar Logo</label>
                                    <form action="../includes/edita_logo.php" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="url" value="<?php echo $url ?>">
                                        <input type="hidden" name="id_cliente" value="<?php echo $dCliente['id_cliente']; ?>">
                                        <div class="input-group">
                                            <input type="file" name="logo" accept="image/*" required class="form-control">
                                            <button class="btn btn-outline-secondary" type="submit">Salvar</button>
                                        </div>
                                    </form>
                                </div>
                                <form action="../includes/edita_cliente.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id_cliente" value="<?php echo $dCliente['id_cliente']; ?>">
                                    <input type="hidden" name="url" value="<?php echo $url ?>">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">CNPJ</label>
                                            <input type="text" class="form-control" disabled value="<?php echo $dCliente['cnpj'] ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">STATUS</label>
                                            <select name="status_cliente" class="form-select" id="">
                                                <option value="<?php echo $dCliente['status_cliente'] ?>"><?php echo $dCliente['nome_status'] ?></option>
                                                <?php $sql = "SELECT * FROM status_clientes";
                                                $resultado = mysqli_query($conexao, $sql);
                                                while ($status = mysqli_fetch_array($resultado)) : ?>
                                                    <option value="<?php echo $status['id_status'] ?>"><?php echo $status['nome_status'] ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label">Extensão do Contrato</label>
                                            <input type="text" name="extensao" class="form-control" value="<?php echo $dCliente['extensao'] ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">De (ano)</label>
                                            <input type="text" name="de_ano" class="form-control" value="<?php echo $dCliente['de_ano'] ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Até (ano)</label>
                                            <input type="text" name="ate_ano" class="form-control" value="<?php echo $dCliente['ate_ano'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label">Quantitativo</label>
                                            <input type="text" name="quantitativo" class="form-control" value="<?php echo $dCliente['quantitativo'] ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Bonificação</label>
                                            <input type="text" name="bonificacao" class="form-control" value="R$ <?php echo $dCliente['bonificacao'] ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Bonificação paga em</label>
                                            <input type="text" name="pago_em" class="form-control" value="<?php echo $dCliente['pago_em'] ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Observação</label>
                                        <textarea name="observacao" class="form-control"><?php echo $dCliente['observacao'] ?></textarea>
                                    </div>
                                    <button class="btn btn-primary">Salvar</button>
                                </form>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h6 class="card-title mb-4">Editar Contatos</h6>
                                <form action="../includes/crud_contato.php" method="POST">
                                    <input type="hidden" name="url" value="<?php echo $url ?>">
                                    <input type="hidden" name="id" value="<?php echo $dCliente['id_cliente']; ?>">
                                    <input type="hidden" name="user" value="<?php echo $email_user; ?>">
                                    <div class="mb-3">
                                        <label class="form-label">Responsável</label>
                                        <input type="text" name="responsavel" class="form-control" value="<?php echo $dCliente['responsavel'] ?>">
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Telefone</label>
                                            <input type="text" name="telefone" class="form-control" value="<?php echo $dCliente['telefone'] ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Whatsapp</label>
                                            <input type="text" name="whatsapp" class="form-control" value="<?php echo $dCliente['whatsapp'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">E-mail</label>
                                            <input type="email" name="email" class="form-control" value="<?php echo $dCliente['email'] ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Website</label>
                                            <input type="text" name="site" class="form-control" value="<?php echo $dCliente['site'] ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Endereço</label>
                                        <input type="text" name="endereco" class="form-control" value="<?php echo $dCliente['endereco'] ?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="projetos" role="tabpanel" aria-labelledby="projetos-tab">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h6 class="card-title mb-4">Atualizar status de Projetos</h6>
                                <form action="../includes/crud_projeto.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="url" value="<?php echo $url; ?>">
                                    <input type="hidden" name="id_cliente" value="<?php echo $id; ?>">
                                    <input type="hidden" name="user" value="<?php echo $email_user; ?>">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">PROJETOS</label>
                                            <select name="projeto" class="form-select" required>
                                                <option value="">Selecione</option>
                                                <?php
                                                $sqlProjetos = "SELECT * FROM projetos_clientes AS c JOIN projetos_existentes AS p ON c.projeto = p.id_projeto WHERE cliente = '$id' ";
                                                $rP = mysqli_query($conexao, $sqlProjetos);
                                                while ($p = mysqli_fetch_array($rP)) :
                                                ?>
                                                    <option class="text-uppercase" value="<?php echo $p['id_projeto'] ?>"><?php echo $p['nome_projeto'] ?></p>
                                                    <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">STATUS</label>
                                            <select name="status" id="" class="form-select" required>
                                                <option value="">Selecione</option>
                                                <?php
                                                $sqlStatus = "SELECT * FROM status_projetos";
                                                $sP = mysqli_query($conexao, $sqlStatus);
                                                while ($s = mysqli_fetch_array($sP)) :
                                                ?>
                                                    <option value="<?php echo $s['id_status'] ?>"><?php echo $s['nome_status'] ?></p>
                                                    <?php endwhile; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label">HORAS</label>
                                                    <input type="number" name="horas" min="0" max="99" required class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">MINUTOS</label>
                                                    <select name="minutos" class="form-select" id="">
                                                        <option value="00">00</option>
                                                        <option value="15">15</option>
                                                        <option value="30">30</option>
                                                        <option value="45">45</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <label for="anexo" class="form-label">ANEXO</label>
                                            <input type="file" name="anexo" accept="application/pdf,.zip,.rar,image/*" id="anexo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">COMENTÁRIO</label>
                                        <div class="mb-3">
                                            <textarea name="comentario" id="editor2" style="height: 50px;"></textarea>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Salvar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title mb-4">Timeline</h6>
                                <?php
                                $sqlTimeline = "SELECT * FROM timeline AS t JOIN projetos_existentes AS p ON t.projeto = p.id_projeto JOIN status_projetos AS s ON t.status = s.id_status WHERE cliente = '$id' ORDER BY id DESC";
                                $rTimeline = mysqli_query($conexao, $sqlTimeline);
                                while ($timeline = mysqli_fetch_array($rTimeline)) :
                                    if ($timeline['status'] == 1) :
                                        $cor = 'info';
                                    elseif ($timeline['status'] == 2) :
                                        $cor = 'warning';
                                    elseif ($timeline['status'] == 3) :
                                        $cor = 'secondary';
                                    elseif ($timeline['status'] == 4) :
                                        $cor = 'secondary';
                                    elseif ($timeline['status'] == 5) :
                                        $cor = 'danger';
                                    elseif ($timeline['status'] == 6) :
                                        $cor = 'success';
                                    endif;
                                ?>
                                    <div class="card border-<?php echo $cor ?> mb-3">
                                        <div class="card-header text-<?php echo $cor ?>"><strong><?php echo $timeline['nome_projeto'] ?> - <?php echo $timeline['nome_status'] ?></strong></div>
                                        <div class="card-body">
                                            <p class="card-text"><?php echo $timeline['comentario'] ?></p>
                                            <?php if (!empty($timeline['anexo'])) : ?>
                                                <i class="fa fa-paperclip" aria-hidden="true"></i> <a href="../includes/anexos/<?php echo $timeline['anexo'] ?>" target="_blank"><?php echo $timeline['anexo'] ?></a></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <span class="text-muted small">#<?php echo $timeline['id'] ?> | <i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo $timeline['criado_em'] ?> | <i class="fa fa-user" aria-hidden="true"></i> <?php echo $timeline['criado_por'] ?></span>
                                                </div>
                                                <div>
                                                    <span class="text-muted small"><i class="fa fa-hourglass-end" aria-hidden="true"></i>
                                                        <?php
                                                        $hora_user = $timeline['minutos'] / 60;
                                                        $hora_user = convertHoras($hora_user);
                                                        echo $hora_user;
                                                        ?> horas</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="inicial" role="tabpanel" aria-labelledby="inicial-tab">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h6 class="card-title mb-4">Reunião Inicial</h6>
                                <?php if ($existeReuniao > 0) : ?>
                                    <p><?php echo $reuniao; ?></p>
                                    <hr>
                                    <p class="mb-0"><strong>Reunião Registrada em: <span class="text-primary"><?php echo $reuniaoData; ?></span></strong></p>
                                    <p><strong>Reunião Registrada por: <span class="text-primary"><?php echo $reuniaoUser; ?></span></strong></p>
                                <?php else : ?>
                                    <form action="../includes/crud_reuniao.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $id ?>">
                                        <input type="hidden" name="url" value="<?php echo $url ?>">
                                        <input type="hidden" name="user" value="<?php echo $email_user; ?>">
                                        <textarea name="reuniao" id="editor" rows="10"></textarea>
                                        <div class="my-3">
                                            <label class="form-label">Projetos do cliente</label>
                                            <div class="d-flex flex-wrap">
                                                <?php
                                                $sqlProj = "SELECT * FROM projetos_existentes";
                                                $rP = mysqli_query($conexao, $sqlProj);
                                                while ($proj = mysqli_fetch_array($rP)) :
                                                ?>
                                                    <div class="form-check px-4 mb-3">
                                                        <input class="form-check-input" type="checkbox" name="projeto[]" value="<?php echo $proj['id_projeto'] ?>" id="<?php echo $proj['id_projeto'] ?>">
                                                        <label class="form-check-label" for="<?php echo $proj['id_projeto'] ?>">
                                                            <span class="text-uppercase"><?php echo $proj['nome_projeto'] ?></span>
                                                        </label>
                                                    </div>
                                                <?php endwhile; ?>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mt-4" type="submit">Salvar</button>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <div class="col-md-3">
                <div class="card sticky-top mb-4">
                    <div class="card-body">
                        <!-- <p class="card-title fs-6 mb-4">Acessos:</p> -->
                        <ul class="nav nav-pills flex-column gap-2" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="projetos-tab" data-bs-toggle="tab" href="#projetos" role="tab" aria-controls="projetos" aria-selected="false">
                                    <i class="fa fa-star-o me-2" aria-hidden="true"></i>Projetos
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="inicial-tab" data-bs-toggle="tab" href="#inicial" role="tab" aria-controls="inicial" aria-selected="false">
                                    <i class="fa fa-file-text-o me-2" aria-hidden="true"></i> Reunião inicial
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">
                                    <i class="bi bi-person me-2"></i> Dados Gerais
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="editar-tab" data-bs-toggle="tab" href="#editar" role="tab" aria-controls="editar" aria-selected="false">
                                    <i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i> Editar Cadastro
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include '../includes/modal.php';
    include '../includes/footer.php';
    ?>