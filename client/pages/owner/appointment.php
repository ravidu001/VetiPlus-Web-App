

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
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/navbar.css" type="text/css">
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
            <div>
            <i class='bx bx-calendar-check icon'></i>
             </div>
             <div>
             <h2>Daily Appointment</h2>
             <h3>45</h3>
             </div>
            </div>
            <div class="Appoinment-inside-left">
            <div>
            <i class='bx bx-calendar-check icon'></i>
             </div>
             <div>
             <h2>Monthly Appointment</h2>
             <h3>30</h3>
             </div>
            </div>
            <div class="Appoinment-inside-left">
            <div>
            <i class='bx bx-calendar-check icon'></i>
             </div>
             <div>
             <h2>Monthly Cancel Appointment</h2>
             <h3>567</h3>
             </div>
            </div>
            <div class="Appoinment-inside-left">
            <div>
            <i class='bx bx-calendar-x icon'></i>
             </div>
             <div>
             <h2>Cancel Appointment</h2>
             <h3>45</h3>
             </div>
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