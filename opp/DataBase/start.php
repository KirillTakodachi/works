<?php
$config = include "config.php";
include "DataBase/queryBuilder.php";
include "DataBase/make.php";

return new QueryBuilder(Connection::Make($config["database"]));