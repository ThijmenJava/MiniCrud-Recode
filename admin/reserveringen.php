<?php

include("../includes/session.php");
include("../php/showreserveren.php");

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://css.gg/arrow-down.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <title>Reserveren-Backend | Welcome <?php echo $name ?></title>
</head>
<body>

    <?php include("../includes/admin/headeradmin.php"); ?>

    <section class="standaard_section">
        <main class="main_section display_flex_admin">
            <div class="foto_section_res background_img_1 border_right_img"></div>
            <div class="container_reserveringen">
                <table class="border_table table_res">
                    <tr class="border_buttom_tabel">
                        <th>ID</th>
                        <th>Naam</th>
                        <th>Email</th>
                        <th>Opmerking</th>
                        <th>Mensen</th>
                        <th>Datum</th>
                        <th>Delete</th>
                    </tr>
                    <?php showReserveren(); ?>
                </table>
            </div>
            <div class="foto_section_res background_img_2 border_left_img"></div>
        </main>
    </section>

    <?php include("../includes/footer.php"); ?>

</body>
</html>
