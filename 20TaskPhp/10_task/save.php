<?php 
	$text = $_POST['text'];

	$pdo = new PDO("mysql:host=localhost;dbname=studs", "root", "");
	$sql = "INSERT INTO studs (text) VALUES (:text)";
	$statement = $pdo->prepare($sql);
	$statement->execute(['text' => $text]);
?>