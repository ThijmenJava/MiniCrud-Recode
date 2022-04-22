<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

if (isset($_POST["submit"])) {
    $naam = $_POST["naam"];
    $wachtwoord = $_POST["wachtwoord"];
    $email = $_POST["email"];

    $query = "INSERT INTO accounts(naam, wachtwoord, email) VALUES (:naam, :wachtwoord, :email)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":naam", $naam);
    $stmt->bindParam(":wachtwoord", $wachtwoord);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    redirect("../admin/users.php");
}

