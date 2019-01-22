<?php
require_once './models/Product.php';
require_once './models/Category.php';
class HomeController
{
    public function index(){
        global $baseUrl;
        $products = Product::all();
        // echo "<pre>";

        // var_dump($products);die;
        include_once './views/homepage.php';
    }

    public function detailProduct(){
        return "HomeController->detailProduct()";
    }
}

?>