<?php

include("vendor/autoload.php");

use Faker\Factory as Faker;
use Helpers\Auth;
use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$faker = Faker::create();
echo $faker->name();
echo "<br>";
echo $faker->phoneNumber();
echo "<br>";


Auth::check();
HTTP::redirect();

$db = new MySQL;
$db->connect();

$table = new UsersTable;
$table->insert();