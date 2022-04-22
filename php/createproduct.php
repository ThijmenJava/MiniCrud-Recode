<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

if (isset($_POST["submit"])) {
    $naam = $_POST["naam"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $image = $_FILES['file'];
    move_uploaded_file($image['tmp_name'], "../media/fotosmenu/".$image['name']);

    $query = "INSERT INTO products(product_name, price, image, description) VALUES ('$naam', '$price', '../media/fotosmenu/{$image["name"]}', '$description')";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    redirect("../admin/menucdu.php");
}
