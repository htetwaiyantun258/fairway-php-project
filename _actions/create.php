<?php

include("../vendor/autoload.php");

use Helpers\Auth;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$table = new UsersTable(new MySQL);
$user_add = $table->insert([
    "name" => $_POST['name'],
    "email" =>  $_POST['email'],
    "phone" => $_POST['phone'],
    "address" => $_POST['address'],
    "password" => $_POST['password']
]);

if($user_add){
    echo "success";
    HTTP::redirect("/index.php","register=success");
}else{
    echo "fail";
}