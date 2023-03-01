<?php

session_start();
require_once "../db/connection.php";

if (!empty($connect)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    if ($password === $repeat_password) {
        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, '$username', '$password')");
        $_SESSION['message'] = 'Registration completed successfully.';
        header("Location: ../index.php");
    } else {
        $_SESSION['message'] = 'Password mismatch';
        header("Location: ../register.php");
    }
}