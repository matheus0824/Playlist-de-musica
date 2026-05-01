<?php
require_once 'partials/crud.php';

$musicas = readAll($pdo, 'musica');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Minha Playlist</title>
<link rel="stylesheet" href="css/style.css">
</head>

<table>
    <tr>
        <th>ID</th>
        <th>Nome da <br>música</th>
        <th>Gênero</th>
        <th>Ano</th>
        <th>Ações</th>
</tr>

<?php foreach ($musicas as $m): ?>
    <tr>
        <td><?= $m['id'] ?></td>
        <td><?= $m['nome'] ?></td>
        <td><?= $m['genero'] ?></td>
        <td><?= $m['datamusica'] ?></td>

<td>
    <a href="partials/edit.php?id=<?= $m['id'] ?>" class="edit">Editar</a>
    <a href="partials/delete.php?id=<?= $m['id'] ?>" class="delete">Excluir</a>
</td>
</tr>
<?php endforeach; ?>


</table>

<a href="partials/form.php" class="add">Nova Música</a>
</body>
</html>