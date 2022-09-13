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
    $var1 = 'nome';
    $var2 = 'sobrenome';

    $$var1 = 'João';
    echo $nome;

    $$var2 = 'Silva';
    echo $sobrenome;
    ?>
  </main>
</body>

</html>