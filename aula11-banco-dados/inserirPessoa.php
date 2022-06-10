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

    if (!isset($_GET["bt_sub"])) {
      // primeira vez, então exibe formulário
    ?>
      <form  action="" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="ds_nome" id="nome">
        
        <input type="radio" name="cd_sexo" id="masc" value="m">
        <label for="masc">Masculino</label>
        <input type="text" name="cd_sexo" id="fem" value="f">
        <label for="fem">Feminino</label>
        <input type="text" name="cd_sexo" id="ndef" value="n">
        <label for="ndef">Prefiro não informar</label>
        
        <label for="dtnasc">Data Nascimento</label>
        <input type="date" name="dt_nasc" id="dtnasc">
        
        <label for="email">E-mail</label>
        <input type="text" name="ds_email" id="email">
        
        <label for="telefone">Telefone</label>
        <input type="text" name="nr_telefone" id="telefone">
        
        <input type="submit" name="bt_sub" value="Inserir">
      </form>

    <?php

    } else {
      $ds_nome = $_GET["ds_nome"];
      $cd_sexo = $_GET["cd_sexo"];
      $dt_nasc = $_GET["dt_nasc"]; # ano - mes - dia
      $nr_telefone = $_GET["nr_telefone"];
      $ds_email = $_GET["ds_email"];
  
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
        
  
    }

    ?>
    
</body>
</html>