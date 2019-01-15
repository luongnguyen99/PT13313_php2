<?php
class BaseModel
{
    function __construct(){
        $this->connect = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8",
                                    "root", "123456");
    }

    public static function where($col, $op = '=', $val){
        $model = new static();
        $model->queryBuilder = "select * from " . $model->table 
                                    . " where $col $op '$val'";
        return $model;
    }

    public function get(){
        $stmt = $this->connect->prepare($this->queryBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
    }
}

?>