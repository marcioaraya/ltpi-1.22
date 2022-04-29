<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Foreach</h1>

    <?php
    /*
    se usar zero a esquerda na atribuição
    010 em octal representa 8 em decimal
    0x10 em hexadecima representa 16 em decimal 
    10 representa o número 10 inteiro
    10.0 representa o número 10 como float 

    */
    $notas["Guilherme"] = 10;
    $notas["Murilo"]= 9;
    $notas["Enzo"]=8;
    $notas["Isaac"]=9;
    $notas["Pedro"]=10;

    ksort($notas);
    
    foreach($notas as $p=>$n){
        echo "Aluno: $p Nota: $n <br>";

    }
    ?>

    
</body>
</html>