<?php
    $valor = $_POST['valor'];

    if ($valor >= 100) {
        $desconto = $valor * 0.15;
        $valor_com_desconto = $valor - $desconto;
        echo "Valor com desconto: R$ " . number_format($valor_com_desconto, 2, ',', '.');
    } 
    else {
        echo "Não há desconto para este produto.";
    }
?>