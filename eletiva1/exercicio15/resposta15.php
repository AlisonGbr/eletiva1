<?php
    $preco = $_POST['preco'];
    $desconto = $_POST['desconto'];
    $preco_final = $preco - ($preco * ($desconto / 100));
    echo "O preço final do produto com desconto é: R$ $preco_final";
?>