<?php
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    if ($valor1 < $valor2) {
        echo "Os valores em ordem crescente são: $valor1 e $valor2";
    } 
    else if ($valor1 > $valor2) {
        echo "Os valores em ordem crescente são: $valor2 e $valor1";
    }
    else {
        echo "Os valores são iguais: $valor1";
    }
?>