<?php
session_start();

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=my_table","root","");

$sql = "SELECT * FROM base_text WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text'=>$text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($task)){
    $message = "Вам следует заполнить некоторые из этих полей ниже.";
    $_SESSION['danger'] = $message;
    header("Location: /20TaskPhp/11_task/11_task.php");
    exit;
}

$sql = "INSERT INTO base_text (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text'=>$text]);

$message = "Введённая запись уже существует.";
$_SESSION['success'] = $message;

header("Location: /20TaskPhp/11_task/11_task.php");
?>