<?php
session_start();
include_once 'init.php';

$user = new User;
$user->logout();

Redirect::to('index.php');