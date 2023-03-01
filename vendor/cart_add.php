<?php

    session_start();

    require_once '../db/connection.php';

    if (!empty($connect)) {
        $id = $_GET['id'];
        $user_id = $_SESSION['user']['id'];

        $cart = mysqli_query($connect, "SELECT * FROM `carts` WHERE `user_id` = '$user_id'");
        $cart = mysqli_fetch_assoc($cart);

        $cart_id = $cart['id'];

        if (!$cart_id) {
            $cart_id = mysqli_fetch_assoc(mysqli_query($connect, "INSERT INTO `carts` (`user_id`) VALUES ('$user_id')"))['id'];
        }

        mysqli_query($connect, "INSERT INTO `cart_items` (`item_id`, `cart_id`) VALUES ('$id', '$cart_id')");

        header('Location: /item.php?id=' . $id);
    }