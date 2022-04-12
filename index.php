<?php

session_start();

$_SESSION["name"] = "thijmen";

if (isset($_POST['submit'])) {

}

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
    <title>Home</title>
</head>
<body>

    <?php include("includes/header.php") ?>

    <main class="main_section">
        <section class="standaard_section">
            <div class="welkom_content">
                <div class="pizza_naam_container">
                    <div class="pizza_naam"><p class="pizza_text">Pizzeria Da La Thijma</p></div>
                </div>
                <div class="welkom_text_content">
                    <div class="text_container">
                        <h2 class="welkom_text">Welkom bij de <mark class="mark_welkom_text">beste pizzeria</mark> van Nederland!</h2>
                    </div>
                </div>
                <div class="next_page_button_plek">
                    <a href="#login"><button class="down_button"><i class="gg-arrow-down"></i></button></a>
                </div>
            </div>
        </section>

        <section class="welkoms_bericht_section">
            <div class="mid_bar">
                <p class="mid_bar_text">Kijk hier beneden voor info!</p>
            </div>
            <div class="welkom_foto_container">
                <div class="welkom_text_foto_bericht">
                    <div class="woord_plek">
                        <div class="woord">
                            <p class="jochem_woord_font">Deze pizza is oprecht lekker - Jochem</p>
                        </div>
                    </div>
                    <div class="woord_plek woord_plek_right">
                        <div class="woord woord_right">
                            <p class="jochem_woord_font">Mhhh lekkeren pizza - Ilias</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welkom_text_container">
                <div class="welkom_text_plek">
                    <div class="blok_faq_text">
                        <h2 class="faq_text">Pizzeria Da La Thijma</h2>
                    </div>
                </div>
                <div class="info_text_plek">
                    <div class="info_container">
                        <h2 class="info_font">Welkom bij de Pizzeria</h2>
                    </div>
                    <div class="info_text">
                        <p class="small_info_font">It is a long established fact that a reader will be
                            distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem
                            Ipsum is that it has a more-or-less normal distribution
                            of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop
                            publishing packages and web page editors now use Lorem
                            Ipsum as their default model text, and a search for
                            'lorem ipsum' will uncover many web sites still in their
                            infancy. Various versions have evolved over the years,
                            sometimes by accident, sometimes on purpose
                            (injected humour and the like).
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("includes/login.php"); ?>

    <?php include("includes/footer.php"); ?>

    <script src="js/main.js"></script>
</body>
</html>
