<?php

include("../includes/util.php");
include("../includes/connect.php");

global $conn;

$id = $_GET['ID'];

echo $id;

$sql = "DELETE FROM reserveren WHERE reserverenID = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id );
$stmt->execute();

redirect("../admin/reserveringen.php");
