<?php
    session_start();

    require_once __DIR__ . '/../db/connection.php';

    echo '
            <link href="../static/css/header.css" rel="stylesheet">
        <div class="content header-content">
            <a href="../index.php" class="left">
                <img class="logo" src="../static/images/coffee.png">
                <h1>Coffee Shop</h1>
            </a>
            <div class="links">
                <a href="/">Shop</a>
                <a href="../about.php">About</a>
               ';
    if ($_SESSION['user']['role'] === 'ADMIN') {
        echo '<a href="../users.php">Users</a>';
    }
    echo '
            </div>
            <div class="user">
    ';
                if (!$_SESSION['user']) {
                    echo '
                        <a class="login-link" href="../login.php">Войти</a>
                        <a class="reg-link" href="../register.php">Зарегистрироваться</a>
                    ';
                } else {
                    $user_id = $_SESSION['user']['id'];
                    $cart = mysqli_query($connect, "SELECT * FROM `carts` WHERE `user_id` = '$user_id'");
                    $cart = mysqli_fetch_assoc($cart);
                    $cart_id = $cart['id'];
                    $items = mysqli_query($connect, "SELECT * FROM `cart_items` WHERE `cart_id` = '$cart_id'");

                    if (mysqli_num_rows($items) > 0) {
                        echo '
                            <div>
                                <a href="../cart.php"><img class="cart" src="../static/images/full_cart.png" alt="cart"></a>
                                <span>
                        ';
                        echo mysqli_num_rows($items);
                        echo '
                                </span>
                            </div>
                        ';
                    } else {
                        echo '<a href="../cart.php"><img class="cart" src="../static/images/empty_cart.png" alt="cart"></a>';
                    }

                    echo '
                        <p class="username">
                    ';
                    echo $_SESSION['user']['username'];
                    echo '
                        </p>
                        <a class="exit" href="../vendor/exit.php">Выйти</a>
                    ';
                }

    echo '</div>
        </div>
        <script src="../static/js/currentLink.js"></script>
    ';