<?php
include '../includes/regras.php';
include '../includes/head.php';
include '../includes/menu.php';
?>
</div>
</div>
<!-- ../  menu -->

<?php if (isset($_SESSION['admin']) or isset($_SESSION['rechum'])) : ?>
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
            <div class="page-title">Gestores</div>
            <?php if (isset($_SESSION['rechum']) or (isset($_SESSION['admin']))) : ?>
                <div class="header-bar ms-auto">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item ms-3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalColab">
                                <i class="bi bi-plus-circle"></i> Criar Gestor
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="header-mobile-buttons">
                    <button type="button" class="btn btn-primary d-md-none actions-btn" data-bs-toggle="modal" data-bs-target="#modalColab">
                        <i class="bi bi-plus-circle"></i> Criar Gestor
                    </button>
                </div>
            <?php endif; ?>
        </div>
        <!-- ../ header -->
        <!-- content -->
        <div class="content pt-1">
            <?php include '../includes/alertas.php'; ?>
            <div class="my-4">
                <table class="table table-custom table-lg mb-0" id="datatable-example">
                    <thead>
                        <tr class="">
                            <th class="">Gestor</th>
                            <th class="">Departamento</th>
                            <th class="">E-mail</th>
                            <th class="">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sqlGestores = "SELECT * FROM users AS u JOIN setores AS s ON u.setor_user = s.id_setor WHERE nivel_user = 88";
                        $resultadoGestores = mysqli_query($conexao, $sqlGestores);
                        while ($gestores = mysqli_fetch_array($resultadoGestores)) : ?>
                            <tr>
                                <td class="text-uppercase">
                                    <a href="horade.php?id=<?php echo $gestores['id_user']; ?>">
                                        <?php if (!empty($gestores['foto_user'])) : ?>
                                            <img src="<?php echo "../assets/images/user/" . $gestores['foto_user']; ?>" class="rounded-circle avatar me-3" alt="image">
                                        <?php else : ?>
                                            <img src="../assets/images/user.png" class="rounded-circle avatar me-3" alt="image">
                                        <?php endif; ?>
                                        <?php echo explode(' ', trim($gestores['nome_user']))[0]; ?>
                                    </a>
                                </td>
                                <td>
                                    <?php echo $gestores['nome_setor']; ?>
                                </td>
                                <td>
                                    <a href="mailto:<?php echo $gestores['email_user']; ?>">
                                        <?php echo $gestores['email_user']; ?>
                                    </a>
                                </td>
                                <td>
                                    <span class="badge bg-success text-uppercase">Ativo</span>
                                </td>
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