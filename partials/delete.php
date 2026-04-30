<?php
require_once 'crud.php';

$idMusica = $_GET['id'];

$deleted = delete($pdo, 'musica', 'id = '.$idMusica);

header('Location: index.php');
exit; 