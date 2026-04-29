<?php
require_once 'crud.php';

$idMusica = 674;

$dadosAtualizados = [
    'Nome da música' => 'Smells Like Teen Spirit',
    'autor' => 'Nirvana',
    'generos' => 'Rock'
];

$linhasAfetadas = update($pdo, 'Musica', $dadosAtualizados, 'id = '.$idMusica);

if ($linhasAfetadas > 0) {
    echo 'Música atualizada com sucesso!';
} else {
    echo 'Não foi possível atualizar a Música!';
}