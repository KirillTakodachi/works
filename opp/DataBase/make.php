<?php
class Connection{
    public static function make($config){
        $pdo = new PDO("{$config['connection_db']};dbname={$config['dbname']};", "{$config['username']}", "{$config['password']}");
        return $pdo;
    }
}