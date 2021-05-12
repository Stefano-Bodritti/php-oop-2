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
      <li><?php echo $libro->pages; ?> pagine</li>
      <li><?php echo $libro->edition; ?> edizione</li>
    </ul>
    <h2>Categoria DVD</h2>
    <ul>
      <li><?php echo $DVD1->name; ?></li>
      <li><?php echo $DVD1->ID; ?></li>
      <li><?php echo $DVD1->price; ?> euro</li>
      <li><?php echo $DVD1->description; ?></li>
      <li><?php echo $DVD1->runningTime; ?> minuti</li>
      <li>dischi: <?php echo $DVD1->numberOfDisks; ?></li>
    </ul>
  </body>
</html>