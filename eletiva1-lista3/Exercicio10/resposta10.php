<?php
    $nome = $_POST['nome'];
    //usando for
    $iniciais = '';
    $palavras = explode(' ', $nome);
    for ($i = 0; $i < count($palavras); $i++) {
        $iniciais .= substr($palavras[$i], 0, 1);
    }
    echo "<p>O nome informado é: $nome</p>";
    echo "<p>As iniciais do nome são: $iniciais</p>";
?>