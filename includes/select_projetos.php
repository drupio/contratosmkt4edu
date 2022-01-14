<?php

include 'conexao.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_NUMBER_INT);

if (!empty('$id')) :
    $sqlProjetos = "SELECT * FROM projetos WHERE produto_projeto = '$id' AND setor_projeto = '$setor' AND status_projeto = 1 ORDER BY nome_projeto";
    $resultadoProjetos = mysqli_query($conexao, $sqlProjetos); ?>
    <option value="">Selecione</option>';
<?php
    while ($projeto = mysqli_fetch_array($resultadoProjetos)) :
        echo '<option value=' . $projeto['id_projeto'] . '>' . $projeto['nome_projeto'] . '</option>';
    endwhile;
endif;
