<?php
    session_start(); 
    include '../../../config.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
        <link rel="icon" href="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" type="image/png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/colourPalette.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/styles.css" rel="stylesheet">
        
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/navBar.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/myFooter.css" rel="stylesheet">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/poppinsFont.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/common/contactUs.css" rel="stylesheet">
        
    </head>
    <body>
        <!-- navbar on top: -->
        <?php include INCLUDE_BASE.'/client/components/petOwner/userNavbar.php'; ?>

        <!-- static contact us text -->
        <?php include INCLUDE_BASE.'/client/components/common/staticContactUs.php'; ?>

        <!-- system feedback form -->
        <?php include INCLUDE_BASE.'/client/components/common/systemFeedbackForm.php'; ?>

        <!-- footer at page's bottom: -->
        <?php include INCLUDE_BASE.'/client/components/petOwner/userFooter.php'; ?>

    </body>
</html>