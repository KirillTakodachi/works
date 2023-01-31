<?php
	session_start();
	$name = "$_POST['Kirill']";
	$lastname = "$_POST['Manchuruk']";
	$username = "$_POST['KirikTako']";
	
	$sql = "INSERT INTO my_table(name, lastname, username) VALUES (:name, :lastname, :username)";
	$statement = $pdo->prepare($sql);
	$statement->execute(['name'=>$name, 'lastname'=>$lastname, 'username'=>$username]);
	var_dump($session_start);die();
	header("Location: /KMworks.loc/20TaskPhp/9_task");
?>