<?php
require_once 'crud.php';

$novaMusica = [
    'nome' => $_POST['nome'],
    'autor' =>  $_POST['autor'],
    'genero' =>  $_POST['genero'],
    'Ano' =>  $_POST['datamusica']
];

$idMusicaNova = create($pdo, 'Musica', $novaMusica);
header('Location: index.php');
exit;
