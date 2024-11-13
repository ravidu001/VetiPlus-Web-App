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
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/payment_list.css">
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
                        <a href="">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        <br><br>
        <button type="button" title="Click me" onclick="openLogout()">Logout</button>
    </div>
    <div class="payment-profile">
        <div class="payment-profile-inside">
            <div class="payment-profile-inside-left">
               <img src="../../assets/images/image_8.jpg" alt="">
            </div>
            <div class="payment-profile-inside-right">
                <div class="payment-profile-inside-right-top">
                    <h2>Holder's Name   &nbsp; &nbsp; &nbsp;  &nbsp; -:&nbsp; Ramesh Peshala </h2>
                    <h2>Account Number &nbsp;  &nbsp; -:&nbsp; 061200140007057 </h2>
                    <h2>Exprie date  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -:&nbsp; 25/28</h2>
                    <h2>CVV  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;-:&nbsp; 199 </h2>
                </div>
            </div>

        </div>
        <div class="payment-profile-outside">
            <div class="container">
                <table>
                  <thead>
                    <tr>
                      <th>Payment ID</th>
                      <th>Appoinment ID</th>
                      <th>Date</th>
                      <th>Doctor Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>220022</td>
                      <td>22001557</td>
                      <td>2024/04/07</td>
                      <td>Ravindu Piris</td>
                      
                    </tr>
                    <tr>
                      <td>220022</td>
                      <td>22001557</td>
                      <td>2024/04/07</td>
                      <td>Ravindu Piris</td>
                    </tr>
                    <tr>
                      <td>220022</td>
                      <td>22001557</td>
                      <td>2024/04/07</td>
                      <td>Ravindu Piris</td>
                    </tr>
                    <tr>
                      <td>220022</td>
                      <td>22001557</td>
                      <td>2024/04/07</td>
                      <td>Ravindu Piris</td>
                    </tr>
                    <tr>
                      <td>220022</td>
                      <td>22001557</td>
                      <td>2024/04/07</td>
                      <td>Ravindu Piris</td>
                    </tr>
                  </tbody>
                </table>
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