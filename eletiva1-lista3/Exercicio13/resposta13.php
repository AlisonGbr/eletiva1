<?php
    $texto = $_POST['texto'];
    $palavras = str_word_count($texto);
    $palavras_array = explode(" ", $texto);
    $maior_palavra = "";
    foreach ($palavras_array as $palavra) {
        if (strlen($palavra) > strlen($maior_palavra)) {
            $maior_palavra = $palavra;
        }
    }
    echo "<p>O texto contém $palavras palavras.</p>";
    echo "<p>A maior palavra do texto é: $maior_palavra</p>";
?>