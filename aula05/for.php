<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>laço de repetição: for</h1>

    <?php
        $alunos[0]["nome"]= "Isaac";
        $alunos[0]["curso"]= "ADS";
        $alunos[1]["nome"]= "Murilo";
        $alunos[1]["curso"]= "BD";
        $alunos[2]["nome"]= "Enzo";
        $alunos[2]["curso"]="BD";
        $alunos[3]["nome"]= "Guilherme";
        $alunos[3]["curso"]="ADS";
        $alunos[4]["nome"]= "Fernando";
        $alunos[4]["curso"]="ADS";

        echo "<h1> Crescente </h1>";
        $qtd = sizeof($alunos);
        echo "<ol>";
        for($i=0; $i<$qtd; $i++){

            echo "<li>".$alunos[$i]['nome']."</li>";

        }
        echo "</ol>";

        echo "<h1> Decrescente </h1>";
        $qtd = sizeof($alunos);
        echo "<ol reversed>";
        for($i=$qtd-1; $i>=0; $i--){

            echo "<li>".$alunos[$i]['nome']."</li>";

        }
        echo "</ol>";
        ?>
</body>
</html>