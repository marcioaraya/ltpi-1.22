<?php
        /* a função setcookie deve ser chamada antes de enviar
           qualquer saída para o navegador
           porque o comando para gravar cookies vai no
           cabeçalho do protocolo HTTP
        */
        setcookie("usuario", "", 1);
        setcookie("data", "", 1);
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
        if (isset($_COOKIE["usuario"])){
            echo "<p>Olá! ".$_COOKIE["usuario"]."</p>";
            echo "<p>".$_COOKIE["data"]."</p>";
            
            echo '<p>Quando recarregar a página os cookies terão sido apagados</p>';
            
            echo '<p><a href="apaga-cookie.php">Recarregar</a></p>';

        } else {
            echo "<p>Não há cookies</p>";
            echo '<p><a href="formulario.html">Ir para formulário</a></p>';
        }
        
    ?>
    
</body>
</html>