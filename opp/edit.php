<?php

include "function.php";
$db = include "DataBase/start.php";

$id = $_GET['id'];
$posts = $db->update("posts", $_POST, $id);
?>

