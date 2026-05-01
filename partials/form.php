<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Nova Música</title>
</head>
<body class="form-page">
    <div class="card-form">
        <h2>Nova Música</h2>
        <form method="POST" action="insert.php">
            <label for="titulo">Nome da musica</label>
            <input type="text" name="titulo" placeholder="Nome da Música" required>
            <input type="text" name="artista" placeholder="Artista" required>
            <input type="text" name="genero" placeholder="Gênero">
            <input type="text" name="ano" placeholder="data" min="1900" max="210000000000">
            <button type="submit">Salvar Música</button>
        </form>
        <a href="../index.php" class="back-link">Voltar</a>
    </div>
</body>
</html>