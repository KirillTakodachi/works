<?
$pdo = new PDO("mysql:host=localhost;dbname=my_table;","root","");
$statement = $pdo->prepare("DELETE FROM data_base WHERE id=:id");
$statement->execute($_GET);
header("Location: /20TaskPhp/9_task/9_task.php");