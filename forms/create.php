<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../static/css/index.css" rel="stylesheet">
    <link href="../static/css/store.css" rel="stylesheet">
    <link href="../static/css/item.css" rel="stylesheet">
    <title>Coffee Store</title>
    <link rel="icon" href="../static/images/coffee.png">
</head>
<header>
    <?php include '../blocks/header.php' ?>
</header>
<body>

<section class="item">
    <div class="content">
        <form action="../vendor/upload.php" method="POST" enctype="multipart/form-data">
            <img id="img-preview" src="../static/images/no_image.jpg">
            <input name="file" type="file" id="selectedFile" style="display: none;" />
            <input id="image" type="button" value="Выбрать..." onclick="document.getElementById('selectedFile').click();" />
            <input id="title" type="text" name="title" placeholder="Название...">
            <input id="price" name="price" type="number" min="0.1" step="0.1" placeholder="Цена..."/>
            <textarea id="description" name="description" placeholder="Описание..."></textarea>
            <button class="btn success" type="submit">Добавить</button>
        </form>
    </div>
</section>

<script src="../static/js/imagePreview.js"></script>
<script src="../static/js/formAddingStorage.js"></script>
</body>
</html>