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
    echo Session::flash('success');
    echo '<br>';
    echo "Привет " . $user->data()->username;
    echo '<p><a href="update.php">Изменить профиль</a></p>';
    echo '<p><a href="changepassword.php">Изменить пароль</a></p>';
    echo '<p><a href="logout.php">Выйти</a></p>'; //<p></p>

} else {
    echo "<p><a href='login.php'>войти</a> или <a href='register.php'>Зарегестрироваться</a><br></p>";
}
?>

<!--<div>-->
<!--    <a href="login.php">login</a> or <a href="register.php">register</a><br>-->
<!--    <a href="logout.php">Выйти</a>-->
<!--</div>-->
