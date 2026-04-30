<?php
require_once 'crud.php';

$novaMusica = [
    'Nome da música' => $_POST['nome'],
    'autor' =>  $_POST['autor'],
    'genero' =>  $_POST['genero']
    'Data de inserção' =>  $_POST['datamusica']
];

$idMusicaNova = create($pdo, 'Musica', $novaMusica);
header('Location: index.php');
exit;
