<?php
    $distancia = $_POST['distancia'];
    $tempo = $_POST['tempo'];
    $vmedia = $distancia / $tempo;
    echo "A velocidade média é de $vmedia km/h.";
?>