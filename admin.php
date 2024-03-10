<?php
    include("vendor/autoload.php");

    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;

    $table = new UsersTable(new MySQL);
    $users = $table->getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar bg-dark navbar-expand">
        <div class="container">
            <a href="#" class="navbar-brand text-white">Admin</a>
        </div>
    </nav>
    <div class="container">
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
                        <a href="_actions/delete.php?id=<?= $user->id ?>" class="btn btn-sm
                            btn-outline-danger">Delete</a>
                    </div>
                </td>

                <?php endforeach; ?>
            <tr>
        </table>
    </div>
</body>

</html>