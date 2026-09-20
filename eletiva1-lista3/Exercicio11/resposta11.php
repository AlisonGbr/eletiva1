<?php
    $numero = $_POST['numero'];
    $numero_formatado = number_format($numero, 2, ',', '.');
    echo "<p>O número informado é: $numero</p>";
    echo "<p>O número formatado em R$ é: R$ $numero_formatado</p>";
?>