<?php
// Get the current filename
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/ownerNavbar.css">
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/adminRegistration.css">
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
                    <li class="<?= ($current_page == 'addAdmin.php') ? 'active' : '' ?>">
                    <img src="../../assets/images/Owner/add_member.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="addAdmin.php">Add Admin</a>
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
    <div class="admin-regi">
        <div class="admin-regi-top">
            <h1>Admin Registration Form</h1>
        </div>
        <div>
            <form action="" method="POST">
                <div class="admin-regi-inside">
                    <div class="admin-regi-inside-left">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fname" placeholder="First Name" required>
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" placeholder="Phone Number" required>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
                    </div>
                    <div class="admin-regi-inside-left">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lname" placeholder="Last Name" required>
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Address" required>
                        <label for="city">Gender</label>
                        <input type="text" id="gender" name="gender" placeholder="Gender" required>
                        <label for="state">Date of Birth</label>
                        <input type="text" id="state" name="state" placeholder="State" required>
                        <label for="state">NIC</label>
                        <input type="text" id="nic" name="nic" placeholder="NIC" required>
                    </div>
                </div>
                <div class="admin-regi-down">
                    <h1>Certificate</h1>
                    <div class="admin-regi-down-inside">
                        <input type="file" id="certificate" name="certificate" required>
                        <input type="file" id="certificate" name="certificate" required>
                        <input type="file" id="certificate" name="certificate" required>
                    </div>
                </div> 
                <div class="admin-regi-bottom">
                    <button type="submit" name="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>