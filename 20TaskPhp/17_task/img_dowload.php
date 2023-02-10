<?php

$file = $_POST['file'];

$result = pathinfo('my.jpg');

$filename = uniqid() . "." . $result['extension'];



var_dump(move_uploaded_file($_FILES['file']['tmp_name'], 'uplouds/' . $filename));
//$pdo = new PDO('mysql:host=localhost;dbname=my_table','root','');
//$sql = "INSERT INTO img_base (name) VALUES (:name)";
//$statement = $pdo->prepare($sql);
//$statement->execute(['name'=>$file]);

//header("Location: /20TaskPhp/17_task/17_task.php");
?>