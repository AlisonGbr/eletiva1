<?php
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    if ($valor1 == $valor2) 
    {
        $triplo = ($valor1 + $valor2) * 3;
        echo "O triplo da soma é: $triplo";
    } 
    else 
    {
        $soma = $valor1 + $valor2;
        echo "A soma dos valores é: $soma";
    }
