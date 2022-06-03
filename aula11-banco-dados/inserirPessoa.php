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

    $ds_nome = 'Fulano Beltrano';
    $cd_sexo = 'M';
    $dt_nasc = '2000-06-01'; # ano - mes - dia
    $nr_telefone = 123456789;
    $ds_email = 'fulano.beltrano@xyz.com.br';
    

    try {
        $sql = 'INSERT INTO `agenda`.`tb_pessoa` (`ds_nome`,`cd_sexo`,`dt_nasc`,`nr_telefone`,`ds_email`)  VALUES (:ds_nome,:cd_sexo,:dt_nasc,:nr_telefone,:ds_email);';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':ds_nome', $ds_nome);
        $stmt->bindParam(':cd_sexo', $cd_sexo);
        $stmt->bindParam(':dt_nasc', $dt_nasc);
        $stmt->bindParam(':nr_telefone', $nr_telefone);
        $stmt->bindParam(':ds_email', $ds_email);
        $stmt->execute();
      
        echo $stmt->rowCount();
      } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
      }
      

    ?>
    
</body>
</html>