<?php
// Get the current filename to apply active class
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/navbar.css">
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/appointment.css">
   
    <title>Appoinment</title>
</head>
<body>
<div class="admin-navbar"> 
    <div class="admin-navbar-inside-left-inner">
        <img src="../../assets/images/admin_logo.png" alt="">
        <h1>VETIPLUS</h1>
    </div>
</div>
<div class="admin-navbar-inside">
    <div class="admin-navbar-inside-left">
        <div>
            <div class="admin-navbar-inside-left-inner-1">
                <ul>
                    
                    <li class="<?= ($current_page == 'home.php') ? 'active' : '' ?>">
                        <img src="../../assets/images/image_1.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="home.php">Dashboard</a>
                    </li>

                    <li class="<?= ($current_page == 'accountDashboard.php') ? 'active' : '' ?>">
                        <img src="../../assets/images/image_2.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="accountDashboard.php">Accounts</a>
                    </li>

                    <li class="<?= ($current_page == 'appointment.php') ? 'active' : '' ?>">
                        <img src="../../assets/images/image_3.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="appointment.php">Appointment</a>
                    </li>

                    <li class="<?= ($current_page == 'payment.php') ? 'active' : '' ?>">
                        <img src="../../assets/images/image_4.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="payment.php">Payment Transactions</a>
                    </li>

                    <li class="<?= ($current_page == 'feedback.php') ? 'active' : '' ?>">
                        <img src="../../assets/images/image_5.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="feedback.php">Feedback</a>
                    </li>

                    <li class="<?= ($current_page == 'complain.php') ? 'active' : '' ?>">
                        <img src="../../assets/images/image_6.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="complain.php">Complain & Issues</a>
                    </li>

                    <li class="<?= ($current_page == '') ? 'active' : '' ?>">
                    <img src="../../assets/images/image_12.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="">System</a>
                        <div class="dropdown">
                            <a href="../systemAdmin/salonSystem.php">Salon System</a>
                            <a href="doctorSystem.php">Doctor System</a>
                        </div>
                    </li>

                    <li class="<?= ($current_page == 'profile.php') ? 'active' : '' ?>">
                        <img src="../../assets/images/image_11.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="profile.php">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        <br><br>
        <button type="button" title="Click me" onclick="openLogout()">Logout</button>
    </div>
    <div class="Appoinment">
        <div class="Appoinment-inside">
            <div class="Appoinment-inside-left">
                <h2>Daily Appointment</h2>
                <h2>345</h2>
            </div>
            <div class="Appoinment-inside-right">
                <h2>Daily Cancel Appointment</h2>
                <h2>23</h2>
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
</div>
<div id="modal" class="modalbackground" style="display: none;">
        <div class="modalcontent">
            <p>Do you want to Logout?</p>
            <div class="modalbuttons">
                <button onclick="confirmLogout()">Yes</button>
                <button onclick="closeLogout()">No</button>
            </div>
        </div>
    </div>
    <script src="../../assets/jsFIles/Admin/logout.js"></script> 
</body>
</html>
