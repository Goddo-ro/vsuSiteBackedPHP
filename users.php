<?php
    session_start();

    require_once 'db/connection.php';

    $id = $_SESSION['user']['id'];

    $users = mysqli_query($connect, "SELECT * FROM `users` WHERE id != '$id'");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="static/css/index.css" rel="stylesheet">
    <link href="static/css/store.css" rel="stylesheet">
    <link href="static/css/cart.css" rel="stylesheet">
    <title>Coffee Store</title>
    <link rel="icon" href="static/images/coffee.png">
</head>
<body>

<header>
    <?php include 'blocks/header.php' ?>
</header>

<section class="table-section">
    <div class="content">
        <div class="table-items scroller">
            <?php
                foreach ($users as $user) {
            ?>
                    <div class="table-item user-item">
                        <div>
                            <h3>USER: <?= $user['username'] ?></h3>
                            <p>ROLE: <span class="role-span"><?= $user['role'] ?></span></p>
                            <a href="vendor/user_delete.php?id=<?= $user['id'] ?>"><img class="remove-icon" src="static/images/remove.png"></a>
                        </div>
                    </div>

            <?php
                }
            ?>
        </div>
    </div>
</section>

<script src="static/js/searchBar.js"></script>
<script src="static/js/imagePreview.js"></script>
<script src="static/js/formAddingStorage.js"></script>
</body>
</html>