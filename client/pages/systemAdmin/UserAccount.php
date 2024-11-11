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
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/userAccount.css">
    <title>User Account</title>
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
        <button type="button" title="Click me">Logout</button>
    </div>
        <div class="user-account">

            <div class="user-account-inside">
                <div class="user-account-inside-left">

                    <img src="../../assets/images/image_8.jpg" alt="">

                </div>
                <div class="user-account-inside-right">
                    
                    <h2>Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; Ramesh Peshala</h2>
                    <h2>Email  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; rameshpeshala84@gmail.com</h2>
                    <h2>Address     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:- &nbsp; 419,gangasirigama,Thissamaharama</h2>
                    <h2>Contact Number  &nbsp; &nbsp;:- &nbsp; 0762163506</h2>
                    <h2>ID Number   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  :- &nbsp; 200212702901</h2>
                    <h2>User ID   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; 22001557</h2>
                </div>

            </div>
            <div class="user-account-outside">
                <div class="user-account-outside-left"id="main-content">

                <button onclick="openConfirmModal()">Reset Password</button>
                    <button onclick="openDeleteModal()">Delete Account</button>
                    <button onclick="window.location.href='petAccount.php'">Pet Data</button>

                </div>
                <div class="user-account-outside-right">

                    <h2>Total Appointment  &nbsp;  &nbsp; :- &nbsp; &nbsp; &nbsp; 456</h2>
                    <h2>Cancel Appointment  &nbsp; :-  &nbsp; &nbsp; &nbsp; 23</h2>

                </div>
            </div>

            
        </div>
        <div id="modal" class="modal-background" style="display: none;">
        <div class="modal-content">
            <p>Do you want to reset your password?</p>
            <div class="modal-buttons">
                <button onclick="confirmReset()">Yes</button>
                <button onclick="pcloseModal()">No</button>
            </div>
        </div>
    </div>

    <div id="confirmationModal" class="modal-background" style="display: none;">
        <div class="modal-content">
            <p class="confirmation-message">Password reset process initiated</p>
        </div>
    </div>

    <div id="deleteModal" class="modal-background" style="display: none;">
        <div class="modal-content">
            <p>Do you want to delete this account?</p>
            <div class="modal-buttons">
                <button onclick="openPasswordModal()">Yes</button>
                <button onclick="closeModal()">No</button>
            </div>
        </div>
    </div>
    <div id="passwordModal" class="modal-background" style="display: none;">
        <div class="modal-content">
            <p>Enter your password:</p>
            <input type="password" id="password" class="password-input" placeholder="Password">
            <div class="modal-buttons">
                <button onclick="initiateProcess()">Submit</button>
                <button onclick="closeModal()">Cancel</button>
            </div>
        </div>
    </div>
    <div id="dconfirmationModal" class="modal-background" style="display: none;">
        <div class="modal-content">
            <p class="confirmation-message">Process initiated</p>
        </div>
    </div>
</div>
<script src="../../assets/jsFIles/Admin/passwordReset.js"></script>
<script src="../../assets/jsFIles/Admin/deleteaccount.js"></script>
</body>
</html>