<?php

include_once 'DataBase.php';

$users = DataBase::getInstance()->query('SELECT * FROM users');
//var_dump($users);
if ($users->error()){
    echo "error";
}else{
    foreach ($users->results() as $user){
        echo  $user['id'] . " " . $user["name"] .'<br>';
    }
}
