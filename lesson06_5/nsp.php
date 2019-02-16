<?php
// không đc phép tạo ra 2 hàm/ 2 class có tên trùng nhau
require './User2.php';
require './User1.php';

use Mysql\User;
use MongoDb\User as MongoUser;
$u = new User();

var_dump($u);


$x = new MongoUser();

var_dump($x);
?>