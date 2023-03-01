<?php
    require_once 'db/connection.php';

    $id = $_GET['id'];

    $item = mysqli_query($connect, "SELECT * FROM items WHERE `id` = '$id'");
    $item = mysqli_fetch_assoc($item);
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Coffee Store</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" href="static/images/coffee.png">
    <link href="static/css/index.css" rel="stylesheet">
    <link href="static/css/store.css" rel="stylesheet">
    <link href="static/css/item_details.css" rel="stylesheet">
</head>
<body>

<header>
    <?php include 'blocks/header.php' ?>
</header>

<section class="item-details">
    <div class="content">
        <div class="content-content">
            <?php
                echo '
                    <img class="item-img" src="data:image/jpeg;base64,'.base64_encode($item['image']).'"/>
                ';
            ?>
            <div>
                <h3 class="coffee-title"><?= $item['title'] ?></h3>
                <p class="price"><?= $item['price'] ?>$</p>
            </div>
            <p class="body"><?= $item['description'] ?></p>
        </div>
        <?php
            if ($_SESSION['user']) {
                if ($_SESSION['user']['role'] === "ADMIN") {
                    echo '
                        <div class="content-footer">
                            <a class="btn warning" href="forms/update.php?id=' . $item['id'] . '">Редактировать</a>
                            <a class="btn danger" href="vendor/delete.php?id=' . $item['id'] . '">Удалить</a>
                        </div>
                    ';
                }
            }
        ?>

    </div>
</section>

<script src="static/js/imagePreview.js"></script>
</body>
</html>