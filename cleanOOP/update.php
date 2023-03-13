<?php

include_once 'init.php';

$user = new User;

$validate = new Validate();

$validate->check($_POST, [
    'username' => [
        'required' => true,
        'min' => 2,
    ]
]);


if (Input::exists()){
    if (Token::check(Input::get('token'))){
        if ($validate->passed()){
            $user->update([
                'username' => Input::get('username')]);
            Redirect::to('index.php');
        }else{
            foreach ($validate->errors() as $error) {
                echo $error . '<br>';
            }
        }
    }
}
?>

<form action="" method="post">
    <div class="field">
        <label for="username">Имя пользователя</label>
        <input type="text" name="username" id="username" value="<?php echo $user->data()->username;?>">
    </div>

    <div class="field">
        <button type="submit">Submit</button>
    </div>

    <input type="hidden2" name="token" value="<?php echo Token::generate();?>">
</form>
