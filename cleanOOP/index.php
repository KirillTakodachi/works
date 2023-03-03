<?php
session_start();
include_once 'init.php';

var_dump(Config::get('session.user_session'));
//var_dump($_SESSION);

$user = new User;
$anotherUser = new User(13);

//if ($user->isLoggedIn()){
//
//}else{
//
//}
