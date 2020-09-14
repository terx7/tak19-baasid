<?php


require_once('connect.php');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$stmt = $pdo->prepare('SELECT * FROM books where id=:id');
$stmt->execute(['id' => $id]);
$book= $stmt->fetch();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $book['title']; ?></title>
</head>
<body>
<img src="<?php echo $book['cover_path'] ?>" alt="<?php echo $book['title'] ?>" srcset="" >
<h1><?php echo $book['title']; ?></h1>
<table>
<tr>
<td>Aasta: </td>
<td><?php echo $book['release_date'] ?></td>
</tr>
<td>Kirjeldus: </td>
<td><?php echo $book['summary'] ?></td>
</tr>
<td>Hind: </td>
<td><?php
$price = str_replace('.', ',', round($book['price'], 2));
echo $price ."€";

?></td>
</tr>
<td>Lehekülg: </td>
<td><?php echo $book['pages'] ?></td>
</tr>
<td>Tüüp: </td>
<td><?php echo $book['type'] ?></td>
</tr>

</table>
<a href="changeForm.php">Muuda</a>
<a href="deleteForm.php">Kustuda</a>
</body>
</html>
