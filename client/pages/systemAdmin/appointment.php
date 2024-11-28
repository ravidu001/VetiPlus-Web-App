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
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/appointment.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Include navbar -->
    <?php include '../../components/common/admin/navbar.php'; ?>

    <section class="home">
        <div class="Appoinment-inside">
            <div class="Appoinment-inside-left">
                <h2>Daily Appointment</h2>
                <h2>345</h2>
            </div>
            <div class="Appoinment-inside-left">
                <h2>Daily Cancel Appointment</h2>
                <h2>23</h2>
            </div>
            <div class="Appoinment-inside-left">
                <h2>Total Appointment</h2>
                <h2>2356</h2>
            </div>
        </div>
        <div class="Appoinment-outside">
            <form action="">
                <div class="Appoinment-outside-top">
                    <input type="text" placeholder="Enter User ID">
                    <input type="text" placeholder="Enter Pet ID">
                    <input type="date" placeholder="Enter Date">
                </div>
                <div class="Appoinment-outside-down">
                    <button type="button" onclick="window.location.href='appointment_list.php'">Search</button>
                </div>
            </form>
        </div>
        </div>
    </section>
</body>

</html>