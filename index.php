<?php
require_once 'crud.php';

$musicas = readAll($pdo, 'musicas');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Minha Playlist</title>
<link rel="stylesheet" href="css/style.css">
</head>
<h1>Minha Playlist</h1>
<a href="form.php" class="add">Nova Música</a>
<table>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Artista</th>
        <th>Gênero</th>
        <th>Ano</th>
        <th>Favorita</th>
        <th>Ações</th>
</tr>

<?php foreach ($musicas as $m): ?>
    <tr>
        <td><?= $m['id'] ?></td>
        <td><?= $m['titulo'] ?></td>
        <td><?= $m['artista'] ?></td>
        <td><?= $m['genero'] ?></td>
        <td><?= $m['ano'] ?></td>
<td>
    <?= $m['favorita'] ? '⭐' : '☆' ?>
</td>

<td>
    <a href="edit.php?id=<?= $m['id'] ?>" class="edit">Editar</a>
    <a href="delete.php?id=<?= $m['id'] ?>" class="delete">Excluir</a>
</td>
</tr>
<?php endforeach; ?>

</table>
</body>
</html>