<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <title>Index</title>
</head>

<body>

  <main>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    for ($i = 0; $i < 10; $i++) {
      echo $i . "<br>";
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    for ($i = 0; $i < 10; $i++) :
      echo $i . "<br>";
    endfor;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $vetor = array(1, 2, 3, 4, 5);
    for ($i = 0; $i < 5; $i++) {
      $item = $vetor[$i];
      echo $item;
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $vetor = array(1, 2, 3, 4, 5);
    foreach ($vetor as $item) {
      echo $item;
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $pararLoop = 9;

    for ($numero = 0;; $numero++) {
      if ($numero == $pararLoop) {
        break;
      }
      echo $numero . "<br>";
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    for ($i = 0; $i < 10; $i++) {
      if ($i % 2 == 0) {
        continue;
      }
      echo $i . "<br>";
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $colecao = [1, 3, 6, 9, 13];
    $soma = 0;
    for ($i = 0, $j = count($colecao); $i < $j; $i++) {
      $soma += $colecao[$i];
    }
    echo $soma;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $i = 1;
    while ($i <= 10) {
      echo $i . ", ";
      $i++;
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $i = 1;
    while ($i <= 10) :
      echo $i . ", ";
      $i++;
    endwhile;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $i = 1;
    do {
      echo $i . ", ";
      $i++;
    } while ($i < 11);
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $i = 0;
    while (true) {
      if ($i == 5) {
        break;
      }
      echo $i . ", ";
      $i++;
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $i = 0;
    while ($i < 10) {
      $i++;
      if ($i % 2 == 0) {
        continue;
      }
      echo $i . ", ";
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $minimo = 10;
    $maximo = 30;
    $numero = $minimo + 1;

    while ($numero < $maximo) {
      echo $numero . ", ";
      $numero++;
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $numero_1 = 4;
    $numero_2 = 5;

    do {

      $soma = $numero_1 + $numero_2;

      ++$numero_1;
      ++$numero_2;
    } while ($soma <= 9);

    echo $soma;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $num = 10;
    $pares = 0;
    $i = 0;

    while ($i <= $num) {
      if ($i % 7 == 0) {
        $pares++;
        echo "Variavel pares incrementado: " . $pares . " Contador: " . $i . "<br>";
      }

      $i++;
    }
    echo $pares . "<br>";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    const percentual = 0.005;
    $valor = 353.6;

    echo bonus($valor, percentual);

    function bonus($valor, $percentual)
    {
      return $valor * $percentual;
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $valorTotal = 199.25;
    $pagantes = 3;

    for ($i = 0; $i < $pagantes; $i++) {
      echo "Pagamento $i";
      pagar($valorTotal / $pagantes);
    }

    function pagar($valor)
    {
      echo "Valor pago $valor";
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $preco_item = 1.50;

    function total()
    {
      global $preco_item;
      $item = 10;

      $valor_total = $item * $preco_item;

      return $valor_total;
    }

    echo total();
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $carros = ["325i", "Skyline", "Lancer"];

    foreach ($carros as $carro) {
      echo $carro . "<br>";
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    function pintar(&$cor)
    {
      $cor = 'Cinza';
      return $cor;
    }

    $nova_cor = 'Verde';
    pintar($nova_cor);
    echo $nova_cor;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    function quadrado(&$valor)
    {
      $valor *= $valor;
    }

    $numero = 7;
    quadrado($numero);
    echo $numero;
    ?>
  </main>

</body>

</html>