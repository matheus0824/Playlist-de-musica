<?php
require_once 'crud.php';

$musicas = readAll($pdo, 'musicas');

echo "<table border=1>";
echo "<tr>
<th>ID</th>
<th>Título</th>
<th>Artistas</th>
<th>Gênero</th>
<th>Ano</th>
<th>Favorita</th>
</tr>";

foreach ($musicas as $m) {
    echo "<tr>
    <td>{$m['id']}</td>
    <td>{$m['titulo']}</td>
    <td>{$m['artistas']}</td>
    <td>{$m['genero']}</td>
    <td>{$m['ano']}</td>
    <td>{$m['favorita']}</td>
    </tr>";
}

echo "</table>";

