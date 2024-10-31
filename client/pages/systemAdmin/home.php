<?php
// Get the current filename
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/navbar.css">
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/home.css">
    <title>Salon System</title>
</head>
<body>
<div class="admin-navbar"> 
    <div class="admin-navbar-inside-left-inner">
        <img src="../../assets/images/logo.jpeg" alt="">
        <h1>VETIPLUS</h1>
    </div>
</div>
<div class="admin-navbar-inside">
    <div class="admin-navbar-inside-left">
        <div>
            <div class="admin-navbar-inside-left-inner-1">
                <ul>
                    <li>
                        <img src="../../assets/images/image_1.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <div class="<?= ($current_page == 'home.php') ? 'admin-navbar-inside-left-inner-2 active' : 'admin-navbar-inside-left-inner-2' ?>">
                            <a href="home.php">Dashboard</a>
                        </div>
                    </li>

                    <li>
                        <img src="../../assets/images/image_2.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <div class="<?= ($current_page == 'accountDashboard.php') ? 'admin-navbar-inside-left-inner-2 active' : 'admin-navbar-inside-left-inner-2' ?>">
                            <a href="accountDashboard.php">Accounts</a>
                        </div>
                    </li>

                    <li>
                        <img src="../../assets/images/image_3.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <div class="<?= ($current_page == 'appointment.php') ? 'admin-navbar-inside-left-inner-2 active' : 'admin-navbar-inside-left-inner-2' ?>">
                            <a href="appointment.php">Appointment</a>
                        </div>
                    </li>

                    <li>
                        <img src="../../assets/images/image_4.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <div class="<?= ($current_page == 'payment.php') ? 'admin-navbar-inside-left-inner-2 active' : 'admin-navbar-inside-left-inner-2' ?>">
                            <a href="payment.php">Payment Transactions</a>
                        </div>
                    </li>

                    <li>
                        <img src="../../assets/images/image_5.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <div class="<?= ($current_page == 'feedback.php') ? 'admin-navbar-inside-left-inner-2 active' : 'admin-navbar-inside-left-inner-2' ?>">
                            <a href="feedback.php">Feedback</a>
                        </div>
                    </li>

                    <li>
                        <img src="../../assets/images/image_6.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <div class="<?= ($current_page == 'complain.php') ? 'admin-navbar-inside-left-inner-2 active' : 'admin-navbar-inside-left-inner-2' ?>">
                            <a href="complain.php">Complain & Issues</a>
                        </div>
                    </li>

                    <li>
                        <img src="../../assets/images/image_7.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <div class="<?= ($current_page == 'salonSystem.php') ? 'admin-navbar-inside-left-inner-2 active' : 'admin-navbar-inside-left-inner-2' ?>">
                            <a href="salonSystem.php">Salon System</a>
                        </div>
                    </li>

                    <li>
                        <img src="../../assets/images/image_7.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <div class="<?= ($current_page == 'profile.php') ? 'admin-navbar-inside-left-inner-2 active' : 'admin-navbar-inside-left-inner-2' ?>">
                            <a href="profile.php">Profile</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <br><br>
        <button type="button" title="Click me">Logout</button>
    </div>
        <div class="home-before">
        <div class="home">
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
                    <h2>Total transactions</h2>

                </div>
                <div class="home-below-inside">
                    <h2>Total Salon </h2>

                </div>
            </div>
            
        </div>
    </div>
    
</body>
</html>