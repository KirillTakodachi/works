<?php
include "function.php";
$db = include "DataBase/start.php";
$id = $_GET['id'];
$posts = $db->getOne("posts", $id);
var_dump($id);
?>

<h1><?php echo $posts['title']?></h1>
