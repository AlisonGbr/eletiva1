<?php
    $palavra = $_POST['palavra'];
    $palavra_invertida = strrev($palavra);
    if ($palavra == $palavra_invertida) {
        echo "<p>A palavra '$palavra' é um palíndromo.</p>";
    } 
    else {
        echo "<p>A palavra '$palavra' não é um palíndromo.</p>";
    }
?>