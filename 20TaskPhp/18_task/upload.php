<?php

//$_POST["image"];
//var_dump($_FILES["image"]);
//echo pathinfo($_FILES["image"]);
//echo uniqid() . "." . "jpg";
//$uniqidString = uniqid();

for ($i = 0; $i < count($_FILES['image']['name']); $i++){
    return upload_file($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i]);
}

function upload_file($filename, $tmp_name){

    $result = pathinfo($filename);

    $filename = uniqid() . "." . $result["extension"];

    $pdo = new PDO('mysql:host=localhost;dbname=my_table','root','');
    $sql = "INSERT INTO `img_base`(name) VALUES (:name)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['name' => $filename]);

    move_uploaded_file($tmp_name, 'uploads_img/' . $filename);

};

upload_file();



header('Location: /20TaskPhp/18_task/18_task.php');