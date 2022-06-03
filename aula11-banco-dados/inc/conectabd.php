<?php
# endereço do servidor de banco de dados
$host = 'localhost';
# database ou schema
$db = 'agenda';
# usuario
# não é recomendado utilizar o usuário 'root'!!
# É preferível criar um usuário específico para cada
# aplicação
$user = 'root';
# senha
$password = 'senac';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
		echo "Conectado ao schema $db com sucesso";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}