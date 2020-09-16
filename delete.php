<?php

require_once('connect.php');


$id = (int)$_GET['id'];
$stmt = $pdo->prepare('DELETE FROM books where id=:id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();
