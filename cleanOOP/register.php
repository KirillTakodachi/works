<?php
session_start();
include_once "classes/Config.php";
include_once "classes/DataBase.php";
include_once "classes/Validate.php";
include_once "classes/Input.php";
include_once "classes/Token.php";
include_once "classes/Session.php";
include_once "classes/User.php";
include_once "classes/Redirect.php";

//Database::getInstance()->insert('users', [
//	'username' => 'Marlin',
//	'password' => 'pass',
//]);
//Database::getInstance()->update('users', 5, [
//	'username' => 'Marlin2',
//	'password' => 'pass2',
//]);

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
    ]
];


$users = Database::getInstance()->get('users', ['username', '=', 'Marlin']);
//Database::getInstance()->delete('users', ['username', '=', 'name2']);


//if ($users->error()) {
//	echo "This Error";
//} else {
//	foreach ($users->result() as $user) {
//		echo $user["id"] . ". " . $user["username"] . "<br>";
//		//		echo $user . "<br>";
//	}
//}


if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, [
            'username'       => [
                'required' => true,
                'min'      => 2,
                'max'      => 15,
                'unique'   => 'users',
            ],
            'email'       => [
                'required' => true,
                'email' => true,
                'unique'   => 'users',
            ],
            'password'       => [
                'required' => true,
                'min'      => 3,
            ],
            'password_again' => [
                'required' => true,
                'matches'  => 'password',
            ],
        ]);

        //	var_dump($validation->errors());

        if ($validation->passed()) {
            //DatBase
            $user = new User;

            $user->create([
                'username' => Input::get('username'),
                'password' => password_hash(Input::get('password'), PASSWORD_DEFAULT),
                'email' => Input::get('email'),
            ]);


            Session::flash('success', 'register success');
//            header('Location: test.php');
//            Redirect::to('test.php');
//            Redirect::to(404);

        } else {
            foreach ($validation->errors() as $error) {
                echo $error . '<br>';
            }
        }
    }

}

?>


<form action="" method="post">
    <?php //echo Session::flash('success'); ?>
    <div class="field">
        <label for="username">Username</label>
        <input type="text" name="username" value="<?php echo Input::get('username'); ?>">
    </div>
    <div class="field">
        <label for="email">Email</label>
        <input type="text" name="email" value="<?php echo Input::get('email'); ?>">
    </div>
    <div class="field">
        <label for="password">Password</label>
        <input type="text" name="password">
    </div>
    <div class="field">
        <label for="password_again">Password again</label>
        <input type="text" name="password_again">
    </div>
    <input type="hidden1" name="token" value="<?php echo Token::generate() ?>">

    <div class="field">
        <button type="submit">Submit</button>
    </div>
</form>