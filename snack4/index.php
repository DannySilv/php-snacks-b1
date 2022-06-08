<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php
$rndNumbs = [];
while (count($rndNumbs) < 15) {
  $newNumb = rand(1, 100);
  if (!in_array($newNumb, $rndNumbs)) {
    $rndNumbs[] = $newNumb;
  }
}
var_dump($rndNumbs);
?>
  
</body>
</html>