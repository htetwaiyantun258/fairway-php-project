<?php

include("vendor/autoload.php");

use Helpers\Auth;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$table = new UsersTable(new MySQL);
// $id = $table->insert([
//     "name" => "hary yan",
//     "email" => "hary@gmail.com",
//     "phone" => "09673 567 234",
//     "address" => "Some address",
//     "password" => "hary123",
// ]);
// echo $id;

$find_user = $table->find("hary@gmail.com","hary123");
echo $find_user->email;