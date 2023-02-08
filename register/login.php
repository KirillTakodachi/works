<?php
session_start();
$email = $_POST["email"];
$password = $_POST["password"];


$pdo = new PDO("mysql:host=localhost;dbname=my_table", "root", "");

$sql = "SELECT * FROM base_user WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(["email"=>$email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);


if (!empty($user)){
    $sql = "SELECT $email FROM base_user WHERE password=:password";
    $statement = $pdo->prepare($sql);
    $statement->execute(["password"=>$password]);
    $hash = $statement->fetch(PDO::FETCH_ASSOC);
    if (password_verify($password, $hash)) {
        var_dump($email, $password);
        echo 'Пароль действителен!';
        header("Location: page_profile.html");
    } else{
        echo 'Пароль не действителен.';
    }
    header("Location: /register/page_login.php ");
    exit;
}else{
    $_SESSION["danger"] = "Этот адрес уже занят";
    header("Location: /register/page_login.php");

}
?>