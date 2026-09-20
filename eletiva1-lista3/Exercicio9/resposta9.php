<?php
    $frase = $_POST['frase'];
    $frase_sem_espacos_inifim = trim($frase);
    $frase_sem_espacos = str_replace(' ', '', $frase);
    echo "<p>A frase informada é: $frase</p>";
    echo "<p>A frase sem espaços no início e no final é: $frase_sem_espacos_inifim</p>";
    echo "<p>A frase sem espaços é: $frase_sem_espacos</p>";
?>