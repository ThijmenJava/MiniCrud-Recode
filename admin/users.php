<?php

include("../includes/session.php");
include("../php/showusers.php");

$name = $_SESSION['name'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users | Welcome <?php echo $name?></title>
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
</head>
<body>

    <?php include("../includes/admin/headeradmin.php"); ?>

    <section class="main_section">
        <main class="standaard_section flex_wrap">
            <div class="foto_pizza_menucdu background_img_users">

            </div>
            <div class="inhoud_menucdu">
                <div class="buttons_menucdu flex_wrap">
                    <div class="container_button_menucdu">
                        <button class="button_menucdu" id="gerechtbutton">Add User</button>
                    </div>
                </div>
                <div class="container_menucdu">
                    <table class="border_table table_res">
                        <tr class="border_buttom_tabel">
                            <th>ID</th>
                            <th>Naam</th>
                            <th>Wachtwoord</th>
                            <th>Email</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <?php showUser(); ?>
                    </table>
                </div>
            </div>
        </main>
    </section>

    <div id="div_product_aanmaken" class="product_aanmaken_plek">
        <div class="product_form_aanmaken" id="divformproduct">
            <div class="header_product">
                <h2 class="font_size_25">Account Aanmaken</h2>
            </div>
            <div class="container_form_menucdu">
                <form class="form_auto" action="../php/createaccount.php" method="post" enctype="multipart/form-data">
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
                            <p class="font_product">Wachtwoord</p>
                        </div>
                        <div>
                            <input name="wachtwoord" class="input_menucdu clear_forms font_product" type="text" placeholder="Wachtwoord">
                        </div>
                    </div>
                    <div class="input_menucdu_plek">
                        <div class="label_plek_menucdu">
                            <p class="font_product">Email</p>
                        </div>
                        <div>
                            <input name="email" class="input_menucdu clear_forms font_product" type="text" placeholder="Email">
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
