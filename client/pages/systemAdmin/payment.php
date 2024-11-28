<?php

$current_page = basename($_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/images/logo.png" type="image/png">
    <title>VetiPlus</title>
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/navbar.css" type="text/css">
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/payment.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Include navbar -->
    <?php include '../../components/common/admin/navbar.php'; ?>

    <section class="home">
        <div class="payment">
            <div class="payment-inside">
                <div class="payment-inside-top">
                    <h2>Daily Transactions</h2>
                    <h3>Rs.2000</h3>
                </div>
                <div class="payment-inside-top">
                    <h2>Total Users</h2>
                    <h3>1256</h3>
                </div>
                <div class="payment-inside-top">
                    <h2>Total Transactions</h2>
                    <h3>Rs.100 000</h3>
                </div>
            </div>
            <div class="Payment-outside">
                <form action="">
                    <div class="Payment-outside-top">
                        <input type="text" placeholder="Enter User ID">

                        <input type="text" placeholder="Enter Pet ID">

                        <input type="date" placeholder="Enter Date">
                    </div>
                    <div class="Payment-outside-down">
                        <button type="button" onclick="window.location.href='paymentProfile.php'">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>