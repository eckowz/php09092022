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
    $login = "lady";
    $senha = "lady123";

    if (
      $login == "lady" && $senha == "lady123"
    ) {
      echo "Seja bem-vinda {$login}";
    } else {
      echo "Não foi possível fazer login";
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $booleano_1 = true;
    $booleano_2 = false;
    $booleano_3 = false;

    $total = 0;

    if ($booleano_1) {
      $total += 1;
    }
    if ($booleano_1 && !$booleano_2) {
      $total += 1;
    }
    if ($booleano_1 && $booleano_3) {
      $total += 1;
    }
    echo $total;

    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $chuva = false;
    $frio = true;

    if ($chuva && $frio) {
      echo "Está chovendo e está frio";
    } else if ($chuva && !$frio) {
      echo "Está chovendo mas não está frio";
    } else if (!$chuva && $frio) {
      echo "Não está chovendo mas está frio";
    } else {
      echo "Não está chovendo e nem está frio";
    }

    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $val_1 = 1;
    $val_2 = 2;
    $val_3 = 3;

    if ($val_1 < $val_2) {
      $val_1 += 3;
    }

    if ($val_2 < $val_3 && $val_1 > $val_3) {
      $val_1 += 1;
    }

    echo $val_1;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $a = 1;
    $b = 2;


    if ($a + $b > 4) {
      $nome = 'Hélio';
    } else if ($a - $b == 3) {
      $nome = 'Andreza';
    } else if ($a * $b == 3) {
      $nome = 'Lúcia';
    } else {
      $nome = 'Romário';
    }

    echo $nome;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $possui_gas = true;
    $numero_multas = 0;

    $valor_seguro = 1200;

    if ($possui_gas && $numero_multas === 0) {

      $valor_seguro -= 500;
    }

    echo $valor_seguro;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";

    function validar($precoOriginal, $descontoPromocao)
    {

      if ($descontoPromocao < $precoOriginal) {

        return true;
      } else {

        return false;
      }
    }

    $precoOriginal = 45;
    $descontoPromocao = 25;


    if (validar($precoOriginal, $descontoPromocao)) {

      echo "Promoção válida";
    } else {

      echo "Não esta em promoção";
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $aprovado = aprovacao(7.5, 8);

    if ($aprovado = true) {
      echo "Aprovado";
    }

    function aprovacao($media, $nota)
    {
      return $nota >= $media;
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $var1 = 5.5;
    $var2 = -9;

    if ($var2 <= $var1) {

      $var2 += 10;
    } else {

      $var2 *= 2;
    }

    if ($var1 > $var2) {

      echo "Sim";
    } else {

      echo "Não";
    }
    ?>
  </main>
</body>

</html>