<!-- content-footer -->
<footer class="content-footer d-flex justify-content-end">
    <div>
        <nav class="nav text-muted gap-4">
            © 2021<?php if (date('Y') != '2021') : echo ' - ' . date('Y');
                    endif; ?> MKT for Education
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
<script src="../libs/charts/apex/apexcharts.min.js"></script>

<script>
    $('input[name="prazo_projeto"]').daterangepicker({
        locale: {
            format: 'DD/MM/YYYY'
        },
        singleDatePicker: true,
        showDropdowns: true
    });
</script>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
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
    $('[data-input-mask="fone"]').mask('(00) 0000-0000');
    $('[data-input-mask="celular"]').mask('(00) 00000-0000');
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
    $('[data-input-mask="ano"]').mask('00');
    $('[data-input-mask="anos"]').mask('0000');
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
</body>

</html>