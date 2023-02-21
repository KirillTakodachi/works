<?php

include_once 'DataBase.php';

$users = DataBase::getInstance()->query('SELECT * FROM users');
//var_dump($users);
if ($users->error()){
    echo "errrrrrrrrrrrrrrrrrrrrror";
}else{
    foreach ($users->result() as $user){
        echo $user['id'] . $user['name'] .'<br>';
    }
}
