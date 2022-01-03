<!-- content-footer -->
<footer class="content-footer d-flex justify-content-end">
    <div>
        <nav class="nav text-muted gap-4">
            © 2021<?php if (date('Y') != '2021') : echo ' - ' . date('Y');
                    endif; ?> ATLAN Group
        </nav>
    </div>
</footer>
<!-- ../ content-footer -->

</div>
<!-- ../ layout-wrapper -->

<!-- Bundle scripts -->
<script src="../libs/bundle.js"></script>

<!-- Main Javascript file -->
<script src="../dist/js/app.min.js"></script>

<!-- Examples -->
<script src="../dist/js/examples/dashboard.js"></script>
<script src="../libs/select2/js/select2.min.js"></script>
<script src="../libs/dataTable/datatables.min.js"></script>
<script src="../libs/datepicker/daterangepicker.js"></script>

<script>
    $('input[name="prazo_projeto"]').daterangepicker({
        locale: {
            format: 'DD/MM/YYYY'
        },
        singleDatePicker: true,
        showDropdowns: true
    });
</script>

<script type="text/javascript">
    function getProduto(val) {
        $.ajax({
            type: "POST",
            url: "../includes/select_produtos.php",
            data: 'id_empresa=' + val,
            success: function(data) {
                $("#id_produto").removeAttr('disabled');
                $("#id_produto").html(data);
                getProjeto();
            },
        })
    }

    function getProjeto(val) {
        var setor = <?php echo $setor_user; ?>;
        $.ajax({
            type: "POST",
            url: "../includes/select_projetos.php",
            data: {
                id: 'id_empresa=' + val,
                setor: setor,
            },
            success: function(data) {
                $("#id_projeto").removeAttr('disabled');
                $("#id_projeto").html(data);
            }
        })
    }

    //modal cria projeto
    function getProdutoProj(val) {
        $.ajax({
            type: "POST",
            url: "../includes/select_produtos_projeto.php",
            data: 'id_empresaP=' + val,
            success: function(data) {
                $("#produto_projeto").removeAttr('disabled');
                $("#produto_projeto").html(data);
            }
        })
    }

    $('#horas').change(function() {
        $('#minutos').removeAttr('disabled');
    });
</script>

<script>
    $(document).ready(function() {
        $('#datatable-example').DataTable({
            "language": {
                "lengthMenu": "Mostrando _MENU_ resultados por página",
                "zeroRecords": "Sem resultado",
                "info": "Exibindo _PAGE_ de _PAGES_ páginas.",
                "infoEmpty": "Sem resultado",
                "infoFiltered": "(filtrado de _MAX_ inserções)",
                "search": "Filtrar",
                "paginate": {
                    "first": "1ª",
                    "last": "Última",
                    "next": "Próxima",
                    "previous": "Anterior"
                }
            },
        });
    });
</script>
<!-- Slick -->
<script src="../libs/slick/slick.min.js"></script>

<script src="../libs/input-mask/jquery.mask.js"></script>
<script>
    $('[data-input-mask="phone"]').mask('(000) 000-0000');
    $('[data-input-mask="money"]').mask('000.000.000.000.000,00', {
        reverse: true
    });
    $('[data-input-mask="cnpj"]').mask('99.999.999/9999-99');
    $('[data-input-mask="cpf"]').mask('000.000.000-00', {
        reverse: true
    });
    $('[data-input-mask="rg"]').mask('00.000.000-0', {
        reverse: true
    });
    $('[data-input-mask="hora"]').mask('00', {
        reverse: true
    });
    $('[data-input-mask="calendario"]').mask("00/00/0000", {
        placeholder: "__/__/____"
    });
</script>

<script src="../libs/lightbox/jquery.magnific-popup.min.js"></script>
<script>
    $('.image-popup').magnificPopup({
        type: 'image',
        zoom: {
            enabled: true,
            duration: 300,
            easing: 'ease-in-out',
            opener: function(openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });
</script>

<script>
    $(function() {
        // bind change event to select
        $('#colaboradores').on('change', function() {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
            return false;
        });
    });
</script>
<script>
    $(function() {
        // bind change event to select
        $('#projetos').on('change', function() {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
            return false;
        });
    });
</script>
<script>
    $(function() {
        // bind change event to select
        $('#empresas').on('change', function() {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
            return false;
        });
    });
</script>
<script>
    $(function() {
        // bind change event to select
        $('#mesLista').on('change', function() {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
            return false;
        });
    });
</script>

</body>

</html>