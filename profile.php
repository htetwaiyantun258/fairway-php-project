<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('location: index.php');
        exit();

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 ">
        <h1 class="mb-3 ">Hary Yan</h1>
        <ul class="list-group" style="max-width: 400px;">
            <li class="list-group-item">
                <b>Email</b> hary@gmail.com
            </li>
            <li class="list-group-item">
                <b>Phone :</b> 08 898 567 234
            </li>
            <li class="list-group-item">
                <b>Address</b> budar Street
            </li>
        </ul>
        <br>
        <a href="_actions/logout.php">Logout</a>
    </div>
</body>

</html>