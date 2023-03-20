<?php
// Start a Session
if( !session_id() ) {
    session_start();
}

require_once "../vendor/autoload.php";
//use App\QueryBuilder;
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

\Tamtamchik\SimpleFlash\flash()->message("test");

$templates = new League\Plates\Engine('../app/view');

//echo $templates->render('homepage', ['name' => 'Among']);


//echo 123;

//d($templates);
