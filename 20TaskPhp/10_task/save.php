<?php
 $text = $_POST['text'];

 $pdo = new PDO("mysql:host=localhost;dbname=my_table","root","");
 $sql = "INSERT INTO base_email (text) VALUES (:text)";
 $statement = $pdo->prepare($sql);
 $statement->execute(['text'=>$text]);

 header("Location: /20TaskPhp/10_task/10_task.php");
?>