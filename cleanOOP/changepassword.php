<?php
session_start();

include_once 'init.php';

$user = new User;

$validate = new Validate();

$validate->check($_POST, [
    'current_password' => ['required' => true, ' min' => 6],
    'new_password' => ['required' => true, 'min' => 6],
    'new_password_again' => ['required' => true, 'min' => 6, 'matches' => 'new_password'],
]);

if (Input::exists()){
    if (Token::check(Input::get('token'))){
        if ($validate->passed()){
            if (password_verify(Input::get('current_password'), $user->data()->password)){
                $user->update(['password' => password_hash(Input::get('new_password'), PASSWORD_DEFAULT)]);
                Session::flash('success', 'Пароль обновлён.');
                Redirect::to('index.php');
            }else{
                echo 'Пароль не верный';
            }
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
        <label for="username">Введите пароль</label>
        <input type="text" name="current_password" id="username" value="">
    </div>
    <div class="field">
        <label for="username">Новый пароль</label>
        <input type="text" name="new_password" id="username" value="">
    </div>
    <div class="field">
        <label for="username">Повторите пароль</label>
        <input type="text" name="new_password_again" id="username" value="">
    </div>

    <div class="field">
        <button type="submit">Submit</button>
    </div>

    <input type="hidden2" name="token" value="<?php echo Token::generate();?>">
</form>