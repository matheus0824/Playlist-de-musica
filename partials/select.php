<?php

require_once 'crud.php';
$Musica = readAll($pdo, 'musica');


print '<table border=1 class="tableline">
 <tr>
    <th>ID</th>
    <th>Música</th>
    <th>genero</th>
    <th>Ano</th>
    <th>editar</th>
</tr>';

foreach($Musica as $Musica) {
    echo "<tr><td>".
    $Musica['id']."</td><td>".
    $Musica['nome']."</td><td>".
    $Musica['genero']."</td><td>".
    $Musica['datamusica']."</td></tr>";
}

print "</table>";