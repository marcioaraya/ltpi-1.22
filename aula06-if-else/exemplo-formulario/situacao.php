<!DOCTYPE html>
<html>
	<head> 
		<title>Exemplo</title> 
		<meta charset="UTF-8">  
	</head>
	<body>
		<?php
		$nome = $_GET["nome"];
		$nota1 = str_replace(",", ".", $_GET["nota1"]);
        $nota2 = str_replace(",", ".", $_GET["nota2"]);

        $media = ($nota1 + $nota2)/2;

        if ($media >= 6) {
            $situacao = "Aprovado";
            $cor = "blue";
        } 
        else 
        {
            $situacao = "Reprovado";
            $cor = "red";
        }
        echo "<table border=\"1\">";
        echo "<tr><th>Aluno</th><th>Nota</th><th>Situação</th>";
        echo "<tr>";
        echo "<td>$nome</td>";
        echo "<td> $media</td>";
        echo "<td> <span style=\"color:$cor\">$situacao</span></td>";
        echo "</table>"
		?>
	</body>
</html>
