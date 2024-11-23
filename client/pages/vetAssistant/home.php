<?php
    session_start();
    include (__DIR__ . '/../../../server/config/config.php');
    
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../../../client/pages/login-signup/login.php");
        exit();
    }

    $user_id = $_SESSION['user_id'];
    // login page eka nthuwa meka wdada
    // $_SESSION['user_id'] = abc@gmail.com;
    // $user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/images/logo.png" type="image/png">
    <title>Home Page</title>
    <link rel="stylesheet" href="../../../client/assets/cssFiles/common/navbarHorizontal.css" type="text/css">
    <link rel="stylesheet" href="../../../client/assets/cssFiles/vetDoctor/homecontent.css" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <!-- Include navbar -->
    <?php include 'navbar.php'; ?>

    <section class="home">
       <?php include 'homecontent.php'; ?>
    </section>

</body>
</html>