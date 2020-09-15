<?php

require_once('connect.php');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$stmt = $pdo->prepare('SELECT * FROM books where id=' .$id);
$stmt->execute(['id' => $id]);
$book= $stmt->fetch();

$id = (int)$_GET['id'];
$stmt = $pdo->prepare('DELETE FROM books where id=' .$id);







?>
