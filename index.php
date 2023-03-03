<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="static/css/index.css" rel="stylesheet">
    <link href="static/css/store.css" rel="stylesheet">
    <title>Coffee Store</title>
    <link rel="icon" href="static/images/coffee.png">
</head>
<body>

<header>
    <?php include 'blocks/header.php' ?>
</header>

<section class="store">
    <div class="content">
        <div class="actions">
            <input id="search" type="text" name="search" placeholder="Поиск..." >
            <?php if ($_SESSION['user']['role'] === "ADMIN") echo '<a class="btn success" href="forms/create.php">Добавить товар</a>' ?>
        </div>

        <?php
            require_once 'db/connection.php';

            $sql = "SELECT * FROM items";
            if (!empty($connect)) {
                $result = mysqli_query($connect, $sql);
            }
        ?>
        <div class="grid-wrapper">
            <?php
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <a href="item.php?id=<?= $row['id'] ?>" class="item-card">
            <?php
                    echo '
                            <img class="item-img" src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                            <div>
                                <h3 class="coffee-title">' . $row['title'] . '</h3>
                                <p class="price">' . $row['price'] . '$</p>
                            </div>
                        </a>
                    ';
                }
            ?>
        </div>
    </div>
</section>

<script src="static/js/searchBar.js"></script>
</body>
</html>