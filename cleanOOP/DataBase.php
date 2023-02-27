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

    public function query($sql, $params = []){

     $this->error = false;
     $this->query = $this->pdo->prepare($sql);

     if(count($params)){
         $i = 1;
         foreach ($params as $param) {
             $this->query->bindValue($i, $param);
             $i++;
         }
     }

     if (!$this->query->execute()){
         $this->error = true;
     }else{
         $this->result = $this->query->fetchAll(PDO::FETCH_ASSOC);
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
    public function results(){
     return $this->result;
    }

    public function get($table, $where=[]){
     if(count($where) === 3){

         $operators = ['=','>','<','>=','<='];

         $fied = $where[0];
         $operator = $where[1];
         $value = $where[2];

         if(in_array($operator, $operators)){
             $sql = "SELECT * FROM {$table} WHERE {$fied} {$operator} ?";
//             var_dump($sql);die;
             if (!$this->query($sql, [$value])->error()) {
                 return $this;
             }
         }
     }
     return false;
    }

}