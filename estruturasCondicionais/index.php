<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <title>Index</title>
</head>

<body>
  <main>
    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $a = 4;
    $b = 2;

    if ($a / $b == 2) {
      echo "O resultado da divisão é 2";
    } else {
      echo "O resultado da divisão não é 2";
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $a = 8;
    $b = 2;

    if ($a / $b == 2) {
      echo "O resultado da divisão é 2";
    } elseif ($a / $b == 4) {
      echo "O resultado da divisão é 4";
    } else {
      echo "O resultado da divisão não é 2 nem 4";
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $a = 8;
    $b = 2;

    echo $a / $b == 2 ? "O resultado da divisão é 2" : "O resultado da divisão não é 2";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $sorteio = rand(0, 5);

    switch ($sorteio) {
      case 0:
        echo "Você perdeu a vez";
        break;
      case 1:
        echo "Avance 1 casa";
        break;
      case 2:
        echo "Você ganhou um bônus! Avance 3 casas";
        break;
      default:
        echo "Jogue novamente";
        break;
    }
    ?>



  </main>
</body>

</html>