<?php

require_once './models/Product.php';
require_once './models/Category.php';
class ProductController
{
    public function index(){
        return "ProductController->index()";
    }

    public function remove(){
        $id = $_GET['id'];

        Product::delete($id);

        header('location: ./');
    }

    public function addForm(){
        global $baseUrl;
        $model = new Product();
        $cates = Category::all();
        include_once './views/product/addForm.php';
    }

    public function editForm(){
        global $baseUrl;
        $id = $_GET['id'];
        
        $model = Product::find($id);
        $cates = Category::all();
        include_once './views/product/editForm.php';
    }

    public function saveAdd(){
        $model = new Product();
        foreach($_POST as $key => $val){
            $model->{$key} = $val;
        }
        $image = $_FILES['image'];
        // upload ảnh
        if($image['size'] > 0){
            $filename = "images/products/" . uniqid() . "-" . $image['name'];
            move_uploaded_file($image['tmp_name'], "public/" .$filename);
            $model->image = $filename;
        }
        $colQuery = "";
        $valQuery = "";
        foreach($model->cols as $co){
            $colQuery .= "$co, ";
            $valQuery .= "'". $model->{$co} ."', ";
        }

        $colQuery = rtrim($colQuery, ", ");
        $valQuery = rtrim($valQuery, ", ");
        
        $model->queryBuilder =  "insert into " . $model->table 
                    . " ($colQuery)"
                    . " values "
                    . " ( $valQuery )";

        // var_dump($model->queryBuilder);die;
        $model->exeQuery();
        header('location: ./');
        
    }

    public function saveEdit(){
        $model = Product::find($_POST['id']);
        foreach($_POST as $key => $val){
            $model->{$key} = $val;
        }

        $image = $_FILES['image'];
        // upload ảnh
        if($image['size'] > 0){
            $filename = "images/products/" . uniqid() . "-" . $image['name'];
            move_uploaded_file($image['tmp_name'], "public/" .$filename);
            $model->image = $filename;
        }

        
        $setQuery = "";
        foreach($model->cols as $co){
            $setQuery .= $co . " = '" . $model->{$co} . "', ";
        }
        $setQuery = rtrim($setQuery, ", ");

        $model->queryBuilder =  "update " . $model->table 
                    . " set $setQuery"
                    . " where id = " . $model->id;
        $model->exeQuery();
        header('location: ./');
        
    }
    
}



?>