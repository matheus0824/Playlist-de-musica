<?php
require_once 'crud.php';

$id = $_POST['id'];

$dados = [
    'titulo' => $_POST['titulo'],
    'artista' => $_POST['artista'],
    'genero' => $_POST['genero'],
    'ano' => $_POST['ano'],
    'favorita' => isset($_POST['favorita']) ? 1 : 0
];

update($pdo, 'musicas', $dados, "id = $id");
header("Location: index.php");
exit;
