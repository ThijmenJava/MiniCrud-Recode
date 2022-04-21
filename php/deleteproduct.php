<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

$id = $_GET['ID'];

$sql = "DELETE FROM products WHERE productID = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();

redirect("../admin/menucdu.php");
