<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <h2>Apresentação da data informada</h2>
    <form action="resposta4.php" method="post">
        <label for="dia">Digite o dia:</label>
        <input type="number" name="dia" id="dia" required>
        <br><br>
        <label for="mes">Digite o mês:</label>
        <input type="number" name="mes" id="mes" required>
        <br><br>
        <label for="ano">Digite o ano:</label>
        <input type="number" name="ano" id="ano" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>