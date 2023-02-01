<?php
$pdo = new PDO('mysql:host=localhost;dbname=my_table;','root','');
$sql = "UPDATE data_base SET name=:name, lastname=:lastname, username=:username WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->execute($_POST);
header("Location: /20TaskPhp/9_task/9_task.php");
