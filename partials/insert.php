<?php
require_once 'crud.php';

$novaMusica = [
    'titulo' => $_POST['titulo'],
    'artista' => $_POST['artista'],
    'genero' => $_POST['genero'],
    'ano' => $_POST['datamusica'],
];

create($pdo, 'musicas', $novaMusica);
header("Location: index.php");
exit;