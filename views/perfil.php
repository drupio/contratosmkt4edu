<?php
include '../includes/regras.php';
include '../includes/head.php';
include '../includes/menu.php';
?>
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
        <div class="page-title">Meu Perfil</div>
    </div>
    <!-- ../ header -->

    <!-- content -->
    <div class="content ">
        <?php include '../includes/alertas.php'; ?>
        <div class="card">
            <form action="../includes/crud_perfil.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id_user; ?>">
                <input type="hidden" name="url" value="<?php echo $url; ?>">
                <div class="card-body">
                    <h6 class="card-title mb-4">Mudar Foto</h6>
                    <div class="row g-2 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nova foto</label>
                            <input class="form-control" type="file" accept="image/*" name="foto" required>
                        </div>

                    </div>
                    <button type="submit" name="mudar_foto" class="btn btn-primary">Salvar</button>
                </div>
            </form>
            <hr>
            <form action="../includes/crud_perfil.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id_user; ?>">
                <input type="hidden" name="url" value="<?php echo $url; ?>">
                <div class="card-body">
                    <h6 class="card-title mb-4">Mudar Senha</h6>
                    <div class="row g-2 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nova Senha</label>
                            <input type="password" name="pwd" minlength="8" class="form-control text-uppercase" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Confirme a nova Senha</label>
                            <input type="password" name="pwd2" minlength="8" class="form-control text-uppercase" required>
                        </div>
                    </div>
                    <button type="submit" name="mudar_senha" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
    <!-- ../ content -->

    <?php
    include '../includes/modal-horas.php';
    include '../includes/footer.php';
    ?>