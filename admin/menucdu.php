<?php

include("../php/imageloader.php");
include("../includes/session.php");
include("../php/menucdubackend.php");

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
    <title>Menu-Backend | Welcome <?php echo $name ?></title>
</head>
<body>

<!--    <form method="post" action="" enctype="multipart/form-data">-->
<!--        <input type="file" name="file">-->
<!--        <input type="submit">-->
<!--    </form>-->

    <?php include("../includes/admin/headeradmin.php"); ?>

    <section class="main_section">
        <main class="standaard_section flex_wrap">
            <div class="foto_pizza_menucdu">

            </div>
            <div class="inhoud_menucdu">
                <div class="buttons_menucdu flex_wrap">
                    <div class="container_button_menucdu">
                        <button class="button_menucdu" id="xmlbutton">XML Gerecht Aanmaken</button>
                    </div>
                    <div class="container_button_menucdu">
                        <button class="button_menucdu" id="gerechtbutton">Gerecht Aanmaken</button>
                    </div>
                </div>
                <div class="container_menucdu">
                    <table class="border_table table_res">
                        <tr class="border_buttom_tabel">
                            <th>Product-ID</th>
                            <th>Product-Naam</th>
                            <th>Price</th>
                            <th>Image-Path</th>
                            <th>Description</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <?php showMenuCdu(); ?>
                    </table>
                </div>
            </div>
        </main>
    </section>

    <div id="div_product_aanmaken" class="product_aanmaken_plek">
        <div class="product_form_aanmaken" id="divformproduct">
            <div class="header_product">
                <h2 class="font_size_25">Product Aanmaken</h2>
            </div>
            <div class="container_form_menucdu">
                <form class="form_auto" action="../php/createproduct.php" method="post" enctype="multipart/form-data">
                    <div class="input_menucdu_plek">
                        <div class="label_plek_menucdu">
                            <p class="font_product">Naam</p>
                        </div>
                        <div class="input_container">
                            <input name="naam" class="input_menucdu clear_forms font_product" type="text" placeholder="Naam">
                        </div>
                    </div>
                    <div class="input_menucdu_plek">
                        <div class="label_plek_menucdu">
                            <p class="font_product">Price</p>
                        </div>
                        <div>
                            <input name="price" class="input_menucdu clear_forms font_product" type="text" placeholder="Price">
                        </div>
                    </div>
                    <div class="input_menucdu_plek">
                        <div class="label_plek_menucdu">
                            <p class="font_product">Image</p>
                        </div>
                        <div>
                            <input class="input_menucdu clear_forms" type="file" name="file">
                        </div>
                    </div>
                    <div class="input_menucdu_plek">
                        <div class="label_plek_menucdu">
                            <p class="font_product">Description</p>
                        </div>
                        <div>
                            <input name="description" class="input_menucdu clear_forms font_product" type="text" placeholder="Description">
                        </div>
                    </div>
                    <div class="submit_container">
                        <input type="submit" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include("../includes/footer.php"); ?>

    <script src="../js/menucdu.js"></script>
</body>
</html>
