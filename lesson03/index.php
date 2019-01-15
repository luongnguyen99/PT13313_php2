<?php
$url = isset($_GET['url']) ? $_GET['url'] : '/';

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
        
    default:
        echo "404 notfound!";
        break;

}

?>