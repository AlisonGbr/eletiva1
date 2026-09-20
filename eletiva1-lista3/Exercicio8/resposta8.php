<?php
    $frase = $_POST['frase'];
    $vogais = "aeiouAEIOU";
    $contador = 0;

    for ($i = 0; $i < strlen($frase); $i++) {
        if (strpos($vogais, $frase[$i]) !== false) {
            $contador++;
        }
    }

    echo "<p>A frase informada é: $frase</p>";
    echo "<p>O número de vogais na frase é: $contador</p>";
?>