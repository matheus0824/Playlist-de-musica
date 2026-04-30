<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Musicfy</title>
</head>
<body>
    <thead>
        <tr>
            <th>ID</th>
            <th>Música</th>
            <th>genero</th>
            <th>Data de inserção</th>
            <th>Editar</th>
        </tr>
    </thead>

    <?php
      foreach($Musica as $M) : 
    ?>
    <tr>
        <td><?= $M['id'] ?></td>
        <td><?= $M['nome'] ?></td>
        <td><?= $M['genero'] ?></td>
        <td><?= $Musica['datamusica'] ?></td>
        <td><a href="edit.php?id=<?= $M['id'] ?>">Editar</a></td>
    
    <td>
        <?= $M['id'] ?>
    </td>
      
    <td>
        <a href="edit.php?id=<?= $M['id'] ?>" class="Editar">Editar</a>
        <a href="delete.php?id=<?= $M['id'] ?>" class="Excluir">Exluir</a>
    </td>
    </tr>
    <?php
      endforeach;
    ?>
    <header>
        <?php
        include 'partials/header.php';
        ?>
    </header>

    <main>
        <?php
        include 'partials/select.php';
        ?>
    </main>
</body>
</html>