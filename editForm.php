<?php
require_once('connect.php');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$stmt = $pdo->prepare('SELECT * FROM books where id=:id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
</head>

<body>
    <form action="edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $book['id']; ?>"><br>
        <label for="newTitle">Uus pealkiri:</label><br>
        <input type="text" name="titleEdit" value="<?php echo $book['title']; ?>"><br>
        <label for="newTitle">Kaanepilt:</label><br>
        <input type="text" name="cover_pathEdit" value="<?php echo $book['cover_path']; ?>"><br>
        <label for="newTitle">Keel:</label><br>
        <input type="text" name="languageEdit" value="<?php echo $book['language']; ?>"><br>
        <label for="newTitle">Kirjeldus:</label><br>
        <input type="text" name="summaryEdit" value="<?php echo $book['summary']; ?>"><br>
        <label for="newTitle">Hind:</label><br>
        <input type="text" name="priceEdit" value="<?php echo $book['price']; ?>"><br>
        <label for="newTitle">Laos:</label><br>
        <input type="text" name="stock_saldoEdit" value="<?php echo $book['stock_saldo']; ?>"><br>
        <label for="newTitle">Leheküljed:</label><br>
        <input type="text" name="pagesEdit" value="<?php echo $book['pages']; ?>"><br>
        <label for="newTitle">Tüüp:</label><br>
        <input type="text" name="typeEdit" value="<?php echo $book['type']; ?>"><br>
        <input type="submit">
    </form>
</body>

</html>
