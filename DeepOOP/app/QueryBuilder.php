<?php
namespace App;

use Aura\SqlQuery\QueryFactory;

use PDO;

class QueryBuilder{
    private $pdo, $queryFactory;

    public function __construct(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=app_3;", "root", "");
        $this->queryFactory = new QueryFactory('mysql');
    }
    public function getALL($table){
        $select = $this->queryFactory->newSelect();
        $select->cols(['*'])->from($table);

        $sql = $select->getStatement();
        $sth = $this->pdo->prepare($sql);
        $sth->execute($select->getBindValues());
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        var_dump($result);
    }
}


