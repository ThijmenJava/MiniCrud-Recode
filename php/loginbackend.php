<?php

include_once("../includes/connect.php");
include("../includes/util.php");

global $conn;

session_start();

$_SESSION['name'] = "";

if (isset($_POST['name']) && isset($_POST['wachtwoord'])) {
    $_SESSION['name'] = $_POST['name'];
    $wachtwoord = $_POST['wachtwoord'];
    $name = $_SESSION['name'];
    if (empty($_SESSION['name']) || empty($name)) {
        echo "hoi";
        redirect("../index.php");
    } else {
        $get = "SELECT * FROM accounts where naam = '$name' AND wachtwoord = '$wachtwoord'";
        $result = $conn->prepare($get);
        $result->execute();
        if ($result->rowCount() == 1) {
            echo "hoi";
            redirect("../admin/menucdu.php");
        } else {
            redirect("../index.php");
        }
    }
} else {
    redirect("../index.php");
}
