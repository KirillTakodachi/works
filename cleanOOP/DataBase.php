<?php
class DataBase{
 private static $instance = null ;
 private $pdo,$query, $error = false, $count, $result;

 private function __construct(){
     try {
         $this->pdo =  new PDO('mysql:host=localhost;dbname=marlin_clean_oop','root','');
     } catch(PDOException $exception) {
         die($exception->getMessage());
     }
}
    public static function getInstance(){
     if (!isset(self::$instance)){
         self::$instance = new DataBase();
     }
     return self::$instance;
    }

    public function query($sql){
     $this->error;
     $this->query = $this->pdo->prepare($sql);
     if (!$this->query->execute()){
         $this->error = true;
     }else{
         $this->result = $this->query->fetchAll(PDO::FETCH_OBJ);
         $this->count = $this->query->rowCount();
     }
     return $this;
//     $query->execute();
//     $result = $query->fetchALL(PDO::FETCH_ASSOC);
//     return $result;
}
    public function error(){
     return $this->error;
    }
    public function count(){
     return $this->count;
    }
    public function result(){
     return $this->result;
    }
}