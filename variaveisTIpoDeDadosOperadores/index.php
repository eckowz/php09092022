<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <title>Tipos de dados de Operadores</title>
</head>

<body>

  <?php
  $noite = TRUE;
  $chuva = FALSE;

  if ($noite == TRUE)
    echo "<br>" . "Está de noite.";
  else
    echo "<br>" . "Está de dia.";

  if ($chuva == TRUE)
    echo "<br>" . "Está chovendo.";
  else
    echo "<br>" . "Não está chovendo.";
  ?>

  <?php
  $noite = TRUE;
  $chuva = FALSE;

  if ($noite)
    echo "<br>" . "Está de noite.";
  else
    echo "<br>" . "Está de dia.";

  if ($chuva)
    echo "<br>" . "Está chovendo.";
  else
    echo "<br>" . "Não está chovendo.";
  ?>

  <?php
  $variavel = 0;
  // Variável não definida
  if ($variavel) {
    echo "<br>" . "$variavel é FALSE nesse contexto";
  }

  if (0) {
    echo "<br>" . "0 é FALSE nesse contexto";
  }

  if ("0") {
    echo "<br>" . "String '0' é FALSE nesse contexto";
  }

  if (null) {
    echo "<br>" . "Null é FALSE nesse contexto";
  }

  // Array vazio
  if ([]) {
    echo "<br>" . "Array vazio é FALSE nesse contexto";
  }
  ?>

  <?php
  echo "<br>";
  $tipo = 1234;
  var_dump($tipo);
  echo "<br>";
  $tipo = -2345;
  var_dump($tipo);
  echo "<br>";
  $tipo = 0234;
  var_dump($tipo);
  echo "<br>";
  $tipo = 0x34;
  var_dump($tipo);
  echo "<br>";
  ?>

  <?php
  $tipo = 1.543;
  $tipo = 23e4; //  (equivale a 230.000)
  ?>

  <?php
  $testando = "Olá Mundo Novo";
  $testando1 = '--- $testando ---';
  echo "<br>" . $testando1;
  ?>

  <?php
  $testando = "Olá Mundo Novo";
  $testando1 = "--- $testando ---";
  echo "<br>" . $testando1;
  ?>

  <?php
  $numero = 15; //tipo inteiro
  $string = "15"; //tipo string

  echo "<br>" . $numero + $string; //Resultado igual a 30
  ?>

  <?php
  $var = 15; //tipo inteiro
  $var2 = "15.5"; //tipo String

  echo "<br>" . $var + $var2; //Resultado igual a 30.5
  ?>

  <?php
  $vetor[1] = "Alemanha ";
  $vetor[2] = "Italia ";
  $vetor[3] = "França";
  $vetor["testando"] = 1;
  ?>

  <?php
  $vetor = array(1 => "Alemanha", 2 => "Italia", 3 => "França", "testando" => 1);
  ?>

  <?php
  $vetorPaises = array("Alemanha", "Italia", "França", "Noruega");
  echo "<br>" . $vetorPaises[1];
  ?>

  <?php
  class CD
  {
    var $titulo;
    var $banda;
    var $ano_lancamento;
  }

  $disco = new CD();
  $disco->titulo = "<br>The Number of the Beast";
  $disco->banda = "<br>Iron Maiden";
  $disco->ano_lancamento = 1982;
  ?>

  <?php
  echo "<br>";
  $nome_1 = "César";
  $nome_2 = "Augusto";

  $novo_nome = $nome_1." ".$nome_2;
  echo $novo_nome;
  ?>

  <?php
  echo "<br>";
  $a = 30;
  $b = 20;

  $soma = $a + $b;

  $subtracao = $a - $b;

  echo "A soma entre as variáveis é: ".$soma;
  echo " ";
  echo "A subtração entre as variáveis é: ".$subtracao;
  ?>
</body>

</html>