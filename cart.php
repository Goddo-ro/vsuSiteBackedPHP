<?php

    session_start();

    if (!$_SESSION['user']) {
        header("Location: /");
    }

    require_once './db/connection.php';

    $id = $_SESSION['user']['id'];

    if (!empty($connect)) {
        $cart = mysqli_query($connect, "SELECT * FROM `carts` WHERE `user_id` = '$id'");
        $cart = mysqli_fetch_assoc($cart);

        $cart_id = $cart['id'];

        $items = mysqli_query($connect, "SELECT * FROM `cart_items` WHERE `cart_id` = '$cart_id'");
    }

    $total = 0;
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

<section class="cart-section">
    <div class="content">
        <div class="cart-items scroller">
            <?php
                if (!mysqli_num_rows($items)) {
                    echo '<h3>Корзина пуста</h3>';
                }
                foreach ($items as $item) {
                    $item_id = $item['item_id'];
                    $fetched_item = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `items` WHERE `id` = '$item_id'"));
                    $total += $fetched_item['price'];
            ?>
                    <div class="cart-item">
                        <?php echo '<img class="cart-img" src="data:image/jpeg;base64,'.base64_encode($fetched_item['image']).'"/>'; ?>

                        <div>
                            <h3><?= $fetched_item['title'] ?></h3>
                            <div class="remove-container">
                                <p class="price"><?= $fetched_item['price'] ?>$</p>
                                <a href="vendor/cart_delete.php?id=<?= $item['id'] ?>"><img class="remove-icon" src="static/images/remove.png"></a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
        <div class="total-container">
            <h2>Итог: <?= $total ?>$</h2>
            <a href="vendor/clear.php?id=<?= $cart_id ?>">Оплатить покупку</a>
        </div>
    </div>
</section>

</body>
</html>
