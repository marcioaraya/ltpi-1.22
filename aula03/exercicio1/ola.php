<!DOCTYPE html>
<html>
	<head> 
		<title>Exemplo</title> 
		<meta charset="UTF-8">  
	</head>
	<body>
		<?php
		$nome = $_GET["nome"];
		$sobrenome = $_GET["sobrenome"];
		echo "Olá! $nome $sobrenome. <br>Seja bem vindo!";
		?>
	</body>
</html>
