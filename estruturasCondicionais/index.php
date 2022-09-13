<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <title>Index</title>
</head>

<body>
  <main>
    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $a = 4;
    $b = 2;

    if ($a / $b == 2) {
      echo "O resultado da divisão é 2";
    } else {
      echo "O resultado da divisão não é 2";
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $a = 8;
    $b = 2;

    if ($a / $b == 2) {
      echo "O resultado da divisão é 2";
    } elseif ($a / $b == 4) {
      echo "O resultado da divisão é 4";
    } else {
      echo "O resultado da divisão não é 2 nem 4";
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $a = 8;
    $b = 2;

    echo $a / $b == 2 ? "O resultado da divisão é 2" : "O resultado da divisão não é 2";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $sorteio = rand(0, 5);

    switch ($sorteio) {
      case 0:
        echo "Você perdeu a vez";
        break;
      case 1:
        echo "Avance 1 casa";
        break;
      case 2:
        echo "Você ganhou um bônus! Avance 3 casas";
        break;
      default:
        echo "Jogue novamente";
        break;
    }
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
  </main>
</body>

</html>