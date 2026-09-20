<?php
    $palavra = $_POST['palavra'];
    $maiusculas = strtoupper($palavra);
    $minusculas = strtolower($palavra);
    echo "<h2>Apresentação de uma palavra em maiúsculas e minúsculas</h2>";
    echo "<p>Palavra em maiúsculas: $maiusculas</p>";
    echo "<p>Palavra em minúsculas: $minusculas</p>";
?>