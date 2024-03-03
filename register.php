<?php
include("vendor/autoload.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    .wrap {
        width: 100%;
        max-width: 400px;
        margin: 40px auto;
    }
    </style>
</head>

<body class="text-center">
    <div class="wrap">
        <h3 class="mb-3">Register</h3>
        <?php if(isset($_GET["incorrect"])) :?>
        <div class="alert alert-warning">
            Register Fail
        </div>
        <?php endif?>
        <form action="_actions/create.php" method="post">
            <input type="text" name="name" class="form-control mb-2" placeholder="name" require>
            <input type="email" name="email" class="form-control mb-2" placeholder="Email" require>
            <input type="phone" name="phone" class="form-control mb-2" placeholder="Phone" require>
            <textarea name="address" id="" require class="form-control mb-2"></textarea>
            <input type="password" name="password" class="form-control mb-2" placeholder="Password" require>
            <button class="w-100 btn btn-lg btn-primary">Register</button>
        </form>
        <br>
        <a href="index.php">Login</a>
    </div>
</body>

</html>