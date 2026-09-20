<?php
    $numero = $_POST['numero'];
    $cont = $numero;
    do {
        echo "<p>$cont</p>";
        $cont--;
    } while ($cont >= 1);
?>