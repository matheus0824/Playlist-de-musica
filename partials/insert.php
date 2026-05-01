<?php
require_once 'crud.php';

$novaMusica = [
    'nome' => $_POST['titulo'],
    'genero' => $_POST['genero'],
    'datamusica' => $_POST['datamusica']
];

create($pdo, 'musica', $novaMusica);
header("Location: ../index.php");
exit;