<?php
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];

    //verificar se é uma data válida
    if (!checkdate($mes, $dia, $ano)) {
        echo "<h2>Resultado</h2>";
        echo "<p>Data inválida. Por favor, insira uma data válida.</p>";
        exit;
    }
    else {
        echo "<h2>Resultado</h2>";
        echo "<p>A data informada é: $dia/$mes/$ano</p>";
    }
?>