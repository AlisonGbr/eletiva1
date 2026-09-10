<?php
    $dias = $_POST['dias'];
    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    echo "$dias dias equivalem a: $horas horas, $minutos minutos e $segundos segundos";
?>