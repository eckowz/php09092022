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
    $arrayA = array(1, 2, 3);
    echo $arrayA[0] . "<br>";
    echo $arrayA[1] . "<br>";
    echo $arrayA[2] . "<br>";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $arrayB = [1, 2, 3];
    echo $arrayB[0] . "<br>";
    echo $arrayB[1] . "<br>";
    echo $arrayB[2] . "<br>";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $array1 = array(
      "chave1" => 1,
      "chave2" => "PHP",
      "chave3" => false
    );
    echo $array1["chave2"] . "<br>";
    $array1["chave2"] = 2;
    echo $array1["chave2"] . "<br>";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $arrayC = array(1, 2, 3);
    foreach ($arrayC as $chave => $valor) {
      echo "{$chave}: {$valor}<br>";
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $linguagens = array(
      array("PHP", "PHP: Hypertext Preprocessor"),
      array("SQL", "Structured Query Language")
    );
    echo $linguagens[0][1];
    ?>
  </main>
</body>

</html>