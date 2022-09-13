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
    $nome = 'João';
    $sobrenome = 'Silva';

    //Impressão das duas variáveis
    echo $nome, $sobrenome;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $nome = 'João';
    $sobrenome = 'Silva';

    //Erro ao executar
    //print($nome, $sobrenome);

    //Comandos válidos
    print($nome);
    print($sobrenome);
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $nome = 'PHP';

    echo 'Minha linguagem favorita é $nome';
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $nome = 'PHP';

    echo "Minha linguagem favorita é $nome";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $nome = 'PHP';

    //Será impressa string
    echo <<<ABC
    Minha linguagem favorita é $nome //o valor da variável será impresso
    ABC;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $nome = 'PHP';

    //Será impressa a string definida
    echo <<<'ABC'
    Minha linguagem favorita é o $nome //o valor da variável não será impresso
    ABC;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $nome = 'PHP';

    echo "$nome é a minha linguagem favorita";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $nome = 'PHP';
    echo "${nome} é a minha linguagem favorita";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $nome = 'PHP';
    echo "{$nome} é a minha linguagem favorita";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $nome = 'PHP';

    //Acesso ao primeiro caractere da variável nome
    $primeiro_caractere = $nome[0];

    //Modificação da variável nome
    $nome[1] = 'P';
    echo $nome;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $nome = 'Linguagem PHP';
    $nome_2 = ' Linguagem Java ';

    //será impressa a quantidade de caracteres da string (13)
    echo strlen($nome)."<br>";

    //Converte o primeiro caractere de cada palavra para maiúsculo
    echo ucwords($nome) . "<br>";

    //Converte o primeiro caractere para maiúsculo
    echo ucfirst($nome) . "<br>";

    //Converte a string para minúscula
    echo strtolower($nome) . "<br>";

    //Converte a string para maiúscula
    echo strtoupper($nome) . "<br>";

    //Substitui a string Linguagem pela string Amo
    echo str_replace('Linguagem', 'Amo', $nome) . "<br>";

    //Insere na primeira posição da string os caracteres PHP
    echo substr_replace($nome, 'PHP', 0, 0) . "<br>";

    //Será retornada parte da string
    echo substr($nome, 1, 5) . "<br>";

    //Retira o espaço no início e no final de uma string
    echo trim($nome_2) . "<br>";
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $var = 15;

    //O valor de $var é convertido para string
    $var_2 = (string)$var;
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $var = 15;

    //O valor de $var é convertido para string
    $var_2 = strval($var);
    ?>

    <?php
    echo "<br>Linha executada:" . __LINE__ . "<br>";
    $var = true;
    $var_2 = false;

    //O valor de $var é convertido para string
    $var_3 = strval($var);

    //O valor de $var_2 é convertido para string
    $var_3 = strval($var_2);
    ?>
  </main>
</body>

</html>