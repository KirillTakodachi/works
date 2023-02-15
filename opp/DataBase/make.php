<?php

class Connection{
    public static function Make($config){
        $pdo = new PDO("{$config['connection_db']};dbname={$config['dbname']};", "{$config['username']}", "{$config['password']}");
        return $pdo;
    }
}