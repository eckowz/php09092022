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
  </main>
</body>

</html>