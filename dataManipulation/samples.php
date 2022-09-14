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
    date_default_timezone_set('America/Sao_Paulo');
    $revisao = new DateTime();
    echo $revisao->format('d-m-Y H:i:s') . "<br>";
    $revisao->add(new DateInterval('P10D'));
    echo "Data da próxima revisão: " . $revisao->format('Y-m-d');
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    echo date("w");
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $data_atual = getdate();
    print_r($data_atual);
    echo "<br>";
    $dia_semana = date("w");
    print_r("Dia da semana: " . $dia_semana);
    echo "<br>";

    switch ($dia_semana) {
      case 0:
        echo "Domingo";
        break;
      case 1:
        echo "Segunda-feira";
        break;
      case 2:
        echo "Terça-feira";
        break;
      case 3:
        echo "Quarta-feira";
        break;
      case 4:
        echo "Quinta-feira";
        break;
      case 5:
        echo "Sexta-feira";
        break;
      case 6:
        echo "Sábado";
        break;


      default:
        echo "Dia inválido";
        break;
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $today = getdate();
    $dia_semana = $today['wday'];
    switch ($dia_semana) {
      case 0:
        echo "Domingo";
        break;
      case 1:
        echo "Segunda-feira";
        break;
      case 2:
        echo "Terça-feira";
        break;
      case 3:
        echo "Quarta-feira";
        break;
      case 4:
        echo "Quinta-feira";
        break;
      case 5:
        echo "Sexta-feira";
        break;
      case 6:
        echo "Sábado";
        break;

      default:
        echo "Dia inválido";
        break;
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    ?>
  </main>
</body>

</html>