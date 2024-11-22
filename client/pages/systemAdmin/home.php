<?php

$current_page = basename($_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/images/logo.png" type="image/png">
    <title>Profile </title>
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/navbar.css" type="text/css">4
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/home.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Include navbar -->
    <?php include '../../components/common/admin/navbar.php'; ?>

    <section class="home">
        <div class="home-before">
            <div class="home-1">
                <div class="home-inside">
                    <img src="../../assets/images/image_8.jpg" alt="">
                    <div>
                        <h1>Ramesh Peshala</h1>
                        <h2>System Admin</h2>
                    </div>

                </div>
                <div class="home-inside-right">
                    <img src="../../assets/images/image_9.png" alt="">
                </div>
            </div>
            <div class="home-after">
                <div class="home-after-inside">
                    <h2>Total Account</h2>
                    <h2>2345</h2>
                    <div class="home-after-inside-upper">
                        <div>
                            <h3>Users</h3>
                            <h3>234</h3>
                        </div>
                        <div>
                            <h3>Pets</h3>
                            <h3>231</h3>
                        </div>
                    </div>
                </div>
                <div class="home-after-outer">
                    <h2>Total Appointment</h2>
                    <h2>4561</h2>
                </div>
            </div>
            <div class="home-below">
                <div class="home-below-inside">
                    <h2>Total Transactions</h2>
                    <h2>234</h2>
                </div>
                <div class="home-below-inside">
                    <h2>Total Salon </h2>
                    <h2>102</h2>
                </div>
            </div>
        </div>
    </section>
</body>

</html>