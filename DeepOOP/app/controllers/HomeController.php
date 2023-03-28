<?php

namespace App\controllers;

use App\QueryBuilder;
use Aura\SqlQuery\Exception;
use League\Plates\Engine;

class HomeController
{
    private $templates;

    private function  __construct(){
        $this->templates = new Engine('../app/views');
    }

    public function index(){

        echo $this->templates->render('homepage', ['name' => 'Kirill']);
    }

    public function about(){

        echo $this->templates->render('about', ['name' => 'Kirill about page']);
    }
}