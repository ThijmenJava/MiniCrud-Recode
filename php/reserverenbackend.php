<?php

use PHPMailer\PHPMailer\PHPClasse\Mail;

include("../includes/connect.php");
include("Mail.php");
include("../includes/util.php");

$mail = new Mail();

global $conn;

$sql = "SELECT * FROM reserveren";
$get = $conn->prepare($sql);
$get->execute();

$rowcount = $get->rowCount();

if (isset($_POST['submit'])) {
    $name = $_POST['naam'];
    $email = $_POST['email'];
    $mensen = $_POST['mensen'];
    $text = $_POST['opmerking'];
    $datetime = $_POST['datum'];
    if (true) {
        if ($name == '' || $email == '' || $mensen == '') {
            $error = 'Vul alle velden in!';
        } else {
            if (is_numeric($mensen)) {
                if ($mensen > 20 || $mensen <= 0) {
                    $error = "Max 20 man!";
                } else {
                    $error = "Reservering geplaats";
                    $sql = "INSERT INTO reserveren (email, naam, opmerking, mensen, datum) VALUES ('$email', '$name', '$text', '$mensen', '$datetime')";
                    $conn->exec($sql);
                    $mail->send_mail($email, "Reservering", "U hebt een reservering gemaakt voor " . $mensen . ", op de naam van " . $name
                        , "Reservering", $name);
                    redirect("../reserveren.php");
                }
            } else {
                $error = 'Mensen moeten als nummer!';
            }
        }
    }
}

redirect("../reserveren.php");

function printError() : string {
    global $error;
    return $error;
}


