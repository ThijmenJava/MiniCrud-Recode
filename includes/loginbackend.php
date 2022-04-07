<?php

include_once("connect.php");
include("util.php");

$error = '';

function makeAccount($naam, $wachtwoord, $wachtwoordcheck, $email) {
    global $conn, $error;
    if (empty($wachtwoord) || empty($email) || empty($naam)) {
        $error = "je moet alles invullen!";
    } else {
        if ($wachtwoord == $wachtwoordcheck) {
            $get = "SELECT * FROM accounts where email= '".$email."'";
            $result = $conn->prepare($get);
            $result->execute();
            if ($result->rowCount() >= 1) {
                $error = "account bestaat al!";
            } else {
                $sql = "INSERT INTO accounts (naam, wachtwoord, email) VALUES ('$naam', '$wachtwoord', '$email')";
                $result = $conn->prepare($sql);
                $result->execute();
            }
        } else {
            $error = "wachtwoord moeten hetzelfde zijn!";
        }
    }
}

function login($naam ,$wachtwoord, $email) {
    global $conn, $error;
    if (empty($wachtwoord) || empty($email) || empty($naam)) {
        $error = "je moet alles invullen!";
    } else {
        $get = "SELECT * FROM accounts where naam = '$naam' AND wachtwoord = '$wachtwoord' AND email = '$email'";
        $result = $conn->prepare($get);
        $result->execute();
        if ($result->rowCount() == 1) {
            redirect("backend.php");
            $error = "logged in!";
        } else {
            $error = "account bestaat niet!";
        }
    }
}

function printError(): string {
    global $error;
    return $error;
}

