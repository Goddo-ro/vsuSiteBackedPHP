<?php

    require_once '../db/connection.php';

    if (!empty($connect)) {
        $id = $_GET['id'];

        mysqli_query($connect, "DELETE FROM `cart_items` WHERE `id` = '$id'");

        $items = mysqli_query($connect, "SELECT * FROM `cart_items` WHERE `cart_id` = '$id'");

        foreach ($items as $item) {
            $item_id = $item['id'];
            mysqli_query($connect, "DELETE FROM `cart_items` WHERE `id` = '$item_id'");
        }

        header('Location: /cart.php');
    }