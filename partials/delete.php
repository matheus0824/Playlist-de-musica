<?php
require_once 'crud.php';

$idMusica = 674;

$deleted = delete($pdo, 'musica', 'id = '.$idMusica);

if ($deleted) {
    echo 'Música deletada com sucesso!';
} else {
    echo 'Não foi possível deletar a música!!!';
}