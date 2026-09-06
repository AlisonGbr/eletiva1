<?php
    $raio = $_POST['raio'];
    $area = pi() * pow($raio, 2);
    echo $area;
?>