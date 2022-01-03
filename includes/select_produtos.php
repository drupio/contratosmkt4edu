<?php

include 'conexao.php';

$id = filter_input(INPUT_POST, 'id_empresa', FILTER_SANITIZE_NUMBER_INT);

if (!empty('$id')) :
    $sqlProdutos = "SELECT * FROM produtos WHERE empresa_produto = '$id' AND status_produto = 1 ORDER BY nome_produto";
    $resultadoProdutos = mysqli_query($conexao, $sqlProdutos); ?>
    <option value="">Selecione</option>';
<?php
    while ($setor = mysqli_fetch_array($resultadoProdutos)) :
        echo '<option value=' . $setor['id_produto'] . '>' . $setor['nome_produto'] . '</option>';
    endwhile;
endif;
