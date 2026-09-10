<?php
    $capital = $_POST["capital"];
    $taxa = $_POST["taxa"] / 100;
    $periodos = $_POST["periodos"];
    $jcompostos = $capital * pow((1 + $taxa), $periodos);
    echo "O valor dos juros compostos é: $jcompostos";
?>