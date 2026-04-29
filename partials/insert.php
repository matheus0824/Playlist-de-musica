<?php
require_once 'crud.php';

$novaMusica = [
    'Nome da música' => 'Smells Like Teen Spirit',
    'autor' => 'Nirvana',
    'genero' => 'Rock'
];

$idMusicaNova = create($pdo, 'Musica', $novaMusica);
echo 'Nova música inserida: ' . $idMusicaNova;