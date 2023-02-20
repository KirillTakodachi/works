<?php
include ("function.php");
$db = include "DataBase/start.php";
//$id = $_GET["id"];
$post = $db->update("posts",$_POST, $_GET["id"]);
//var_dump($_GET);
header("Location: index_view.php");
?>

