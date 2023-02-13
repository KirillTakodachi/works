<?php
session_start();
var_dump($_FILES);

function uploadimg($fileName,$tmp){
    //1 название
    $imgName = $fileName;
    $imgNameInfo = pathinfo($imgName);
    $imgNameType = $imgNameInfo['extension'];
    $newNameImg = uniqid() . "." . $imgNameType; //4124qwrqwr.jpg
    //2 сохранить
    $result = move_uploaded_file($tmp,'uploads/' . $newNameImg );
    if ($result){
        $result = $newNameImg;
    }
    return $result;
}
$arrLiseFile = [];
$countArrayFiles = count($_FILES['file']['name']);
var_dump($countArrayFiles);
for ($i = 0; $i < $countArrayFiles; $i++){
    $fileName = $_FILES['file']['name'][$i];
    $tmpName = $_FILES['file']['tmp_name'][$i];
    $arrListFile[]=[uploadimg($fileName,$tmpName), $fileName];
};

var_dump($arrListFile);
$gallery = json_encode($arrListFile);
$gallery = "123";
function connectBD(){
  $options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
  $pdo = new PDO("mysql:host=localhost;dbname=my_table;","root","", $options);
  return $pdo;
};

$pdo = connectBD();
$sql = "INSERT INTO gallery ('images') VALUES (:images)";
$statemet = $pdo->prepare($sql);
$statemet->execute(['images'=> $gallery]);
$id = $pdo->lastInsertId();
$_SESSION['galleryID']=$id;

