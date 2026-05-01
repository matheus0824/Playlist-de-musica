<?php
require_once 'crud.php';

$id = $_POST['id'];
$ano = $_POST['ano'];

$data_formatada = $ano . "-01-01";

$dados = [
    'nome' => $_POST['titulo'],
    'genero' => $_POST['genero'],
    'datamusica' => $data_formatada
];

update($pdo, 'musica', $dados, "id = $id");

header("Location: ../index.php");
exit;