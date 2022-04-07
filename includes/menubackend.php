<?php

include("connect.php");

global $conn;

$query = "";

$error = '';

if (isset($_POST["submit"])) {
    if (!empty($_POST["zoekbalk"])) {
        $query = "SELECT * FROM products WHERE product_name = '".$_POST["zoekbalk"]."'";
        return;
    } else {
        $query = "SELECT * FROM products ORDER BY productID ASC";
    }
} else {
    $query = "SELECT * FROM products ORDER BY productID ASC";
}

if (isset($_POST["submit5"])) {
    $query = "SELECT * FROM products WHERE price <= 5.00";
}

if (isset($_POST["submit10"])) {
    $query = "SELECT * FROM products WHERE price <= 10.00";
}

if (isset($_POST["submit20"])) {
    $query = "SELECT * FROM products WHERE price <= 20.00";
}

if (isset($_POST["allessubmit"])) {
    $query = "SELECT * FROM products ORDER BY productID ASC";
}

function showAllProducts() {
    global $conn, $error, $query;
    $result = $conn->prepare($query);
    $result->execute();
    if (!empty($query)) {
        foreach ($result as $value) {
            echo "<div class='product_container'>";
                echo "<form action= method=post>";
                    echo "<div class='text_plek_product font_product'> {$value["product_name"]} </div>";
                    echo "<div class='product_uitleg_plek font_product_uitleg'> {$value["description"]} </div>";
                    echo "<div class='prijs_plek_product font_product_uitleg'>$ {$value["price"]} </div>";
                    echo "<div class='product_image_plek'>";
                        echo "<img class='product_image_size' src={$value["image"]} alt={$value["product_name"]} >";
                    echo "</div>";
                    echo "<div class='winkel_mand_button_plek'><input class='clear_forms button_size_product font_product_uitleg' type=submit value=ADD ></div>";
                echo "</form>";
            echo "</div>";
        }
    } else {
        $error = "No results!";
    }
}

