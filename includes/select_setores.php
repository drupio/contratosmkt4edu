<?php

include 'conexao.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

$sqlSetores = "SELECT * FROM setores WHERE id_setor != 1 ORDER BY nome_setor";
$resultadoSetor = mysqli_query($conexao, $sqlSetores);
while ($setor = mysqli_fetch_array($resultadoSetor)) :
    echo '<option value=' . $setor['id_setor'] . '>' . $setor['nome_setor'] . '</option>';
endwhile;
