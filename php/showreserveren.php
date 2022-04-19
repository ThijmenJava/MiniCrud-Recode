<?php

include("../includes/connect.php");

$error = "";

function showReserveren() {
    global $conn, $error;
    $query = "SELECT * FROM reserveren ORDER BY reserverenID ASC";
    $result = $conn->prepare($query);
    $result->execute();
    if (!empty($result)) {
        foreach ($result as $value) {
            echo "<tr class='border_buttom_tabel'>";
                echo "<td class=''> {$value["reserverenID"]} </td>";
                echo "<td class=''> {$value["naam"]} </td>";
                echo "<td class=''> {$value["email"]} </td>";
                echo "<td class=''> {$value["opmerking"]} </td>";
                echo "<td class=''> {$value["mensen"]} </td>";
                echo "<td class=''> {$value["datum"]} </td>";
                echo "<td class=''><a href='../php/deletereserveren.php?ID={$value["reserverenID"]}'><button class='table_button'>Delete</button></a></td>";
            echo "</tr>";
        }
    } else {
        $error = "No results!";
    }
}


