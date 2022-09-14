<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <title>Samples</title>
</head>

<body>
  <main>
    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    define('X', 8);

    $y = 7;
    $w = 3;
    $z = 2;

    $z *= X;
    $z -= $y;
    $z /= $w;

    echo $z;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $variavel = "carro";

    $$variavel = "Gol";

    echo $variavel;
    echo $carro;

    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $val1 = "10";
    $val2 = 10;

    echo $val1 == $val2;
    // digite


    $val1 = "";
    $val2 = false;

    echo $val1 == $val2;
    // digite

    $val1 = "false";
    $val2 = true;

    echo $val1 == $val2;
    // digite
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    define('booleano', true);

    $variavel = booleano;
    $$variavel = 'variavel';

    echo $variavel;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";

    $var1 = 4;
    $var2 = 2.0;

    $resultado1 = $var1 / $var2;

    var_dump($resultado1);
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    define("DISTANCIA", 1000);

    function calculaTempo(&$velocidade)
    {
      $tempo = DISTANCIA / $velocidade;

      return $tempo;
    }

    $velocidade_carro_1 = 50;
    $velocidade_carro_2 = 100;

    $tempo_1 = calculaTempo($velocidade_carro_1);
    $tempo_2 = calculaTempo($velocidade_carro_2);

    echo "O carro 1 fez o trajeto em: $tempo_1 s<br>";
    echo "O carro 2 fez o trajeto em: $tempo_2 s<br>";
    ?>
  </main>
</body>

</html>