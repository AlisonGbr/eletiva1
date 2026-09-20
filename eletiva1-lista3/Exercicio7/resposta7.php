<?php
    $palavra = $_POST['palavra'];
    $palavra_invertida = strrev($palavra);
    echo "<p>A palavra informada é: $palavra</p>";
    echo "<p>A palavra invertida é: $palavra_invertida</p>";
?>