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
        <div class="page-title">Visão Geral</div>

    </div>
    <!-- ../ header -->

    <!-- content -->
    <div class="content pt-1">
        <?php include '../includes/alertas.php'; ?>

        <div class="row flex-column-reverse flex-md-row">
            <div class="col-md-9">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="mb-4">
                            <div class="d-flex flex-column flex-md-row text-center text-md-start mb-3">
                                <figure class="me-4 flex-shrink-0">
                                    <img width="100" class="rounded-pill" src="../assets/images/logos/logo.png" alt="...">
                                </figure>
                                <div class="d-flex align-items-center">
                                    <h2 class="">COLÔNIA HOLANDESA</h2>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6 class="card-title mb-4">Dados Gerais</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">CNPJ</label>
                                                <input type="text" class="form-control" disabled value="12.345.678/0001-15">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">STATUS</label>
                                                <input type="text" class="form-control" disabled value="NEGOCIAÇÃO">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Extensão do Contrato</label>
                                                <input type="text" class="form-control" disabled value="4 anos">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">De (ano)</label>
                                                <input type="text" class="form-control" disabled value="2020">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Até (ano)</label>
                                                <input type="text" class="form-control" disabled value="2024">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Quantitativo</label>
                                                <input type="text" class="form-control" disabled value="1325">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Bonificação</label>
                                                <input type="text" class="form-control" disabled value="R$ 2000,00">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Paga em</label>
                                                <input type="text" class="form-control" disabled value="22/10/2021">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card widget mb-4">

                                <h6 class="card-title mb-4">Projetos Contratados</h6>
                                <div class="d-flex flex-wrap">
                                    <p class="btn btn-primary m-2">WEBSITE</p>
                                    <p class="btn btn-primary m-2">LABORATÓRIO</p>
                                    <p class="btn btn-primary m-2">VÍDEO</p>
                                    <p class="btn btn-primary m-2">FOTOS</p>
                                    <p class="btn btn-primary m-2">PESQUISA</p>
                                    <p class="btn btn-primary m-2">FACHADA</p>
                                </div>

                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6 class="card-title mb-4">Contatos</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Responsável</label>
                                                <input type="text" class="form-control" disabled value="Rafael Lobo Pinheiro">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Telefone</label>
                                                <input type="text" class="form-control" disabled value="(11) 3030-3030">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Whatsapp</label>
                                                <input type="text" class="form-control" disabled value="(15) 99111-1111">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">E-mail</label>
                                                <input type="email" class="form-control" disabled value="rafael.lobo@viamaker.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Website</label>
                                                <input type="text" class="form-control" disabled value="https://sitedaescola.com.br">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Endereço</label>
                                                <input type="text" class="form-control" disabled value="Rua Carolina Borghi, 151 - Sorocaba SP - 18045-520">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card mb-4">
                                <div class="card-body">
                                    <h6 class="card-title mb-4">Social</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Instagram</label>
                                                <input type="text" class="form-control" disabled value="https://instagram.com/escola">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Facebook</label>
                                                <input type="text" class="form-control" disabled value="https://facebook.com/escola">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Linkedin</label>
                                                <input type="text" class="form-control" disabled value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Twitter</label>
                                                <input type="text" class="form-control" disabled value="">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Youtube</label>
                                                <input type="text" class="form-control" disabled value="https://youtube.com/escola">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="projetos" role="tabpanel" aria-labelledby="projetos-tab">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h6 class="card-title mb-4">Atualizar status de Projetos</h6>
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">PROJETOS</label>
                                            <select name="" id="" class="form-select">
                                                <option value="">Selecione</option>
                                                <option value="">WEBSITE</option>
                                                <option value="">LABORATÓRIO</option>
                                                <option value="">VÍDEO</option>
                                                <option value="">FACHADA</option>
                                                <option value="">FOTOS</option>
                                                <option value="">PESQUISA</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">STATUS</label>
                                            <select name="" id="" class="form-select">
                                                <option value="">Selecione</option>
                                                <option value="">EM ANDAMENTO</option>
                                                <option value="">AGUARDANDO CLIENTE</option>
                                                <option value="">PRODUÇÃO VIAMAKER</option>
                                                <option value="">PRODUÇÃO CLIENTE</option>
                                                <option value="">PAUSADO</option>
                                                <option value="">CONCLUÍDO</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">COMENTÁRIO</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Comente aqui">
                                                <button class="btn btn-primary" type="button">Salvar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title mb-4">Timeline</h6>
                                <div class="card border-warning mb-3">
                                    <div class="card-header text-warning"><strong>WEBSITE - PAUSADO</strong></div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <div class="card-footer"><span class="text-muted small"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 20/01/2022 | <i class="fa fa-user" aria-hidden="true"></i> rafael.lobo@viamaker.com</span></div>
                                </div>
                                <div class="card border-info mb-3">
                                    <div class="card-header text-info"><strong>LABORATÓRIO - EM ANDAMENTO</strong></div>
                                    <div class="card-body">
                                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa cumque amet consequatur atque illo illum ab perspiciatis beatae, quia sit voluptatem placeat quas voluptatibus debitis error accusantium quos. Obcaecati, maxime?</p>
                                    </div>
                                    <div class="card-footer"><span class="text-muted small"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 20/01/2022 | <i class="fa fa-user" aria-hidden="true"></i> rafael.lobo@viamaker.com</span></div>
                                </div>
                                <div class="card border-success mb-3">
                                    <div class="card-header text-success"><strong>VÍDEO - CONCLUÍDO</strong></div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <div class="card-footer"><span class="text-muted small"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 20/01/2022 | <i class="fa fa-user" aria-hidden="true"></i> rafael.lobo@viamaker.com</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="horas" role="tabpanel" aria-labelledby="horas-tab">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title mb-4">Lançar Horas</h6>
                                <div class="mb-3">
                                    <label class="form-label">Old Password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">New Password Repeat</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="editar" role="tabpanel" aria-labelledby="editar-tab">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h6 class="card-title mb-4">Dados Gerais</h6>
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">CNPJ</label>
                                                <input type="text" class="form-control" value="12.345.678/0001-15">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">STATUS</label>
                                                <input type="text" class="form-control" value="NEGOCIAÇÃO">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Extensão do Contrato</label>
                                                <input type="text" class="form-control" value="4 anos">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">De (ano)</label>
                                                <input type="text" class="form-control" value="2020">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Até (ano)</label>
                                                <input type="text" class="form-control" value="2024">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Quantitativo</label>
                                                <input type="text" class="form-control" value="1325">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Bonificação</label>
                                                <input type="text" class="form-control" value="R$ 2000,00">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Paga em</label>
                                                <input type="text" class="form-control" value="22/10/2021">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">Salvar</button>
                                </form>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h6 class="card-title mb-4">Contatos</h6>
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Responsável</label>
                                                <input type="text" class="form-control" value="Rafael Lobo Pinheiro">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Telefone</label>
                                                <input type="text" class="form-control" value="(11) 3030-3030">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Whatsapp</label>
                                                <input type="text" class="form-control" value="(15) 99111-1111">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">E-mail</label>
                                                <input type="email" class="form-control" value="rafael.lobo@viamaker.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Website</label>
                                                <input type="text" class="form-control" value="https://sitedaescola.com.br">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Endereço</label>
                                                <input type="text" class="form-control" value="Rua Carolina Borghi, 151 - Sorocaba SP - 18045-520">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">Salvar</button>
                                </form>
                            </div>
                        </div>
                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                <h6 class="card-title mb-4">Social</h6>
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Instagram</label>
                                                <input type="text" class="form-control" value="https://instagram.com/escola">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Facebook</label>
                                                <input type="text" class="form-control" value="https://facebook.com/escola">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Linkedin</label>
                                                <input type="text" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Twitter</label>
                                                <input type="text" class="form-control" value="">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Youtube</label>
                                                <input type="text" class="form-control" value="https://youtube.com/escola">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">Salvar</button>
                                </form>
                            </div>
                        </div> -->
                    </div>


                </div>
            </div>
            <div class="col-md-3">
                <div class="card sticky-top mb-4 mb-md-0">
                    <div class="card-body">
                        <p class="card-title fs-6 mb-4">Acessos:</p>
                        <ul class="nav nav-pills flex-column gap-2" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">
                                    <i class="bi bi-person me-2"></i> Dados Gerais
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="projetos-tab" data-bs-toggle="tab" href="#projetos" role="tab" aria-controls="projetos" aria-selected="false">
                                    <i class="fa fa-star-o me-2" aria-hidden="true"></i>Projetos
                                </a>
                            </li>
                            <!-- <li class="nav-item" role="presentation">
                                <a class="nav-link" id="horas-tab" data-bs-toggle="tab" href="#horas" role="tab" aria-controls="horas" aria-selected="false">
                                    <i class="fa fa-clock-o me-2" aria-hidden="true"></i> Lançar Horas
                                </a>
                            </li> -->
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