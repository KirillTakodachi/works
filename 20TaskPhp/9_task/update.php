<?php
<<<<<<< HEAD
	session_start();
	$name = 'Kirill';
	$surname = 'Manchuruk';
	$username = 'KirikTako';
	var_dump($session_start);die();
	$sql = "INSERT INTO my_base(name, surname, username) VALUES (:name, :surname, :username)";
	$statement = $pdo->prepare($sql);
	$statement->execute(['name'=>$name, 'surname'=>$surname, 'username'=>$username]);
	
	header("Location: /KMworks.loc/20TaskPhp/9_task");
=======
	//session_start();
	$name = $_POST['name'];
	$lastname = $_POST['surname'];
	$username = $_POST['username'];
	$pdo = new PDO('mysql:host=localhost;dbname=my_table;','root','');//подключени к БД
	$sql = "INSERT INTO data_base(name, lastname, username) VALUES (:name, :lastname, :username)";
	$statement = $pdo->prepare($sql);
	$statement->execute(['name'=>$name, 'lastname'=>$lastname, 'username'=>$username]);
	header("Location: /20TaskPhp/9_task/9_task.php");//ссылка на главную страницу
>>>>>>> bbfacd8494d2b3bd6b923adc17c2787f8a966cd2
?>