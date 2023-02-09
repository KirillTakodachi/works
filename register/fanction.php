<?php
// Подключение к БД
// $name = имя таблицы
// $username = имя пользователя
// $password_db = пароль от бд(если есть то писать)
function connect_to_db(){
    $pdo = new PDO("mysql:host=localhost;dbname=my_table","root", "");
    return $pdo;
};
//connect_to_db("pdo" ,"my_table", "root");

//выбор того что хотим получить
//$name_db = имя таблицы в БД
//$value = что хотим получить
function choice($name){
    "SELECT * FROM base_user WHERE $name=:$name";
}



//получение эл. аддреса из бд(так же можно получить и другие значения)
//$value = что хотим получить
//$user = название переменной к которой будем одращаться за данными
function get_user_by_value($value){
    $pdo = connect_to_db();
    $sql = choice();
    $statement = $pdo->prepare($sql);
    $statement->execute(["$value"=>$value]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;
};
//get_user_by_value(email, user);

//Добавление в БД
//$name = название таблицы
//$key = что добовляем
//$value = куда добовляем (обязательно прописывать в виде :(значение).)
function add_user($key,$value){
    "INSERT INTO base_user ($key) VALUES ($value)";
}
//    add_user("base_user","email, password",":email, :password");


//создаёт флэш сообщения
//$name = название сообщения
//$sub = сообщение которое хотим передать
function flesh_sub($name,$sub){
    $_SESSION["$name"] = "$sub";
}
//flesh_sub("danger","Этот аддрес уже занят.");



// пересылает к указанному файлу
//$name = прописываем путь к файлу
function forwarding($name){
    header("Location: $name");
    exit;
}
//forwarding("/register/page_login.php");

?>