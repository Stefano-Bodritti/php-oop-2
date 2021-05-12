<?php
require "classes.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP</title>
</head>

<body>
  <h2>Categoria Libri</h2>
  <ul>
    <li><?php echo $libro->name; ?></li>
    <li><?php echo $libro->ID; ?></li>
    <li><?php echo $libro->price; ?> euro</li>
    <li><?php echo $libro->description; ?></li>
  </ul>
</body>

</html>