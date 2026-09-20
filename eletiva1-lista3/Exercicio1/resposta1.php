<?php
    $palavra = $_POST['palavra'];
    $quantidade = strlen($palavra);
    echo "<h2>Quantidade de Caracteres</h2>";
    echo "<p>A palavra '$palavra' possui $quantidade caracteres.</p>";
?>