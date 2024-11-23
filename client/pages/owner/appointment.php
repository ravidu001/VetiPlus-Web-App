

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
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/navbar.css" type="text/css">4
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/appointment.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
    <?php include_once "../../components/common/admin/message.php" ?>

    <!-- Include navbar -->
    <?php include '../../components/common/owner/navbar.php'; ?>

    <section class="home">
    <div class="Appoinment">
        <div class="Appoinment-inside">
            <div class="Appoinment-inside-left">
                <h2>Daily Appointment</h2>
                <h2>45</h2>
            </div>
            <div class="Appoinment-inside-left">
                <h2>Cancel Appointment</h2>
                <h2>15</h2>
            </div>
            <div class="Appoinment-inside-left">
                <h2>Total Appointment</h2>
                <h2>523</h2>
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
                    <a href="appointment_list.php">Search</a>
                </div>
            </form>
        </div>
    </div>
    </section>
</body>
</html>