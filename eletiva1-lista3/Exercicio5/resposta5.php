<?php
    $numero = $_POST['numero'];

    if ($numero < 0) {
        echo "<h2>Resultado</h2>";
        echo "<p>Erro: Não é possível calcular a raiz quadrada de um número negativo.</p>";
    } else {
        $raiz = sqrt($numero);
        echo "<h2>Resultado</h2>";
        echo "<p>A raiz quadrada de $numero é: $raiz</p>";
    }
?>