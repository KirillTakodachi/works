<?php
	//session_start();
	$name = $_POST['name'];
	$lastname = $_POST['surname'];
	$username = $_POST['username'];
	$pdo = new PDO('mysql:host=localhost;dbname=my_table;','root','');//подключени к БД
	$sql = "INSERT INTO data_base(name, lastname, username) VALUES (:name, :lastname, :username)";
	$statement = $pdo->prepare($sql);
	$statement->execute(['name'=>$name, 'lastname'=>$lastname, 'username'=>$username]);
	header("Location: /20TaskPhp/9_task/9_task.php");//ссылка на главную страницу
?>