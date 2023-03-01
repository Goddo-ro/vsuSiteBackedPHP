<?php

    require_once '../db/connection.php';

    if (!empty($connect)) {
        $id = $_GET['id'];
        mysqli_query($connect, "DELETE FROM `items` WHERE `items`.`id` = '$id'");

        header('Location: /');
    }