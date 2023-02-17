<?php

include "function.php";
$db = include "DataBase/start.php";
$posts = $db->getAll("posts");

$db->create('posts',
    $data = [
        "title" => $_POST['title'],
    ]
);
header("Location: index.php");

