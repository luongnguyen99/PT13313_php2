<?php

$username = $_POST['username'];
$password = $_POST['password'];
$hashPwd = password_hash($password, PASSWORD_DEFAULT);
var_dump($username, $password, $hashPwd);
$sqlQuery = "insert into users (username, password)
            values ('$username', '$hashPwd')";

