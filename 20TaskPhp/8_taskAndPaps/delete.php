<?php
	$pdo = new PDO ('mysql:host=localhost;dbname=sus;','root','');
	$statement = $pdo->prepare('DELETE FROM users WHERE id=:id');
	$statement->execute($_GET);
	header('Location: /8_taskAndPaps/8_task.php')
?>