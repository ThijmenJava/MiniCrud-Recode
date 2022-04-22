<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $name = $_POST["naam"];
    $price = $_POST["price"];
    $image = $_POST["image"];
    $description = $_POST["description"];

    $sql = "UPDATE products SET product_name = :naam, price = :price, image = :image, description = :description WHERE productID = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":naam", $name);
    $stmt->bindParam(":price", $price);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    redirect("../admin/menucdu.php");
}