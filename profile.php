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
    <div class="container" style="max-width: 800px;">
        <h1 class="mb-3 ">Hary Yan</h1>
        <?php if(isset($_GET['error'])): ?>
        <div class="alert alert-warning">Cannot upload file</div>
        <?php endif ?>

        <?php if(file_exists("_actions/photos/profile.jpg")) : ?>
        <img src="_actions/photos/profile.jpg" class="img-thumbnail" width="200" height="200">
        <?php endif ?>

        <form action="_actions/upload.php" method="post" enctype="multipart/form-data" class="input-group my-4">
            <input type="file" name="photo" class="form-control" id="">
            <button class="btn btn-secondary">Upload</button>
        </form>

        <ul class="list-group">
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