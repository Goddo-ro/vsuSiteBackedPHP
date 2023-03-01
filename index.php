<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="static/css/index.css" rel="stylesheet">
    <link href="static/css/store.css" rel="stylesheet">
    <link href="static/css/item.css" rel="stylesheet">
    <title>Coffee Store</title>
    <link rel="icon" href="static/images/coffee.png">
</head>
<header>
    <?php include 'blocks/header.php' ?>
</header>
<body>


<section>
    <div class="content">
        <div class="actions">
            <input id="search" type="text" name="search" placeholder="Поиск..." >
            <a class="btn success" href="forms/create.php">Добавить товар</a>
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
                    echo '
                        <a class="item-card">
                            <img class="item-img" src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                            <h3 class="coffee-title">' . $row['title'] . '</h3>
                            <p>' . $row['price'] . '$</p>
                        </a>
                    ';
                }
            ?>
        </div>
    </div>
</section>

<script src="static/js/imagePreview.js"></script>
<script src="static/js/formAddingStorage.js"></script>
</body>
</html>