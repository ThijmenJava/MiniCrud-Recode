<?php

include("../includes/imageloader.php");
include("../includes/session.php");

$name = $_SESSION['name'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Menu-Backend | Welcome <?php echo $name ?> </title>
</head>
<body>

    <?php include("../includes/admin/headeradmin.php"); ?>

    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit">
    </form>
</body>
</html>
