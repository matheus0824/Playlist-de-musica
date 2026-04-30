<?php

require_once 'crud.php';


print '<table border=1 class="tableline">
 <tr>
    <th>ID</th>
    <th>Música</th>
    <th>genero</th>
    <th>Data de <br> inserção</th>
    <th>editar</th>


</tr>';

$Musica = readAll($pdo, 'Musica');
//print_r($livros);

foreach($Musica as $Musica) {
    echo "<tr><td>".
    $Musica['id']."</td><td>".
    $Musica['nome']."</td><td>".
    $Musica['genero']."</td><td>".
    $Musica['datamusica']."</td></tr>";


    
}

print "</table>";