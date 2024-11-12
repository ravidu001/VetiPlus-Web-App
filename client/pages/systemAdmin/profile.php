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
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/profile.css">
    <title>Admin Profile</title>
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
                            <a href="salonSystem.php">Salon System</a>
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
    <div class="profile">
        <div class="profile_top">
            <div class="profile_top_inside">
                <div class="profile_top_inside_left">
                    <img src="../../assets/images/image_8.jpg" alt="">
                </div>
                <div class="profile_top_inside_right">
                    <h2>Full Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :- &nbsp;&nbsp; Ramesh Peshala</h2>
                    <h2>Date of Birth &nbsp;&nbsp;&nbsp; :- &nbsp;&nbsp;2002/05/09</h2>
                    <h2>Email &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-&nbsp;&nbsp; rameshpeshala84@gmail.com</h2>
                    <h2>Phone Number &nbsp;:-&nbsp;&nbsp;&nbsp; 0762163506</h2>
                    <h2>Address &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;:- &nbsp;&nbsp; 419,Gangasirigama , Thissamaharama</h2>
                    <h2>Gender &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp;&nbsp; Male</h2>
               </div>
            </div>
        </div>
        <div class="profile_down">
            <button onclick="openModal()">Edit Profile</button>
        </div>
    </div>
</div>
<div id="passwordModal" class="modal">
    <div class="modal-content">
        <div class="modal-content-inside">
            <h3>Do you want to change your password?</h3>
            <span class="close" onclick="closeModal()">&times;</span>
        </div>
            <button onclick="showPasswordForm()">Yes</button>
            <button onclick="closeModal()">No</button>
        <div id="passwordForm" style="display: none;">
            <h3>Change Password</h3>
            <form onsubmit="changePassword(event)">

                <input type="password" id="newPassword" placeholder="Enter new Password" required><br><br>

                <input type="password" id="confirmPassword" placeholder="Confirm new Password" required><br><br>

                <button type="submit">Change Password</button>
            </form>
        </div>
        <div id="successMessage" style="display: none;">
            <h3>Password chnaged successfully</h3>
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
<script src="../../assets/jsFIles/Admin/changePassword.js"></script>
</body>
</html>