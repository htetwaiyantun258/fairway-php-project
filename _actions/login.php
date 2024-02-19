<?php

session_start();
$email = $_POST['email'];
$password = $_POST['password'];

if($email === "hary@gmail.com" and $password === "hary123"){
    $_SESSION['user'] = ['username' => "hary"];
    header("location: ../profile.php");
}else{
    header("location: ../index.php?incorrect");
}