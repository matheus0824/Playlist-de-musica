<?php
require_once 'crud.php';

$id = $_GET['id'];

$musica = read($pdo, 'musicas', "id = $id");

if (!$musica) {
    echo "Música não encontrada";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Música</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Editar Música</h1>
    <form method="POST" action="update.php" class="form">
        <input type="hidden" name="id" value="<?= $musica['id'] ?>">
        <input type="text" name="titulo" value="<?= $musica['titulo'] ?>" required><br><br>
        <input type="text" name="artista" value="<?= $musica['artista'] ?>" required><br><br>
        <input type="text" name="genero" value="<?= $musica['genero'] ?>" required><br><br>
        <input type="text" name="ano" value="<?= $musica['ano'] ?>" required><br><br>

        <label>
            <input type="checkbox" name="favorita" value="1"<?= $musica['favorita'] ?'checked' : '' ?>>Favorita</label><br><br>
            <button type="submit">Atualizar</button>
</form>
<br>
<a href="index.php">Voltar</a>
</body>
</html>
        
        