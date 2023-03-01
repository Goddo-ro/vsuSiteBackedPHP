<?php
require_once '../db/connection.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_FILES["file"];
$info = getimagesize($image["tmp_name"]);
if (!$info) {
    die("File is not an image");
}
$name = $image["name"];
$blob = addslashes(file_get_contents($image["tmp_name"]));

$sql = "INSERT INTO `items` (`title`, `price`, `description`, `image`) VALUE ('" . $title . "', '" . $price . "', '" . $description . "', '" . $blob . "')";
mysqli_query($connect, $sql) or die(mysqli_error($connect));

header("Location: /");
