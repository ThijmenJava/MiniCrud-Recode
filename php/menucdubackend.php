<?php

include("../includes/connect.php");

global $conn;

$error = "";

function showMenuCdu() {
    global $conn, $error;
    $query = "SELECT * FROM products ORDER BY productID";
    $result = $conn->prepare($query);
    $result->execute();
    if (!empty($result)) {
        foreach ($result as $value) {
            echo "<tr class='border_buttom_tabel'>";
                echo "<td> <form method='post' action='../php/updateproduct.php''><input class='input_auto' type='text' value='{$value["productID"]}' name='id' readonly > </td>";
                echo "<td> <input class='input_auto' type='text' name='naam' value='{$value["product_name"]}'> </td>";
                echo "<td> <input class='input_auto' type='text' name='price' value='{$value["price"]}'> </td>";
                echo "<td> <input class='input_auto' type='text' name='image' value='{$value["image"]}'> </td>";
                echo "<td> <input class='input_auto' type='text' name='description' value='{$value["description"]}'> </td>";
                echo "<td> <input class='table_button green clear_forms' value='Update' type='submit' name='submit'></form> </td>";
                echo "<td> <a href='../php/deleteproduct.php?ID={$value["productID"]}'><button class='table_button'>Delete</button></a> </td>";
            echo "<tr>";
        }
    } else {
        $error = "No results!";
    }
}
