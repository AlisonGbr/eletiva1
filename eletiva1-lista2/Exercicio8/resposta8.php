<?php
    $numero = $_POST['numero'];
    $fatorial = 1;
    $cont = 1;
    for ($cont = 1; $cont <= $numero; $cont++) {
        $fatorial *= $cont;
    }
    echo "<p>O fatorial de $numero é: $fatorial</p>";
?>