<?php
session_start();
$tmp_file = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

if( $type == "image/jpeg" || $type == "image/png"){
    move_uploaded_file($tmp_file , "photos/profile.jpg");
    header("location: ../profile.php");

}else{
    header("location: ../profile.php?error=type");
}