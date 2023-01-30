<?php
	$pdo = new PDO ("mysql:host=localhost;dbname=contact","root","");
	$statement = $pdo->prepare("DELETE FROM twiters WHERE id=:id");
	$statement->execute($_GET);

	header("Location: /9_task/9_task.php");s
?>