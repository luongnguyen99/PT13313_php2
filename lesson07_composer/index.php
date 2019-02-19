<?php
$url = isset($_GET['url']) ? $_GET['url'] : '/';
$baseUrl = "http://localhost/PT13313/lesson03/";
require_once './vendor/autoload.php';

use App\Controllers\HomeController;

switch($url){
    case '/':
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    
    default:
        echo "404 notfound!";
        break;

}

?>