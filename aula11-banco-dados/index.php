<?php
include "inc/conectabd.php";
include "inc/funcoes.php";

if ($usuario=verificaUsuarioLogado()){
    
} else {
    header('Location: login.php');   
}
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
    <?php cabecalho($usuario); ?>
    <h1>Agenda</h1>
    <?php

    $sql = 'select id_pessoa, ds_nome, ds_email from tb_pessoa';

    $statement = $pdo->prepare($sql);
    $statement->execute();
    $linhas = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo '<table border="1">';
    echo '<tr><th>Id</th><th>Nome</th><th>Email</th><th colspan="2">Ações</th></tr>';
    foreach($linhas as $pessoa){
        echo "<tr>".
            "<td>".$pessoa["id_pessoa"]."</td>".
            "<td>".$pessoa["ds_nome"]."</td>".
            "<td>".$pessoa["ds_email"]."</td>".
            "<td><a href=".'"excluirPessoa.php?id='.$pessoa["id_pessoa"].'">Excluir</a></td>'.
            "<td><a href=".'"alterarPessoa.php?id='.$pessoa["id_pessoa"].'">Alterar</a></td>';
            "</tr>";
    }
    echo '</table>';

    ?>

    <p><a href="inserirPessoa.php">Incluir nova pessoa</a></p>
</body>
</html>