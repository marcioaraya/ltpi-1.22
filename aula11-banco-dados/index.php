<?php
include "inc/conectabd.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <h1>Agenda</h1>
    <?php

    $sql = 'select id_pessoa, ds_nome, ds_email from tb_pessoa';

    $statement = $pdo->prepare($sql);
    $statement->execute();
    $linhas = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($linhas as $pessoa){
        echo "<p>".$pessoa["id_pessoa"]." - ".$pessoa["ds_nome"]." - ".$pessoa["ds_email"]."</p>";
    }

    ?>

    <p><a href="inserirPessoa.php">Incluir nova pessoa</a></p>
</body>
</html>