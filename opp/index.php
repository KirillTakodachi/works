<?php

include "function.php";
include "DataBase/queryBuilder.php";
include "DataBase/make.php";


$pdo = Connection::Make();


$db = new QueryBuilder($pdo);
$posts = $db->getAllPosts();
//dd($posts);

include "index_view.php";