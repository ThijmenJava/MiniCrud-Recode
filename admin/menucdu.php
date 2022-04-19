<?php

include("../php/imageloader.php");
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
    <title>Menu-Backend | Welcome <?php echo $name ?></title>
</head>
<body>

    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit">
    </form>

    <?php include("../includes/admin/headeradmin.php"); ?>

    <section class="main_section">
        <main class="standaard_section flex_wrap">
            <div class="foto_pizza_menucdu">

            </div>
            <div class="inhoud_menucdu">
                <div class="buttons_menucdu">

                </div>
                <div class="container_menucdu">
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
                    </table>
                </div>
            </div>
        </main>
    </section>

    <?php include("../includes/footer.php"); ?>

</body>
</html>
