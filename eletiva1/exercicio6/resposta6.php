<?php
    $fahrenheit = $_POST['fahrenheit'];
    $celsius = ($fahrenheit - 32) * 5/9;
    echo $celsius . "°C";
?>