<?php


session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO('mysql:host=localhost;dbname=my_table', 'root', '');

$sql = "SELECT * FROM base_text WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($user)) {
    $_SESSION['error'] = "Пользователь с таким эл.аддрисом уже существует.";
    header("Location: /20TaskPhp/15_task/15_task.php");
    exit;
//        echo "Пользователь с таким эл.аддрисом уже существует.";
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO base_text (email, password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email, 'password' => $hashed_password]);
header("Location: /20TaskPhp/15_task/15_task.php");


?>