<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<title>Nova Música</title>
</head>
<body>
<h1>Nova Música</h1>
<form method="POST" action="insert.php" class="form">
    <input type="text" name="titulo" placeholder="Título" required><br><br>
    <input type="text" name="artista" placeholder="Artista" required><br><br>
    <input type="text" name="genero" placeholder="Gênero"><br><br>
    <input type="number" name="ano" placeholder="Ano" min="1900" max="2100"><br><br>
    <button type="submit">Salvar</button>
</form>
<br>
<a href="index.php">Voltar</a>

</body>
</html>

