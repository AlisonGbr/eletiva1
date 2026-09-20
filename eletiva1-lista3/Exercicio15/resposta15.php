<?php
    $email = $_POST['email'];
    $dominio = substr(strrchr($email, "@"), 1);
    echo "<p>O domínio do e-mail '$email' é: $dominio</p>";
?>