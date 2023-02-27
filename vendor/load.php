<?php
require_once '../db/connection.php';

if (isset($_GET['id'])) {
    $sql = "SELECT type, data FROM images WHERE id=?";
    $statement = $connect->prepare($sql);
    $statement->bind_param("i", $_GET['id']);
    $statement->execute() or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_connect_error());
    $result = $statement->get_result();

    $row = $result->fetch_assoc();

    header("Content-type: " . $row["type"]);

    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['data']).'"/>';
}