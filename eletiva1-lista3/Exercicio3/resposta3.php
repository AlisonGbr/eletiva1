<?php
    $palavra1 = $_POST['palavra1'];
    $palavra2 = $_POST['palavra2'];

    if (strpos($palavra1, $palavra2) == true) {
        echo "<h2>Resultado</h2>";
        echo "<p>A palavra '$palavra2' está contida na palavra '$palavra1'.</p>";
    } 
    else {
        echo "<h2>Resultado</h2>";
        echo "<p>A palavra '$palavra2' não está contida na palavra '$palavra1'.</p>";
    }
?>