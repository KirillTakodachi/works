<?php

class Redirect {
    public static function to($location = null){
//        var_dump($location);die;
        if ($location){
                if (is_numeric($location)) {
                    switch ($location) {
                    case 404:
                    header("HTTP/1.0 404 Not found.");
//                    include_once "../includes/errors/404.php";
                    exit();
                    break;

                    default:
                        break;

                }
            }
                header("Location: ". $location);
        }
    }
}