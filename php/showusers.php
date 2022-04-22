<?php

include("../includes/connect.php");

function showUser() {
    global $conn, $error;
    $query = "SELECT * FROM accounts ORDER BY accountID";
    $result = $conn->prepare($query);
    $result->execute();
    if (!empty($result)) {
        foreach ($result as $value) {
            echo "<tr class='border_buttom_tabel'>";
                echo "<td> <form method='post' action='../php/updateaccounts.php''><input class='input_auto' type='text' value='{$value["accountID"]}' name='id' readonly > </td>";
                echo "<td> <input class='input_auto' type='text' name='naam' value='{$value["naam"]}'> </td>";
                echo "<td> <input class='input_auto' type='text' name='wachtwoord' value='{$value["wachtwoord"]}'> </td>";
                echo "<td> <input class='input_auto' type='text' name='email' value='{$value["email"]}'> </td>";
                echo "<td> <input class='table_button green clear_forms' value='Update' type='submit' name='submit'></form> </td>";
                echo "<td> <a href='../php/deleteaccounts.php?ID={$value["accountID"]}'><button class='table_button'>Delete</button></a> </td>";
            echo "</tr>";
        }
    } else {
        $error = "No results!";
    }
}
