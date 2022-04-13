<?php

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
    <title>Reserveren</title>
</head>
<body>

    <?php include("includes/header.php"); ?>

    <section class="main_section">
        <main class="standaard_section display_flex">
            <div class="foto_plek_reserveren">

            </div>
            <div class="form_plek_reserveren">
                <div class="form_text">
                    <div class="reserveren_text_blok">
                        <p class="info_font_reserveren">Reserveren</p>
                    </div>
                </div>
                <div class="form_plek">
                    <form action="php/reserverenbackend.php" method="post">
                        <div class="label_blok">
                            <label class="labels" for="naam">Naam</label>
                        </div>
                        <div class="form_text_blokken">
                            <input class="clear_forms form_invul_veld" name="naam" type="text">
                        </div>
                        <div class="label_blok">
                            <label class="labels" for="naam">Email</label>
                        </div>
                        <div class="form_text_blokken">
                            <input class="clear_forms form_invul_veld" name="email" type="email">
                        </div>
                        <div class="label_blok">
                            <label class="labels" for="naam">Mensen</label>
                        </div>
                        <div class="form_text_blokken">
                            <input class="clear_forms form_invul_veld" name="mensen" type="text">
                        </div>
                        <div class="label_blok">
                            <label class="labels" for="naam">Opmerking</label>
                        </div>
                        <div class="form_text_blokken">
                            <input class="clear_forms form_invul_veld" name="opmerking" type="text">
                        </div>
                        <div class="label_blok">
                            <label class="labels" for="">Datum</label>
                        </div>
                        <div class="form_text_blokken">
                            <input class="clear_forms form_invul_veld" name="datum" type="datetime-local">
                        </div>
                        <div class="label_blok"></div>
                        <div class="form_text_blokken">
                            <input class="clear_forms form_invul_veld" type="submit" name="submit" value="verzenden">
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </section>

    <?php include("includes/login.php"); ?>

    <?php include("includes/footer.php"); ?>

    <script src="js/main.js"></script>

</body>
</html>
