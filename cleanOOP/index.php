<?php
session_start();
include_once 'init.php';

//var_dump(Config::get('session.user_session'));
//var_dump($_SESSION);





$user = new User();
//$anotherUser = new User();
//header("Location: register.php");
//Redirect::to("register.php");
if ($user->isLoggedIn()) {
    echo "Привет " . $user->data()->username;
    echo '<a href="logout.php">Выйти</a>';
} else {
    echo "<a href='login.php'>login</a> or <a href='register.php'>register</a><br>";
}
?>

<!--<div>-->
<!--    <a href="login.php">login</a> or <a href="register.php">register</a><br>-->
<!--    <a href="logout.php">Выйти</a>-->
<!--</div>-->
