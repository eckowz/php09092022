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

    use ItemVenda\ItemVenda;
    use Venda\Venda;
    use VendaException\VendaException;

    require_once "VendaException.php";
    require_once "Venda.php";
    require_once "ItemVenda.php";

    try {
      $camisa = new ItemVenda();
      $camisa->setDescricao("Camisa Polo");
      $camisa->setPreco(11.0);

      $bone = new ItemVenda();
      $bone->setDescricao("Boné Infantil");
      $bone->setPreco(11.0);

      $Venda = new Venda();


      print  "Total da venda: R$" . $Venda->getTotal();
    } catch (VendaException $e) {
      echo "VendaException: " . $e->getMessage()  . " - Código: "  . $e->getCodigo();
    } finally {
      echo "<br>Processamento encerrado";
    }
    ?>
  </main>

</body>

</html>