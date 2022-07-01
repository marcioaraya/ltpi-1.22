<?php
# endereço do servidor de banco de dados
$host = '127.0.0.1';
# database ou schema
$db = 'agenda';
# usuario
#    não é recomendado utilizar o usuário 'root'!!
#    É preferível criar um usuário específico para cada aplicação
$user = 'aplicacao_agenda';
# senha
$password = 'agenda123';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if ($pdo) {
		# echo "Conectado ao schema $db com sucesso";
	}
} catch (PDOException $e) {
	echo "Erro: ".$e->getMessage();
}