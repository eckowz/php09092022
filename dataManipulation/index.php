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
    echo date("d/m/Y");
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $nextWeek = time() + (7 * 24 * 60 * 60);
    echo 'Now:       ' . date('d-m-Y') . "<br>";
    echo 'Next Week: ' . date('d-m-Y', $nextWeek) . "<br>";
    echo 'Next Week: ' . date('d-m-Y', strtotime('+1 week')) . "<br>";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    echo 'Next Month: ' . date('d-m-Y', strtotime('+1 month')) . "<br>";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $data = mktime(02, 30, 00, 04, 30, 1995);
    // Mostra 30-04-1995
    echo date("d-m-Y", $data) . "<br>";

    // Mostra 30-04-1995 02:30
    echo date("d-m-Y H:i", $data) . "<br>";

    // Mostra 1995
    echo date("Y", $data) . "<br>";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $atual = new DateTime();
    $especifica = new DateTime(' 1990-01-22');
    $texto = new DateTime(' +1 month');

    print_r($atual);
    print_r($especifica);
    print_r($texto);

    /* DateTime Object ( [date] => 2015-06-20 19:03:45 [timezone_type] => 3 [timezone] => UTC ) 
      DateTime Object ( [date] => 1990-01-22 00:00:00 [timezone_type] => 3 [timezone] => UTC ) 
      DateTime Object ( [date] => 2015-07-20 19:03:45 [timezone_type] => 3 [timezone] => UTC )
*/
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $data = new DateTime();
    echo $data->format('d-m-Y H:i:s');
    $data = new DateTime('+1 month');
    echo $data->format('d-m-Y H:i:s');
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $data = new DateTime('22-01-1990');
    $data->modify('+1 month');
    echo $data->format('d-m-Y H:i:s');
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $data = new DateTime('22-01-1990');
    $data->setDate(1995, 3, 9);
    echo $data->format('d-m-Y H:i:s');
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $data = '09-03-1995';
    $data1 = DateTime::createFromFormat("d-m-Y", $data);
    echo $data1->format("d-m-Y");
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $data = new DateTime('22-01-1990');
    $data->setTime(9, 15, 44);
    echo $data->format('d-m-Y H:i:s');
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $fuso = new DateTimeZone('America/New_York');
    $data = new DateTime('22-01-1990');
    $data->setTimezone($fuso);
    echo $data->format('d-m-Y H:i:s');
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $intervalo = new DateInterval('P3YT8M');
    print_r($intervalo);
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $intervalo = new DateInterval('P2Y4D');
    echo $intervalo->format('%y anos e %d dias');
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $data1 = new DateTime('2011-09-11');
    $data2 = new DateTime('2011-10-13');
    $intervalo = $data1->diff($data2);
    echo $intervalo->format('%R%a dias');
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $data1 = new DateTime('2011-09-11');
    $data2 = new DateTime('2011-10-13');
    var_dump($data1 == $data2);
    var_dump($data1 > $data2);
    var_dump($data1 < $data2);
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $data = new DateTime('2011-09-11');
    print_r($data);

    $data->add(new DateInterval('P2M5D'));
    print_r($data);
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $data = new DateTime('2011-12-31');
    print_r($data);

    $data->sub(new DateInterval('P7D'));
    print_r($data);
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    date_default_timezone_set('America/Sao_Paulo');
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    echo strftime("%A");
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    header('Content-type: text/html; charset=UTF-8');
    echo "Última Modificação: " . date("F d Y H:i:s", getlastmod());
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $today = getdate();
    print_r($today);
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $data = date("d/m/Y");

    $data = explode("/", $data);

    list($dia, $mes, $ano) = $data;

    $data = "$ano/$mes/$dia";
    echo $data;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $timestamp = strtotime('9st March 1995');
    echo idate('m', $timestamp);
    ?>
  </main>
</body>

</html>