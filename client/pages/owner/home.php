<?php
// Get the current filename
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/home.css">
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/ownerNavbar.css">
   <title>Dashboard</title>
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

                    <li class="<?= ($current_page == 'account.php') ? 'active' : '' ?>">
                    <img src="../../assets/images/image_2.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="account.php">Accounts</a>
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
                    <li class="<?= ($current_page == '') ? 'active' : '' ?>">
                    <img src="../../assets/images/Owner/add_member.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="">Add Admin</a>
                    </li>

                    <li class="<?= ($current_page == '') ? 'active' : '' ?>">
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
    <div class="home">
        <div class="home-inside-inner">
            <div class="home-inside-left">
                <img src="../../assets/images/image_8.jpg" alt="">
                <div class="home-inside-left-top">
                    <h1>Welcome Back</h1>
                    <h3>Ramesh Peshala</h3>
                </div>
            </div>
            <div class="home-inside-right">
                <img src="../../assets/images/image_9.png" alt="">
            </div>
        </div>
            <div class="home-inside">
                <div class="home-inside-middle">
                   <h2>Active Account</h2>
                   <h3>1.2K</h3>
                </div>
                <div class="home-inside-middle">
                    <h2>Active Users</h2>
                    <h3>1.2K</h3>
                </div>
                <div class="home-inside-middle">
                     <h2>Total Users</h2>
                     <h3>10.2K</h3>
                </div>
            </div>
        <div class="home-inside">
             <div class="home-inside-down">
             <h4>Pet Type</h4>
                <p>Dog <span class="bar"></span></p>
                <p>Cat <span class="bar short"></span></p>
                <p>Pig <span class="bar shorter"></span></p>
             </div>
             <div class="home-inside-top">
                <h4>Monthly Revenue</h4>
             </div>
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