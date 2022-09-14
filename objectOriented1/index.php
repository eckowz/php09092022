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
    include_once(__DIR__ . "/Expiravel.php");
    require_once(__DIR__ . "/Produtos.php");
    require_once(__DIR__ . "/Assinatura.php");
    foreach (get_included_files() as $included_files) {
      echo $included_files."<br>";
    }
    
    $Assinatura = new Assinatura();

    $Assinatura->setCodigo(1);
    $Assinatura->setNome("Assinatura MVP");
    $Assinatura->setPreco(69.99);
    $Assinatura->setDataExpiracao("2022-09-30");

    echo "Dias restantes da assinatura: {$Assinatura->getTempoRestante()->days}";

    ?>
  </main>

</body>

</html>