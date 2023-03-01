<?php

    require_once '../db/connection.php';

    if (!empty($connect)) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $_FILES["file"];
        if ($image['error'] > 0) {
            $sql = "UPDATE `items` SET `title` = '$title', `description` = '$description', `price` = '$price'";
        } else {
            $info = getimagesize($image["tmp_name"]);
            if (!$info) {
                die("File is not an image");
            }
            $name = $image["name"];
            $blob = addslashes(file_get_contents($image["tmp_name"]));

            $sql = "UPDATE `items` SET `title` = '$title', `description` = '$description', `price` = '$price', `image` = '$blob'";
        }

        mysqli_query($connect, $sql) or die(mysqli_error($connect));

        header("Location: /");
    }
