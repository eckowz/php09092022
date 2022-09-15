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
    $nome = isset($_GET["nome"]) ? $_GET["nome"] : "";
    $email = isset($_GET["email"]) ? $_GET["email"] : "";

    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br><br>";
    ?>
    <form method="get">
      Nome: <input type="text" name="nome" value="<?= $nome ?>"><br><br>
      Email: <input type="text" name="email" value="<?= $email ?>"><br><br>
      <input type="submit" name="submit" value="Enviar">
    </form>
    <?php
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";

    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br><br>";
    ?>
    <form method="post">
      Nome: <input type="text" name="nome" value="<?= $nome ?>"><br><br>
      Email: <input type="text" name="email" value="<?= $email ?>"><br><br>
      <input type="submit" name="submit" value="Enviar">
    </form>
  </main>
</body>

</html>