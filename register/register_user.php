<?php
    session_start();
    require ('fanction.php');
    $email = $_POST["email"];
    $password = $_POST["password"];

    $pdo = connect_to_db();
    $sql = "SELECT * FROM base_user WHERE email=:email";
//    $sql = "SELECT * FROM base_user WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute(["email"=>$email]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);


    if (!empty($user)){
        $_SESSION["danger"] = "Этот адрес уже занят";
        header("Location: /register/page_register.php ");
        exit;
    }else{
        $_SESSION["success"] = "Адресс зарегестрирован";
        header("Location: /register/page_login.php ");

    }

    $sql = "INSERT INTO base_user (email , password) VALUES (:email , :password)";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        "email"=>$email,
        "password"=>$password,
    ]);

?>