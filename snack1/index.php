<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $games = [
    [
      "home" => "Milano",
      "homePoints" => 78,
      "away" => "Bologna",
      "awayPoints" => 69,
    ],
    [
      "home" => "Napoli",
      "homePoints" => 67,
      "away" => "Pescara",
      "awayPoints" => 74,
    ],
    [
      "home" => "Cagliari",
      "homePoints" => 76,
      "away" => "Ancona",
      "awayPoints" => 75,
    ],
    [
      "home" => "Brescia",
      "homePoints" => 100,
      "away" => "Torino",
      "awayPoints" => 101,
    ],
    [
      "home" => "Genova",
      "homePoints" => 96,
      "away" => "Venezia",
      "awayPoints" => 81,
    ],
    [
      "home" => "Roma",
      "homePoints" => 88,
      "away" => "Bari",
      "awayPoints" => 94,
    ],
    [
      "home" => "Lecce",
      "homePoints" => 82,
      "away" => "Chievo",
      "awayPoints" => 87,
    ],
    [
      "home" => "Palermo",
      "homePoints" => 67,
      "away" => "Catania",
      "awayPoints" => 58,
    ],
    [
      "home" => "Trento",
      "homePoints" => 98,
      "away" => "Foggia",
      "awayPoints" => 112,
    ],
    [
      "home" => "Isernia",
      "homePoints" => 81,
      "away" => "Venafro",
      "awayPoints" => 56,
    ]
  ]
  ?>

  <ul>
    <?php for ($i = 0; $i < count($games); $i++) {
      $thisGame = $games[$i];
    ?>
      <li>
        <h3>GAME <?php echo $i+1?>:
          <?php echo $thisGame["home"]; ?> - 
          <?php echo $thisGame["away"]; ?> | 
          <?php echo $thisGame["homePoints"]; ?> -
          <?php echo $thisGame["awayPoints"]; ?>
        </h3>
      </li>
    <?php } ?>
  </ul>
  
</body>
</html>