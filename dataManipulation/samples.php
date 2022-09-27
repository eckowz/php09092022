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
    $today = getdate();
    $dia_semana = $today['wday'];
    $dia_mes = $today['mday'];
    echo "Dia da semana: " . $dia_semana;
    echo "Dia do mes: " . $dia_mes;
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
    $data_atual = new DateTime();
    echo "Data atual: " . $data_atual->format('d-m-Y H:i:s') . "<br>";
    $data_vencimento = new DateTime('2020-12-31');
    echo "Data de vencimento: " . $data_vencimento->format('d-m-Y H:i:s') . "<br>";

    $diferenca = $data_vencimento->diff($data_atual);
    echo "Diferença: " . $diferenca->format('%R%a dias') . "<br>";

    $diferenca_dias = $diferenca->format('%R%a');
    echo "Diferença_dias: " . $diferenca_dias . "<br>";

    if ($diferenca_dias > 0) {
      echo "A conta está atrasada!!!!";
    } else if ($diferenca_dias == 0) {
      echo "A conta venceu hoje!!!!!!.";
    } else {
      echo "A conta ainda não venceu";
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $expedicao = new DateTime();
    echo "expedicao: " . $expedicao->format('d-m-Y H:i:s') . "<br>";
    $data_validade = new DateTime();
    echo "data_validade: " . $data_validade->format('d-m-Y H:i:s') . "<br>";
    $data_validade->add(new DateInterval(' P5Y '));
    echo "new data_validade: " . $data_validade->format('d-m-Y H:i:s') . "<br>";

    echo 'CNH expedida em: ' . $expedicao->format('d-m-Y') . '<br>';
    echo 'Data de validade: ' . $data_validade->format('d-m-Y') . '<br>';
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $filme = array(
      "nome" => "Um lugar silencioso 2",
      "diretor" => "John Krasinski",
      "lançamento" => 2021
    );

    $data_atual =
      new DateTime();
    $ano_atual = $data_atual->format('Y');
    $texto = "";

    if ($filme["lançamento"] == $ano_atual) {
      $texto = "Lançamento do ano dá um play";
    } else if ($filme["lançamento"] > $ano_atual) {
      $texto = "Este filme ainda não lançou.";
    } else {
      $texto = "Filme disponível para assistir.";
    }

    echo $texto;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $valor = random_int(0, 500);
    $comissao = 0;

    if ($valor <= 100) {
      $comissao = 0.02;
    } else if ($valor <= 200) {
      $comissao = 0.05;
    } else {
      $comissao = 0.08;
    }

    echo "Valor: " . $valor . "<br>";
    echo "Comissão: " . $comissao . "<br>";
    echo "Total: " . ($valor * $comissao) . "<br>";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $boleto = array(
      "titulo" => "Luz",
      "valor" =>  568,
      "vencimento" => "2025 -12-01"
    );

    $hoje = new DateTime();
    echo "Hoje: " . $hoje->format('d-m-Y H:i:s') . "<br>";
    $data_vencimento = new Datetime($boleto["vencimento"]);
    echo "Data de Vencimento: " . $data_vencimento->format('d-m-Y H:i:s') . "<br>";
    if ($hoje >= $data_vencimento) {
      echo "Conta vencida";
    } else {
      echo "Conta a vencer";
    }
    ?>
  </main>
</body>

</html>