<?php
    $capital = $_POST['capital'];
    $taxa = $_POST['taxa'];
    $tempo = $_POST['tempo'];
    $jsimples = $capital * ($taxa / 100) * $tempo;
    echo "O valor do juros simples é: $jsimples";
?>
