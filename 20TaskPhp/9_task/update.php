<?php
	session_start();
	$name = 'Kirill';
	$surname = 'Manchuruk';
	$username = 'KirikTako';
	var_dump($session_start);die();
	$sql = "INSERT INTO my_base(name, surname, username) VALUES (:name, :surname, :username)";
	$statement = $pdo->prepare($sql);
	$statement->execute(['name'=>$name, 'surname'=>$surname, 'username'=>$username]);
	
	header("Location: /KMworks.loc/20TaskPhp/9_task");
?>