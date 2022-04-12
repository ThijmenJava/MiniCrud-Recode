<?php

include("connect.php");

global $conn;

$error = "";

if (isset($_FILES['file'])) {
    $image = $_FILES['file'];
    move_uploaded_file($image['tmp_name'], "../media/fotosmenu/".$image['name']);
    echo "test";
} else {
    echo "error";
}
