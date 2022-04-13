<?php

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
    <title>Reserveren-Backend | Welcome <?php echo $name ?></title>
</head>
<body>

    <?php include("../includes/admin/headeradmin.php"); ?>

    <section class="standaard_section">
        <main class="main_section display_flex_admin">
            <div class="foto_section_res background_img_1 border_right_img"></div>
            <div class="container_reserveringen">

            </div>
            <div class="foto_section_res"></div>
        </main>
    </section>

    <?php include("../includes/footer.php"); ?>

</body>
</html>
