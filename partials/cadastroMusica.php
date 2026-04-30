<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Música</title>
</head>
<body>
    <h1>Nova música</h1>

    <form action="insert.php" method="POST">
    <label for="musica">Música:</label>
    <input type="text" id="musica" name="musica"><br><br>
    <label for="artista">Artista:</label>
    <input type="text" id="artista" name="artista"><br><br>
    <label for="genero">Gênero:</label>
    <input type="text" id="genero" name="genero"><br><br>
    <label for="url">URL da Música:</label>
    <input type="url" id="url" name="url"><br><br>
    <input type="submit" value="Cadastrar">

</form>
</body>
</html>

