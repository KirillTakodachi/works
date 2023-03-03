<?php

include_once "classes/Config.php";
include_once "classes/DataBase.php";
include_once "classes/Validate.php";
include_once "classes/Input.php";
include_once "classes/Token.php";
include_once "classes/Session.php";
include_once "classes/User.php";
include_once "classes/Redirect.php";


$GLOBALS["config"] = [
    'mysql'   => [
        "host"      => "localhost",
        "username"  => "root",
        "password"  => "",
        "database"  => "marlin_clean_oop",
        "something" => [
            "no" => [
                "foo" => [
                    "bar" => "baz"
                ]
            ]
        ]
    ],
    'session' => [
        'token_name' => 'token',
        'user_session' => 'user',
    ]
];

?>