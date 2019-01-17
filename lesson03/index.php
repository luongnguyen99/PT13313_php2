<?php
$url = isset($_GET['url']) ? $_GET['url'] : '/';
$baseUrl = "http://localhost/PT13313/lesson03/";

require_once "./controllers/HomeController.php";
require_once "./controllers/ProductController.php";
switch($url){
    case '/':
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    
    case 'detail':
        $ctr = new ProductController();
        echo $ctr->index();
        break;
    
    case 'product-remove':
        $ctr = new ProductController();
        echo $ctr->remove();
        break;
    
    case 'product-add':
        $ctr = new ProductController();
        echo $ctr->addForm();
        break;
    
    case 'product-save-add':
        $ctr = new ProductController();
        echo $ctr->saveAdd();
        break;
    default:
        echo "404 notfound!";
        break;

}

?>