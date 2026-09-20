<?php
    $numero = $_POST['numero'];
    $arredondadocima = round($numero);
    $arredondadobaixo = floor($numero);
    $arredondadonormal = ceil($numero);
    
    echo "<p>O número informado é: $numero</p>";
    echo "<p>O número arredondado para cima é: $arredondadocima</p>";
    echo "<p>O número arredondado para baixo é: $arredondadobaixo</p>";
    echo "<p>O número arredondado normalmente é: $arredondadonormal</p>";
?>