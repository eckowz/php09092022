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

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $indice = 0;

    $texto = 'carro  velho';

    $tamanho_texto = strlen($texto);

    while ($texto[$indice] != 'h') {
      $indice++;
    }

    echo "O número de caracteres é: $indice";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    define('TOTALPONTOS', 54);

    $arremesso = 1;
    $cesta3pontos = 0;
    $cestas = 0;

    while ($cestas < TOTALPONTOS) {
      if ($arremesso % 4 == 0) {
        $cestas += 3;
        $cesta3pontos++;
      } else {
        $cestas += 2;
      }
      $arremesso++;
    }
    echo "Cestas de 3 pontos: $cesta3pontos";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $sequencia = '11000000011101';
    $numerosZero = 0;
    $numerosUm = 0;

    $tamanho = strlen($sequencia);

    for ($indice = 0; $indice < $tamanho; $indice++) {
      switch ($sequencia[$indice]) {
        case '0':
          $numerosZero++;
          break;
        case '1':
          $numerosUm++;
          break;
      }
    }
    echo "Total 0 : $numerosZero | Total 1 : $numerosUm";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $pitStop = 0;
    $totalVoltas = 55;
    
    for ($voltas = 0; $voltas <= $totalVoltas; $voltas++) {
      if ($voltas > 0 and $voltas < $totalVoltas and $voltas % 5 == 0) {
        $pitStop++;
      }
    }
    echo "Foram feitos $pitStop pit stops durante a corrida";
    ?>
  </main>
</body>

</html>