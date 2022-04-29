<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {margin: 0 auto;}
    </style>
</head>
<body>
    <h1>Foreach - Tabela</h1>

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
    
    echo "<table border=\"1\">";
    echo "<tr><th>Aluno</th><th>Nota</th></tr>";
    foreach($notas as $p=>$n){
        echo "<tr>".
                 "<td style=\"text-align:center\">$p</td>".
                 "<td style=\"text-align:right\">$n</td>".
            "</tr>";
    }
    echo "</table>";
    ?>

    
</body>
</html>