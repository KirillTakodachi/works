<?php

include_once "../function.php";

$routes = [
    "/opp/homepage" => 'index_view.php',
    "/opp/about" => 'function/about.php',
];
$route = $_SERVER['REQUEST_URI'];

//dd($route);
var_dump($route);

//echo $route;

if (array_key_exists($route, $routes)){
    include  __DIR__ . '/../' . $routes[$route];
    exit;
}else{
    echo(404);
};
include "../index_view.php";