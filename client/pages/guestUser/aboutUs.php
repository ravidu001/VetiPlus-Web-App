<?php
    include '../../../config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <title>About Us</title>
        <link rel="icon" href="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" type="image/png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/colourPalette.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/styles.css" rel="stylesheet">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/navBar.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/myFooter.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/hero.css" rel="stylesheet">

        
        <link href="<?= BASE_PATH ?>//client/assets/cssFiles/common/aboutPage.css" rel="stylesheet">


        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
        
    </head>
    <body>

        <!-- navbar on top: -->
        <?php include INCLUDE_BASE.'/client/components/guestUser/guestNavbar.php'; ?>

        <div class="hero-section">
            <div>
                <header>About Us:</header>
                <p>Get to know the VetiPlus family.</p>
            </div>
            <img class="heroImg" src="../../assets/images/guestUser/guestHeroes/aboutUsHero.png" alt="">
        </div>

        <?php include INCLUDE_BASE.'/client/components/common/aboutUsContent.php'; ?>

        <!-- footer at page's bottom: -->
        <?php include INCLUDE_BASE.'/client/components/guestUser/guestFooter.php'; ?>

    </body>
</html>


<link href="<?= BASE_PATH.'/client/assets/cssFiles/common/colourPalette.css'?>" rel="stylesheet">
<link href="<?= BASE_PATH.'/client/assets/cssFiles/common/styles.css'?>" rel="stylesheet">

<link href="<?= BASE_PATH.'/client/assets/cssFiles/common/navBar.css'?>" rel="stylesheet">
<link href="<?= BASE_PATH.'/client/assets/cssFiles/common/myFooter.css'?>" rel="stylesheet">
<link href="<?= BASE_PATH.'/client/assets/cssFiles/common/hero.css'?>" rel="stylesheet">

<link href="<?= BASE_PATH.'/client/assets/cssFiles/common/aboutPage.css'?>" rel="stylesheet">