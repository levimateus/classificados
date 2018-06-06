<?php 
session_start();

global $pdo;
try {
	$pdo = new PDO("mysql:dbname=classificados;hostname=localhost", "root", "password");
} catch (PDOException $e) {
	echo "FALHOU".$e->getMessage();
	exit();
}
 ?>