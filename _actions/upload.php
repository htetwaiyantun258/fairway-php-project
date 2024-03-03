<?php

include("../vendor/autoload.php");

use Helpers\Auth;
use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$user = Auth::check();

$name = $_FILES['photo']['name'];
$tmp_file = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

if( $type == "image/jpeg" || $type == "image/png"){
    move_uploaded_file($tmp_file , "photos/$name");
    $user->photo = $name ;

    $table = new UsersTable(new MySQL);
    $table->updatePhoto($user->id, $name);
    HTTP::redirect("/profile.php");

}else{
    HTTP::redirect("/profile.php", "error=type");
   
}