<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->
<?php

$posts = [

    '10/01/2019' => [
        [
            "title" => "Post 1",
            "author" => "Giacomo",
            "text" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."
        ],
        [
            "title" => "Post 2",
            "author" => "Michele",
            "text" => "Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt."
        ],
    ],
    "10/02/2019" => [
        [
            "title" => "Post 3",
            "author" => "Gennaro",
            "text" => "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem."
        ]
    ],
    "15/05/2019" => [
        [
            "title" => "Post 4",
            "author" => "Nicandro",
            "text" => "Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?"
        ],
        [
            "title" => "Post 5",
            "author" => "Matteo",
            "text" => "Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
        ],
        [
            "title" => "Post 6",
            "author" => "Angelo",
            "text" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ]
    ],
];
?>
<?php
  for ($i = 0; $i < count(array_keys($posts)); $i++) {
    $thisDate = array_keys($posts)[$i];
?>
  <h2>Published on <?php echo $thisDate; ?></h2>
  <?php
    for ($j = 0; $j < count($posts[$thisDate]); $j++) {
      $thisPost = $posts[$thisDate][$j];
  ?>
    <h3><?php echo $thisPost["title"]; ?></h3>
    <h4><?php echo $thisPost["author"]; ?></h4>
    <p><?php echo $thisPost["text"]; ?></p>
  <?php
    } 
  ?>
<?php
  }
?>

</body>
</html>