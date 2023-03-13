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

    if ($user->hasPermissions('moderator')){
        echo "<br>";
//        echo 'Ты Одмен';
        echo "<img style='height: 100px; width: 100px;' src='https://topwar.ru/uploads/posts/2019-11/1572761585_udalil_moder-156295.jpeg'>";
        echo "<br>";
        echo 'Ты Модер';
        echo '<p><a href="update.php">Изменить профиль</a></p>';
        echo '<p><a href="changepassword.php">Изменить пароль</a></p>';
        echo '<p><a href="logout.php">Выйти</a></p>';
    }//<p></p>

} else {
    echo "<p><a href='login.php'>войти</a> или <a href='register.php'>Зарегестрироваться</a><br></p>";
}

?>

<!--<div>-->
<!--    <a href="login.php">login</a> or <a href="register.php">register</a><br>-->
<!--    <a href="logout.php">Выйти</a>-->
<!--</div>-->
