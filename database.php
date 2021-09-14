<?php

$db_host 	= 'mysql-container';
$db_port 	= '3306';
$db_name 	= 'docker';
$db_user 	= 'root';
$db_password = 'password';

try {
	$connection = new PDO("mysql:host={$db_host};port={$db_port};dbname={$db_name}", $db_user, $db_password);
} catch (Exception $e) {
	$erro = 'Ocorreu um erro ao tentar conectar-se com o banco de dados';
	# var_dump($e);
}