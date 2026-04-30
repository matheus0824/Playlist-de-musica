<?php
    require_once 'crud.php';

$idMusica = $_GET['id'];

$Musica = read($pdo, 'musica', 'id = '.$idMusica);

if (!$Musica) {
    echo 'Música não encontrada!';
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Editar</title>
</head>
<body>
    <h1>Editar Músicas</h1>
    <form action="update.php" method="POST" class="formEdit">
        <input type="hidden" name="id" value="<?= $Musica['id'] ?>">
        <label for="nome">Nome da música:</label>
        <input type="text" id="nome" name="nome" value="<?= $Musica['nome'] ?>" required><br><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" value="<?= $Musica['autor'] ?>" required><br><br>

        <label for="genero">Gênero:</label>
        <input type="text" id="genero" name="genero" value="<?= $Musica['genero'] ?>" required><br><br>

        <label for="datamusica">Ano:</label>
        <input type="number" id="datamusica" name="datamusica" value="<?= $Musica['datamusica'] ?>" required><br><br>

        <input type="submit" value="Atualizar">

    </form>
    <a href="index.php">Home</a>
</body>
</html>