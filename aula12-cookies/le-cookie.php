<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ler cookies</h1>
    <?php
        $nome = $_COOKIE["usuario"];
        $agora = $_COOKIE["data"];

        echo "<p>Olá! $nome";
        echo "<p>$agora</p>";

    ?>
    <p><a href="apaga-cookie.php">Apagar cookies</a></p>
</body>
</html>