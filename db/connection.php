<?php

$connect = mysqli_connect("localhost", "root", "", "coffee");

if (!$connect) {
    die("Error!");
}