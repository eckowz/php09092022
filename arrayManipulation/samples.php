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
    $funcionarios = array(
      array("nome" => "Alex", "idade" => 21, "salario" => 1285.27, "ativo" => true),
      array("nome" => "Emerson", "idade" => 35, "salario" => 3885.27, "ativo" => false),
      array("nome" => "Osvaldo", "idade" => 54, "salario" => 5285.27, "ativo" => true),
    );

    $bonificacao = 10;

    foreach ($funcionarios as $funcionario) {
      if ($funcionario["ativo"]) {
        $funcionario["salario"] += $funcionario["salario"] * ($bonificacao / 100);

        echo "Funcionario: {$funcionario['nome']} - {$funcionario['salario']}<br>";
      } else {
        echo "Funcionario: {$funcionario['nome']} - INATIVO<br>";
      }
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $valores_venda = [590.00, 850.00, 150.00, 10.00];
    $vendas = count($valores_venda);
    $vendas_ouro = 0;
    $vendas_prata = 0;

    foreach ($valores_venda as $valor) {
      if ($valor > 500) {
        $vendas_ouro++;
      } else if ($valor > 200) {
        $vendas_prata++;
      }
    }

    echo "Resumo de vendas:";
    echo "<br>";
    echo "Total de vendas: " . $vendas;
    echo "<br>";
    echo $vendas_ouro . " Vendas ouro:";
    echo "<br>";
    echo $vendas_prata . " Vendas prata:";
    ?>
  </main>
</body>

</html>