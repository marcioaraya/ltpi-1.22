<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $tel1 = "(61) 912-5678";
    echo "Telefone: $tel1 <br>";

    $sonumeros=preg_replace('/[^0-9]/', '', $tel1);
    echo "Só os números: $sonumeros <br>";

    echo "Comprimento da string: ".mb_strlen($sonumeros)."<br>";
    $tam = mb_strlen($sonumeros);

    if (!($tam==10 || $tam==11)){
        echo "Número de telefone inválido!<br>";
        echo "Digite novamente<br>";
    } else {

        echo "Telefone OK!<br>";
    }
    

    ?>
</body>
</html>