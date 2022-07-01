<?php
        $nome = $_GET["nome"];
        $agora = date("d/m/y");
        /* a função setcookie deve ser chamada antes de enviar
           qualquer saída para o navegador
           porque o comando para gravar cookies vai no
           cabeçalho do protocolo HTTP
        */
        setcookie("usuario", $nome, time()+3600);
        setcookie("data", $agora, time()+3600);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<p>Olá! $nome";
        echo "<p>$agora</p>";
    ?>
    <p><a href="le-cookie.php">Ler cookies</a></p>
</body>
</html>