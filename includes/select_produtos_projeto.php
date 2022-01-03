<?php

include 'conexao.php';

$id = filter_input(INPUT_POST, 'id_empresaP', FILTER_SANITIZE_NUMBER_INT);

if (!empty('$id')) :
    $sqlProdutosP = "SELECT * FROM produtos WHERE empresa_produto = '$id' AND status_produto = 1 ORDER BY nome_produto";
    $resultadoProdutosP = mysqli_query($conexao, $sqlProdutosP); ?>
    <option value="">Selecione</option>';
<?php
    while ($produto = mysqli_fetch_array($resultadoProdutosP)) :
        echo '<option value=' . $produto['id_produto'] . '>' . $produto['nome_produto'] . '</option>';
    endwhile;
endif;
