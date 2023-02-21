<?php
$config = include_once "../DataBase/config.php";
include_once "../DataBase/queryBuilder.php";
include_once "../DataBase/make.php";

return new QueryBuilder(Connection::make($config["database"]));
