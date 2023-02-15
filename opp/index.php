<?php

include "function.php";
$db = include "DataBase/start.php";
$posts = $db->getAll("posts");
//dd($posts);

include "index_view.php";