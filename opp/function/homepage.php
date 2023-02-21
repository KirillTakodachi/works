<?php

include_once "../function.php";
$db = include "../DataBase/start.php";
$posts = $db->getAll("posts");

include_once "../index_view.php";