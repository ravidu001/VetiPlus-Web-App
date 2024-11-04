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
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/paymentProfile.css">
    <title>Payment Profile</title>
</head>
<body>
<div class="admin-navbar"> 
    <div class="admin-navbar-inside-left-inner">
        <img src="../../assets/images/logo.png" alt="">
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

                    <li class="<?= ($current_page == 'salonSystem.php') ? 'active' : '' ?>">
                        <img src="../../assets/images/image_7.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="salonSystem.php">Salon System</a>
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
       <div class="payment-profile">
        <div class="payment-profile-inside">
            <div class="payment-profile-inside-left">
               <img src="../../assets/images/image_8.jpg" alt="">
            </div>
            <div class="payment-profile-inside-right">
                <div class="payment-profile-inside-right-top">
                    <h2>Holder's Name   &nbsp; &nbsp; &nbsp;  &nbsp; -: </h2>
                    <h2>Account Number &nbsp;  &nbsp; -: </h2>
                    <h2>Exprie date  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -:</h2>
                    <h2>CVV  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;-: </h2>
                </div>
                <div class="payment-profile-inside-right-down">
                   <button>Reset Payment Details</button>
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
    
</body>
</html>