<?php

include_once 'vendor/autoload.php';
include_once 'app/QueryBuilder.php';

use App\QueryBuilder;

$db = new QueryBuilder();
$result = $db->getALL('posts');
var_dump($result);

