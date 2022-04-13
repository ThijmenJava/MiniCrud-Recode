<?php

include_once("../includes/connect.php");
include("../includes/util.php");

global $conn;

if (isset($_POST['name']) && isset($_POST['wachtwoord'])) {
    $wachtwoord = $_POST['wachtwoord'];
    $name = $_POST['name'];
    if (empty($wachtwoord) || empty($name)) {
        redirect("../index.php");
    } else {
        $get = "SELECT * FROM accounts where naam = '$name' AND wachtwoord = '$wachtwoord'";
        $result = $conn->prepare($get);
        $result->execute();
        if ($result->rowCount() == 1) {
            redirect("../admin/menucdu.php");
        } else {
            redirect("../index.php");
        }
    }
} else {
    redirect("../index.php");
}
