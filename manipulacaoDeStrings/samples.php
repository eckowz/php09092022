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

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $nome1 = "TESTE";
    $nome1 = "Nome:" . $nome1;
    $nome1 = strtoupper($nome1);
    echo $nome1;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $sigla = 'FBI';
    str_replace('I', 'C', $sigla);
    echo $sigla;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $titulo = "DEVMEDIA";
    $destaque = true;

    if ($destaque) {
      echo $titulo;
    } else {
      echo strtolower($titulo);
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $musica = 'Mabataki';

    echo <<<SONG
    Você está escutando $musica
    SONG;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $rg_cpf = "112345667";

    switch (strlen($rg_cpf)) {
      case 9:
        echo "Você informou o seu RG";
        break;

      case 11:
        echo "Você informou o seu CPF";
        break;

      default:
        echo "Documento inválido";
    }
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $nome = "Júlia";
    $greeting = "Bom dia, $nome";
    echo $greeting;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $employee = " Dona Sarkar ";
    $employee = substr(substr_replace(trim($employee), ".", 1, 4), 0, 2) . substr($employee, 5, strlen($employee) - 2);
    echo trim(strlen($employee));
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    function comparar($digitos, $inicio, $fim)
    {

      $digitos = (string)$digitos;
      $tamanhoCodigo = strlen($digitos);


      if ($tamanhoCodigo == 6) {

        if (substr($digitos, 0, 3) == $inicio && substr($digitos, 3) == $fim) {

          echo "Senha confirmada";
        } else {

          echo "senha errada";
        }
      } else {

        echo "tamanho do código invalido";
      }
    }

    define('CPF', 12345678965);
    $senha = 123965;

    $sequenciaInicial = substr(CPF, 0, 3);
    $sequenciaFinal = substr(CPF, 8);

    comparar($senha, $sequenciaInicial, $sequenciaFinal);
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $nome = "Marcus Fenix";

    $nome = str_replace("Marcus", "Adam", $nome);

    if ($nome == "Adam Fenix") {
      $nome = substr($nome, 5, 5);
    }

    echo $nome;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $texto = ' notebook ';

    $texto = trim($texto);

    $tamanho = substr($texto, 3, 6);

    echo strlen($tamanho);
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    function converter($temperaturaEmCelsius)
    {

      $kelvin = $temperaturaEmCelsius + 273;

      $fahrenheit = 1.8 * $temperaturaEmCelsius + 32;

      echo "${temperaturaEmCelsius}ºc equivale a ${kelvin}K e ${fahrenheit}ºF";
    }

    $celsius = 35;

    converter($celsius);
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $data = '08/06/1995';

    $mesNascimento = substr($data, 3, 2);

    echo <<<SHOW
    O mês de nascimento é: $mesNascimento
    SHOW;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $texto = 'proglamação web';
    $texto[4] = 'r';
    echo ucwords($texto);
    ?>
  </main>
</body>

</html>