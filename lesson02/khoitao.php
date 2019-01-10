<?php
class BaseModel {
    // thuc thi 1 so lenh ngay lap tuc khi thuc the dc tao ra
    // gan gia tri cho danh sach thuoc tinh 
    function __construct(){
        $this->connect = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8",
                                    "root", "123456");
    }

    static function where($col, $ope, $val){
        $model =  new static(); // <=> new Product
        // tao ra thuoc tinh moi querybuilder
        $model->queryBuilder = "select * from " 
                                . $model->table . " "
                                . "where $col $ope '$val'";
        // tra ve doi tuong vua tao
        return $model;
    }

    function andWhere($col, $ope, $val){
        // tao ra thuoc tinh moi querybuilder
        $this->queryBuilder .= " and $col $ope '$val'";
        // tra ve doi tuong vua tao
        return $this;
    }

    function orWhere($col, $ope, $val){
        // tao ra thuoc tinh moi querybuilder
        $this->queryBuilder .= " or $col $ope '$val'";
        // tra ve doi tuong vua tao
        return $this;
    }

    function get(){
        // chua bi cau sql tu querybuilder 
        $stmt = $this->connect->prepare($this->queryBuilder);
        // thuc thi
        $stmt->execute();
        // tra ve toan bo ket qua
        return $stmt->fetchAll();
    }
}
class Product extends BaseModel{
    var $table = 'products';
    
}
class User extends BaseModel{
    var $table = 'users';
    
}
$listPros = User::where('id', '>', "1")
                    ->get();

echo "<pre>";
var_dump($listPros);


?>