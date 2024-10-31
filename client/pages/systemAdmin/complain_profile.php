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
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/complain_profile.css">
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
     <div class="complain_profile">
        <div class="complain_profile_top">
            <div class="complain_profile_top_left">
                <img src="../../assets/images/image_8.jpg" alt="">
            </div>
            <div class="complain_profile_top_right">
                <div class="complain_profile_top_right_inner">
                    <h3>Name : </h3>
                    <h3>Email : </h3>
                    <h3>Contact Number : </h3>
                    <h3>Date : </h3>
                </div>
                <div class="complain_profile_top_right_inner">
                    <h3>Ramesh Peshala</h3>
                    <h3>rameshpeshala84@gmail.com</h3>
                    <h3>0762163506</h3>
                    <h3>2022/05/06</h3>
                </div>
            </div>
        </div>
        <div class="complain_profile_down">
            <div class="complain_profile_down_inner">
                <h1>Complain Massage</h1>
                &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, obcaecati quis voluptatem veritatis rerum quaerat quod qui perferendis omnis fugiat!</h4>
            </div>
            <div class="complain_profile_down_inner">
                <h1>Complain Image</h1>
                <img src="../../assets/images/image_8.jpg" alt="">
                <img src="../../assets/images/image_8.jpg" alt="">
                <img src="../../assets/images/image_8.jpg" alt="">
                <img src="../../assets/images/image_8.jpg" alt="">
            </div>
        </div>
     </div>
    </div>
</body>
</html>