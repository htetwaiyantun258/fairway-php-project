<?php

session_start();
include("../vendor/autoload.php");

use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$table = new UsersTable(new MySQL);
$find_user = $table->find($_POST['email'],$_POST['password']);

if($find_user){
    $_SESSION['user'] = $find_user;
    HTTP::redirect("/profile.php", "login=success");
    
  
}else{
    HTTP::redirect("/index.php","login=fail");
}