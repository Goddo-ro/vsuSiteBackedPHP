<?php

session_start();
require_once "../db/connection.php";

if (!empty($connect)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$username'");

    if (mysqli_num_rows($check_user) > 0) {
        $_SESSION['message'] = 'Error: username is taken.';
        header("Location: ../register.php");
    } else if ($password !== $repeat_password) {
        $_SESSION['message'] = 'Password mismatch';
        header("Location: ../register.php");
    } else {
        $password = md5($password);
        $user_id = mysqli_fetch_assoc(mysqli_query($connect, "INSERT INTO `users` (`id`, `username`, `password`) VALUES 
                                                               (NULL, '$username', '$password')"))['id'];
        mysqli_query($connect, "INSERT INTO `carts` (`user_id`) VALUE ('$user_id')");
        $_SESSION['success_message'] = 'Registration completed successfully.';
        header("Location: ../login.php");
    }
}