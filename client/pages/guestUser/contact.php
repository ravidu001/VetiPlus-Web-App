<?php
    include '../../../config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
        <link rel="icon" href="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" type="image/png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/colourPalette.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/styles.css" rel="stylesheet">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/navBar.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/myFooter.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/hero.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/common/staticContactUs.css" rel="stylesheet">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    </head>
    <body>

        <!-- navbar on top: -->
        <?php include INCLUDE_BASE.'/client/components/guestUser/guestNavbar.php'; ?>

        <div class="hero-section">
            <div>
                <header>Contact Us:</header>
                <p>
                    Get to know more about us.
                </p>
            </div>
            <img class="heroImg" src="../../assets/images/guestUser/guestHeroes/contactUsHero.png" alt="">
        </div>

        <?php include INCLUDE_BASE.'/client/components/guestUser/guestStaticContactUs.php'; ?>

        <!-- footer at page's bottom: -->
        <?php include INCLUDE_BASE.'/client/components/guestUser/guestFooter.php'; ?>

    </body>
</html>
