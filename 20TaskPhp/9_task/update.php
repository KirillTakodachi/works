<?php 
	$pdo = new PDO("mysql:host=localhost; dbname=contact","root","");
	$sql = "UPDATE twiters SET name=:name, last name=:last name, username=:username WHERE id=:id";
	$statements = $pdo->prepare($sql);
	$statements->execute($_POST);
	header("Location: /20TaskPhp/9_task/9_task.php");
?>