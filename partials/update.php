<?php
require_once 'crud.php';

$idMusica = $_GET['id'];

$dadosAtualizados = [
    'Nome da música' => $_POST['nome'],
    'autor' =>  $_POST['autor'],
    'genero' =>  $_POST['genero']
    'Ano' =>  $_POST['datamusica']
];

$linhasAfetadas = update($pdo, 'Musica', $dadosAtualizados, 'id = '.$idMusica);

if ($linhasAfetadas > 0) {
    echo 'Música atualizada com sucesso!';
} else {
    echo 'Não foi possível atualizar a Música!';
}

header('Location: index.php');
exit;