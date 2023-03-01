<?php

    require_once '../db/connection.php';

    if (!empty($connect)) {
        $id = $_GET['id'];

        mysqli_query($connect, "DELETE FROM `cart_items` WHERE `id` = '$id'");

        header('Location: /cart.php');
    }