<?php
    $numero = $_POST['numero'];
    echo "<h2>Tabuada do $numero</h2>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<p>$numero x $i = $resultado</p>";
    }
?>