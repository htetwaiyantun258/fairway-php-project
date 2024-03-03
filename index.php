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
        <h3 class="mb-3">Login</h3>
        <?php if(isset($_GET["incorrect"])) :?>
        <div class="alert alert-warning">
            Login Fail
        </div>
        <?php endif ?>

        <?php if(isset($_GET["login"])) :?>
        <div class="alert alert-info">
            Account created, please login
        </div>
        <?php endif?>

        <form action="_actions/login.php" method="post">
            <input type="email" name="email" class="form-control mb-2" placeholder="Email" require>
            <input type="password" name="password" class="form-control mb-2" placeholder="Password" require>
            <button class="w-100 btn btn-lg btn-primary">Login</button>
        </form>
        <br>
        <a href="register.php">Register</a>
    </div>
</body>

</html>