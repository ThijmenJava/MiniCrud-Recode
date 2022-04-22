<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $name = $_POST["naam"];
    $wachtwoord = $_POST["wachtwoord"];
    $email = $_POST["email"];

    $sql = "UPDATE accounts SET naam = :naam, wachtwoord = :wachtwoord, email = :email WHERE accountID = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":naam", $name);
    $stmt->bindParam(":wachtwoord",$wachtwoord);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    redirect("../admin/users.php");
}