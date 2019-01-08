<?php
class Product{
    var $table = 'products';

    static function where($col, $val){
        $model =  new static(); // <=> new Product
        // tao ra thuoc tinh moi querybuilder
        $model->queryBuilder = "select * from " 
                                . $model->table . " "
                                . "where $col = '$val'";
        // tra ve doi tuong vua tao
        return $model;
    }

    function get(){
        // tao ra ket noi db
        $conn = new PDO();
        // chua bi cau sql tu querybuilder 
        $stmt = $conn->prepare($this->queryBuilder);
        // thuc thi
        $stmt->execute();
        // tra ve toan bo ket qua
        return $stmt->fetchAll();
    }
}

$macbook = Product::where('name', 'nghia') // lay ra 1 thuc the thuoc loai product co san querybuilder
                    ->get(); // thuc thi cau lenh da chuan bi o tren voi csdl
var_dump($macbook);




?>