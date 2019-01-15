<?php
$url = isset($_GET['url']) ? $_GET['url'] : '/';

require_once "./controllers/HomeController.php";
switch($url){
    case '/':
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    
    case 'detail':
        $ctr = new HomeController();
        echo $ctr->detailProduct();
        break;
    default:
        echo "404 notfound!";
        break;

}

?>