<?php
//начало сессии
if( !session_id() ) {
    session_start();
}
require_once "../vendor/autoload.php";


$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector  $r){
   $r->addRoute('GET', '/DeepOOP/home', ['App\controllers\HomeController', 'index']);
    $r->addRoute('GET', '/DeepOOP/about', ['App\controllers\HomeController', 'about']);
});


$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];


if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);


$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

d($routeInfo);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        $controller = new $handler[0];

        call_user_func([$controller, $handler[1]], $vars);


        break;
}


$templates = new League\Plates\Engine('../app/view');

//require_once "../vendor/autoload.php";
//
//if (true){
//    \Tamtamchik\SimpleFlash\flash()->message('hot!');
//}

//echo \Tamtamchik\SimpleFlash\flash()->display();

//$db = new QueryBuilder();
//
//
//$result = $db->getAll('posts');
//
////var_dump($result);
//$db->delete(9,'posts');
//echo 'index';
//echo '<pre>';
//var_dump($_SERVER);
//echo '</pre>';

// Create new Plates instance

//if ($_SERVER['REQUEST_URI'] == '/exercise/deepOOP/public/home'){
//    require 'app/controllers/homepage.php';
//}
//exit;

//\Tamtamchik\SimpleFlash\flash()->message("test");


//echo $templates->render('homepage', ['name' => 'Among']);


//echo 123;

//d($templates);
