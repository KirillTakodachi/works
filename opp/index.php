<?php

include "function.php";
$db = include "DataBase/start.php";
$posts = $db->getAllPosts();
//dd($posts);

include "index_view.php";