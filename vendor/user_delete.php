<?php

    require_once '../db/connection.php';

    if (!empty($connect)) {
        $id = $_GET['id'];

        mysqli_query($connect, "DELETE FROM `users` WHERE `id` = '$id'");

        header('Location: /users.php');
    }