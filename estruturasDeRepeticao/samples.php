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
      array('id' => 1, 'nome' => 'João', 'salario' => 5000),
      array('id' => 22, 'nome' => 'Mauro', 'salario' => 560),
      array('id' => 8, 'nome' => 'Alice', 'salario' => 4300),
    );

    foreach ($funcionarios as $i => $funcionario) {
      if ($funcionario['salario'] >= 5000) {
        continue;
      }

      $funcionarios[$i]['salario'] = $funcionario['salario'] + ($funcionario['salario'] * 0.1);
    }

    foreach ($funcionarios as $funcionario) {
      echo $funcionario["nome"] . " $" . $funcionario["salario"] . "<br>";
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    function dividir($num_1, $num_2)
    {

      $operacao = $num_1 / $num_2;

      return $operacao;
    }

    //Chamada da função
    echo "Resultado da divisão: " . dividir(8, 4);
    ?>


    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $funcionarios = array(
      array('id' => 1, 'nome' => 'João', 'salario' => 5000),
      array('id' => 22, 'nome' => 'Mauro', 'salario' => 560),
      array('id' => 8, 'nome' => 'Alice', 'salario' => 4300),
    );

    foreach ($funcionarios as $i => $funcionario) {
      if ($funcionario['id'] == 22) {
        $busca = $funcionario;
        break;
      }
    }

    if (isset($busca)) {
      echo "Funcionário encontrado: {$busca['nome']} - {$busca['id']}";
    } else {
      echo "Funcionário não encontrado";
    }
    ?>
  </main>
</body>

</html>