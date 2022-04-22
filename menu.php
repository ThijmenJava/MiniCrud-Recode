<?php

include("php/menubackend.php");

session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
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
    <title>Menu</title>
</head>
<body>

    <?php include("includes/header.php"); ?>

    <section class="menu_section">
        <main class="main_section display_flex_menu">
            <form method="post" class="menu_zoekbalk">
                <div class="zoek_plek">
                    <div class="label_blok">
                        <label class="font_size_25" for="zoek">Zoek</label>
                    </div>
                    <div class="zoek_plek_input">
                        <input class="zoek_styles clear_forms" type="text" name="zoekbalk" id="zoek">
                    </div>
                </div>
                <div class="order_price_plek">
                    <div class="price_plek_button">
                        <input class="clear_forms link_order_price" type="submit" value="Onder 5 euro!" name="submit5">
                    </div>
                    <div class="price_plek_button">
                        <input class="clear_forms link_order_price" type="submit" value="Onder 10 euro!" name="submit10">
                    </div>
                    <div class="price_plek_button">
                        <input class="clear_forms link_order_price" type="submit" value="Onder 20 euro!" name="submit20">
                    </div>
                </div>
                <div class="submit_plek_menu">
                    <input class="clear_forms link_order_price" name="allessumbit" type="submit" value="Laat alles zien!">
                </div>
                <div class="submit_plek_menu">
                    <input class="submit_button_styles clear_forms" type="submit" name="submit" value="Zoeken">
                </div>
                <div class="winkel_wagen_plek">

                </div>
            </form>
            <div class="product_plaats">
                <?php showAllProducts(); ?>
            </div>
        </main>
    </section>

    <?php include("includes/login.php"); ?>

    <?php include("includes/footer.php"); ?>

    <script src="js/main.js"></script>

</body>
</html>
