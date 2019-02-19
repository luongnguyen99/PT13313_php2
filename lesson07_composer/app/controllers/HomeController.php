<?php
namespace App\Controllers;
use App\Models\Product;
class HomeController
{
    public function index(){
        global $baseUrl;
        $data = Product::all();
        var_dump($data);
    }
}

?>