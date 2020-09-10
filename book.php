<?php


require_once('connect.php');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$stmt = $pdo->prepare('SELECT * FROM books where id=:id');
$stmt->execute(['id' => $id]);
$aBooks = $stmt->fetch();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $book['title']?></title>
</head>
<body>
<?php
 echo $book['title']
?>
</body>
</html>
