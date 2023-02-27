<?php

include_once 'DataBase.php';

//$users = DataBase::getInstance()->query("SELECT * FROM users WHERE name IN (?, ?)",['kirik', 'Artur']);
$users = DataBase::getInstance()->get('user', ['name', '=', 'Kirik']);
//var_dump($users);
if ($users->error()){
    echo "error";
}else{
    foreach ($users->results() as $user){
        echo  $user['id'] . " " . $user["name"] .'<br>';
    }
}
