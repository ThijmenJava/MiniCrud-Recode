<?php

$host = "localhost";
$db = "pizza";
$user = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, '');

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "PDO works";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
