<ul class="mb-3">
    <?php if (isset($_SESSION['admin'])) : ?>
        <li>
            <a class="text-dark" href="empresas.php">
                <span class="nav-link-icon">
                    <i class="fa fa-building-o" aria-hidden="true"></i>
                </span>
                <span>Empresas</span>
            </a>
        </li>

        <li>
            <a class="text-dark" href="produtos.php">
                <span class="nav-link-icon">
                    <i class="fa fa-star" aria-hidden="true"></i>
                </span>
                <span>Produtos</span>
            </a>
        </li>
        <li>
            <a class="text-dark" href="projetos.php">
                <span class="nav-link-icon">
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </span>
                <span>Projetos</span>
            </a>
        </li>
        <li>
            <a class="text-dark" href="departamentos.php">
                <span class="nav-link-icon">
                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
                </span>
                <span>Departamentos</span>
            </a>
        </li>
        <li>
            <a class="text-dark" href="gestores.php">
                <span class="nav-link-icon">
                    <i class="bi bi-person-circle" aria-hidden="true"></i>
                </span>
                <span>Gestores</span>
            </a>
        </li>
        <li>
            <a class="text-dark" href="colaboradores.php">
                <span class="nav-link-icon">
                    <i class="bi bi-person-badge"></i>
                </span>
                <span>Colaboradores</span>
            </a>
        </li>
    <?php elseif (isset($_SESSION['diretor'])) : ?>
        <li>
            <a class="text-dark" href="empresas.php">
                <span class="nav-link-icon">
                    <i class="fa fa-building-o" aria-hidden="true"></i>
                </span>
                <span>Empresas</span>
            </a>
        </li>

        <li>
            <a class="text-dark" href="produtos.php">
                <span class="nav-link-icon">
                    <i class="fa fa-star" aria-hidden="true"></i>
                </span>
                <span>Produtos</span>
            </a>
        </li>
        <li>
            <a class="text-dark" href="projetos.php">
                <span class="nav-link-icon">
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </span>
                <span>Projetos</span>
            </a>
        </li>
        <li>
            <a class="text-dark" href="departamentos.php">
                <span class="nav-link-icon">
                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
                </span>
                <span>Departamentos</span>
            </a>
        </li>
    <?php elseif (isset($_SESSION['gestor'])) : ?>
        <li>
            <a href="colaboradores.php">
                <span class="nav-link-icon">
                    <i class="bi bi-person-badge"></i>
                </span>
                <span>Seus Colaboradores</span>
            </a>
        </li>
        <li>
            <a href="projetos.php">
                <span class="nav-link-icon">
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </span>
                <span>Seus Projetos</span>
            </a>
        </li>
    <?php elseif (isset($_SESSION['rechum'])) : ?>
        <li>
            <a class="text-dark" href="gestores.php">
                <span class="nav-link-icon">
                    <i class="bi bi-person-circle" aria-hidden="true"></i>
                </span>
                <span>Gestores</span>
            </a>
        </li>
        <li>
            <a class="text-dark" href="colaboradores.php">
                <span class="nav-link-icon">
                    <i class="bi bi-person-badge"></i>
                </span>
                <span>Colaboradores</span>
            </a>
        </li>
    <?php elseif (isset($_SESSION['financ'])) : ?>
        <li>
            <a class="text-dark" href="empresas.php">
                <span class="nav-link-icon">
                    <i class="fa fa-building-o" aria-hidden="true"></i>
                </span>
                <span>Empresas</span>
            </a>
        </li>

        <li>
            <a class="text-dark" href="produtos.php">
                <span class="nav-link-icon">
                    <i class="fa fa-star" aria-hidden="true"></i>
                </span>
                <span>Produtos</span>
            </a>
        </li>
        <li>
            <a class="text-dark" href="projetos.php">
                <span class="nav-link-icon">
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </span>
                <span>Projetos</span>
            </a>
        </li>
        <li>
            <a class="text-dark" href="departamentos.php">
                <span class="nav-link-icon">
                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
                </span>
                <span>Departamentos</span>
            </a>
        </li>
    <?php else : ?>
        <li>
            <a href="dash.php">
                <span class="nav-link-icon">
                    <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                </span>
                <span>Horas do Dia</span>
            </a>
        </li>
        <li>
            <a href="horas.php">
                <span class="nav-link-icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </span>
                <span>Horas Registradas</span>
            </a>
        </li>
        <!-- <li>
            <a href="u-projetos.php">
                <span class="nav-link-icon">
                    <i class="bi bi-bar-chart"></i>
                </span>
                <span>Horas por Projetos</span>
            </a>
        </li> -->
    <?php endif; ?>
</ul>