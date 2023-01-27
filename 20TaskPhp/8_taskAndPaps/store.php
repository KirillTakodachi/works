<?php
	$pdo = new PDO ('mysql:host=localhost;dbname=sus;','root','');
	$sql = "INSERT INTO users (name, surname, email) VALUES (:name, :surname, :email)";
	$statement = $pdo->prepare($sql);
	$statement->execute($_POST);
	header('Location: /8_taskAndPaps/8_task');
?>