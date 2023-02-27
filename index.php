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

<a class="btn success" href="forms/create.php">Добавить товар</a>


<?php
//    require_once 'db/connection.php';
//
//    $sql = "SELECT * FROM images";
//    $result = mysqli_query($connect, $sql);
//
//    while ($row = mysqli_fetch_array($result)) {
//        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['data']).'"/>';
//    }
//
//?>

<script src="static/js/imagePreview.js"></script>
<script src="static/js/formAddingStorage.js"></script>
</body>
</html>