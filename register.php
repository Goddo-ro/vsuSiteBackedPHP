<?php
    session_start();

    if ($_SESSION['user']) {
        header("Location: /index.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="static/css/index.css" rel="stylesheet">
    <link href="static/css/item.css" rel="stylesheet">
    <title>Registration</title>
</head>
<body>

<header>
    <?php include 'blocks/header.php' ?>
</header>

<section>
    <div class="content">
        <form class="auth-form" action="vendor/signup.php" method="POST">
            <h3>Registration</h3>
            <input name="username" type="text" placeholder="Login...">
            <input name="password" type="password" placeholder="Password...">
            <input name="repeat_password" type="password" placeholder="Repeat password...">
            <button type="submit">Зарегистрироваться</button>
            <p>
                Уже есть аккаунт? <a href="/login.php">Войти</a>
            </p>
            <p class="message">
                <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>
            </p>
        </form>
    </div>
</section>

</body>
</html>