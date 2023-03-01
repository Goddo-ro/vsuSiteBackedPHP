<?php

    session_start();
    require_once "../db/connection.php";

    if (!empty($connect)) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$username'");

        if (mysqli_num_rows($check_user) > 0) {
            $user = mysqli_fetch_assoc($check_user);

            if ($user['password'] != $password) {
                $_SESSION['message'] = "Error: Неверный пароль";
                header("Location: ../login.php");
            } else {
                $_SESSION['user'] = [
                    "id" => $user['id'],
                    "username" => $user['username'],
                    "role" => $user['role']
                ];

                $user_id = $user['id'];

                $cart = mysqli_query($connect, "SELECT * FROM `carts` WHERE `user_id` = '$user_id'");
                $cart = mysqli_fetch_assoc($cart);

                if (!$cart['id']) {
                    mysqli_query($connect, "INSERT INTO `carts` (`user_id`) VALUES ('$user_id')");
                }

                header("Location: ../index.php");
            }
        } else {
            $_SESSION['message'] = "Error: Имя пользователя не найдено";
            header("Location: ../login.php");
        }
    }