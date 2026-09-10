<?php
    $base = $_POST["base"];
    $expoente = $_POST["expoente"];
    $resultado = pow($base, $expoente);
    echo "O resultado de $base elevado a $expoente é: $resultado";
?>