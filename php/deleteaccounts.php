<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

$id = $_GET["ID"];

$sql = "DELETE FROM accounts WHERE accountID = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();

redirect("../admin/users.php");
