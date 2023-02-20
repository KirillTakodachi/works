<?php
include_once "function.php";
$db = include_once "DataBase/start.php";
include_once "index_view.php";
$posts = $db->getAll("posts");