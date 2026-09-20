<?php
    $numero = $_POST['numero'];
    $cont = 1;
    $soma = 0;
    while ($cont <= $numero) {
        $soma += $cont;
        $cont++;
    }
    echo "<p>A soma dos números de 1 até $numero é: $soma</p>";
?>