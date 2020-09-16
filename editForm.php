<?php
require_once('connect.php');

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
    <?php
    echo "<input type='text' name='title'>" . $book['title'] . "<br>";
    ?>
</body>

</html>

<?php






?>
