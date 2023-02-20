<?php
include "function.php";
$db = include "DataBase/start.php";
$post = $db->delete("posts", $_GET["id"]);
header("Location: index_view.php");
?>