<!DOCTYPE html>
<html>
	<head> 
		<h1>Exemplos</h1>
		<meta charset="UTF-8"> 
	</head>
	<body>
		<!--
			action : serve para indicar qual será o programa
			         que receberá os dados deste formulário
		    method : indica o método que será usado para
			         transferir os dados do formulário para
					 o servidor onde está o programa "ola.php"
					 - GET: 
					   1. limite de quantidade de dados que
					      pode transferir com este método, é
						  aproximadamente 2 KB
					   2. os dados do formulário vão ser transferidos
					    pela URL, isto é, vão aparecer na barra de 
						endereços do navegador
					 - POST: 
					   1. não tem limite de tamanho da quantidade de
					      dados que pode transferir
					   2. os dados informados não aparecem na URL. São transferidos
					      no cabeçalho da requisição do protocolo HTTP 		 
		 -->
		<form action="ola.php" method="GET">  
			Nome: 
			<input type="text" name="nome">
			<br>
			Sobrenome: 
			<input type="text" name="sobrenome">
			<br>  
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
