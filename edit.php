<?php

require_once('connect.php');


$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$title = filter_input(INPUT_POST, 'titleEdit', FILTER_SANITIZE_STRING);
$cover_path = filter_input(INPUT_POST, 'cover_pathEdit', FILTER_SANITIZE_STRING);
$language = filter_input(INPUT_POST, 'languageEdit', FILTER_SANITIZE_STRING);
$summary = filter_input(INPUT_POST, 'summaryEdit', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'priceEdit', FILTER_VALIDATE_FLOAT);
$stock_saldo = filter_input(INPUT_POST, 'stock_saldoEdit', FILTER_VALIDATE_INT);
$pages = filter_input(INPUT_POST, 'pagesEdit', FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, 'typeEdit', FILTER_SANITIZE_STRING);


$stmt = $pdo->prepare('UPDATE books SET title = :title, language = :language, cover_path = :cover_path, summary = :summary, price = :price, stock_saldo = :stock_saldo, pages = :pages, type = :type  where id=:id');
$stmt->execute(['id' => $id, 'title' => $title, 'language' => $language, 'cover_path' => $cover_path, 'summary' => $summary, 'price' => $price, 'stock_saldo' => $stock_saldo, 'pages' => $pages, 'type' => $type]);





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edukalt muudetud</h1>
    <a href="index.php">Tagasi</a>

</body>

</html>
