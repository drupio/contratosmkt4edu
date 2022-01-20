<?php
include '../includes/regras.php';
include '../includes/head.php';
include '../includes/menu.php';
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
        <div class="page-title">Dashboard</div>
        <div class="header-bar ms-auto">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item ms-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="bi bi-plus-circle"></i> Novo Cliente
                    </button>
                </li>
            </ul>
        </div>
        <!-- Header mobile buttons -->
        <div class="header-mobile-buttons">
            <button type="button" class="btn btn-primary d-md-none actions-btn" data-bs-toggle="modal" data-bs-target="#addModal">
                <i class="bi bi-plus-circle"></i> Add Cliente
            </button>
        </div>
        <!-- ../ Header mobile buttons -->
    </div>
    <!-- ../ header -->

    <!-- content -->
    <div class="content pt-1">
        <?php include '../includes/alertas.php'; ?>
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card widget">
                    <div class="card-body">
                        <p class="card-title"><strong class="text-success"><?php echo $total_id; ?></strong> CLIENTES CADASTRADOS</p>
                        <div id="chartClientes" style="width: 100%;"></div>
                        <script type="text/javascript">
                            google.charts.load("current", {
                                packages: ["corechart"]
                            });
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['Status', 'Quantidade', {
                                        role: 'annotation'
                                    }],
                                    <?php
                                    while ($cliente = mysqli_fetch_array($res_status_clientes)) :
                                    ?>['<?php echo $cliente['nome_status'] ?>', <?php echo $cliente['total_status'] ?>, <?php echo $cliente['total_status'] ?>],
                                    <?php endwhile; ?>
                                ]);
                                var options = {
                                    is3D: true,
                                    chartArea: {
                                        left: 10,
                                        top: 0,
                                        width: '100%',
                                        height: '100%'
                                    },
                                    backgroundColor: 'transparent',
                                    colors: ['#25c2e3', '#faae42', '#05b171', '#ea4444'],
                                };
                                var chart = new google.visualization.PieChart(document.getElementById('chartClientes'));
                                chart.draw(data, options);
                            }
                        </script>

                    </div>
                </div>
            </div>

            <?php
            $sqlProjetos = "SELECT * FROM projetos_existentes";
            $res_projetos = mysqli_query($conexao, $sqlProjetos);
            while ($projetos = mysqli_fetch_array($res_projetos)) :
            ?>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title"><?php echo $projetos['nome_projeto'] ?></p>
                            <div id="chart<?php echo $projetos['id_projeto'] ?>" style="width: 100%;"></div>
                            <script type="text/javascript">
                                google.charts.load("current", {
                                    packages: ["corechart"]
                                });
                                google.charts.setOnLoadCallback(drawChart);

                                function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                        ['Status', 'Quantidade'],
                                        <?php
                                        $sqlStatusProjetos = "SELECT *, count(status) AS total FROM projetos_clientes AS p JOIN status_projetos AS s ON p.status = s.id_status WHERE projeto = '{$projetos['id_projeto']}'";
                                        $res_status_projetos = mysqli_query($conexao, $sqlStatusProjetos);
                                        while ($projeto = mysqli_fetch_array($res_status_projetos)) :
                                        ?>['<?php echo $projeto['nome_status'] ?>', <?php echo $projeto['total'] ?>],
                                        <?php endwhile; ?>
                                    ]);
                                    var options = {
                                        is3D: true,
                                        chartArea: {
                                            left: 10,
                                            top: 0,
                                            width: '100%',
                                            height: '100%'
                                        }
                                    };
                                    var chart = new google.visualization.PieChart(document.getElementById('chart<?php echo $projetos['id_projeto'] ?>'));
                                    chart.draw(data, options);
                                }
                            </script>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php
include '../includes/modal.php';
include '../includes/footer.php';
?>