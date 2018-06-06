<?php 
session_start();

try {
	$pdo = new PDO("mysql:dbname=classificados;hostname=localhost", "root", "password");
} catch (PDOException $e) {
	echo "FALHOU".$e->getMessage();
}
 ?>