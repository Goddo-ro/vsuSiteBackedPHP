<?php
    session_start();

    echo '
            <link href="../static/css/header.css" rel="stylesheet">
        <div class="content header-content">
            <a href="../store.php" class="left">
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
                    echo '
                        <a href="/cart"><img class="cart" src="../static/images/empty_cart.png" alt="cart"></a>
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