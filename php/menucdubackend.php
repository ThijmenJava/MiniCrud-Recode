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
            echo "<tr>";
                echo "<td>  </td>";
            echo "</tr>";
        }
    } else {
        $error = "No results!";
    }
}
