<?php
require_once 'crud.php';

$id = $_GET['id'];

delete($pdo, 'musica', "id = $id");

header("Location: ../index.php");
exit;