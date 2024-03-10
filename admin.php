<?php
    include("vendor/autoload.php");

    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;
    use Helpers\HTTP;
    use Helpers\Auth;

    $table = new UsersTable(new MySQL);
    $users = $table->getAll();

    $auth = Auth::check();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
</head>

<body>
    <nav class="navbar bg-dark navbar-expand">
        <div class="container">
            <a href="#" class="navbar-brand text-white">Admin</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="profile.php" class="nav-link text-white"><b><?=  $auth->name ?></b></a>
                </li>
                <li class="nav-item">
                    <a href="_actions/logout.php" class="nav-link text-danger">Logout</a>
                </li>
            </ul>
        </div>

    </nav><br>
    <div class="container">
        <!-- <a class="btn btn-md btn-outline-info" href="">Back</a><br><br> -->
        <table class="table table-striped table-brodered table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Action</th>

            </tr>
            <?php foreach($users as $user):?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->name ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->phone ?></td>
                <td>
                    <?php if($user->role_id == 3) : ?>
                    <span class="badge bg-success">
                        <?= $user->role ?>
                    </span>
                    <?php elseif($user->role_id == 2) : ?>
                    <span class="badge bg-primary">
                        <?= $user->role ?>
                    </span>
                    <?php else : ?>
                    <span class="badge bg-secondary">
                        <?= $user->role ?>
                    </span>
                    <?php endif ?>
                </td>
                <td>
                    <div class="btn-group">
                        <?php if($auth->role_id == 3) :?>
                        <a href="#" class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
                            Role
                        </a>
                        <div class="dropdown-menu">

                            <a href="_actions/role.php?id=<?= $user->id ?>&role=1" class="dropdown-item">User</a>

                            <a href="_actions/role.php?id=<?= $user->id ?>&role=2" class="dropdown-item">Manager</a>

                            <a href="_actions/role.php?id=<?= $user->id ?>&role=3" class="dropdown-item">Admin</a>

                        </div>
                        <?php endif ?>

                        <?php if($auth->role_id >= 2) : ?>
                        <?php if($user->suspended): ?>
                        <a href="_actions/unsuspend.php?id=<?= $user->id ?>" class="btn btn-sm
                                btn-outline-warning">Unban</a>
                        <?php else: ?>
                        <a href="_actions/suspend.php?id=<?= $user->id ?>" class="btn btn-sm
                                btn-outline-warning">Ban</a>
                        <?php endif ?>
                        <?php endif ?>
                        <?php if($auth->role_id == 3) : ?>
                        <a href="_actions/delete.php?id=<?= $user->id ?>" class="btn btn-sm
                                btn-outline-danger">Delete</a>
                        <?php endif ?>
                    </div>
                </td>

                <?php endforeach; ?>
            <tr>
        </table>
    </div>
</body>

</html>