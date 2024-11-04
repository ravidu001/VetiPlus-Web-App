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
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/complain.css">
    <title>Complain</title>
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
       <div class="complain">
        <table>
            <thead>
              <tr>
                <th>User's Name</th>
                <th>Complain Message</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Ramesh Peshala</td>
                <td>It is a long established fact that a reader will be...</td>
                <td><a href="#"><img src="../../assets/images/image_12.png" alt="View Message"></a></td>
              </tr>
              <tr>
                <td>Ramesh Peshala</td>
                <td>It is a long established fact that a reader will be...</td>
                <td><a href="#"><img src="../../assets/images/image_12.png" alt="View Message"></a></td>
              </tr>
              <tr>
                <td>Ramesh Peshala</td>
                <td>It is a long established fact that a reader will be...</td>
                <td><a href="#"><img src="../../assets/images/image_12.png" alt="View Message"></a></td>
              </tr>
              <tr>
                <td>Ramesh Peshala</td>
                <td>It is a long established fact that a reader will be...</td>
                <td><a href="#"><img src="../../assets/images/image_12.png" alt="View Message"></a></td>
              </tr>
              <tr>
                <td>Ramesh Peshala</td>
                <td>It is a long established fact that a reader will be...</td>
                <td><a href="#"><img src="../../assets/images/image_12.png" alt="View Message"></a></td>
              </tr>
              <tr>
                <td>Ramesh Peshala</td>
                <td>It is a long established fact that a reader will be...</td>
                <td><a href="#"><img src="../../assets/images/image_12.png" alt="View Message"></a></td>
              </tr>
              <tr>
                <td>Ramesh Peshala</td>
                <td>It is a long established fact that a reader will be...</td>
                <td><a href="#"><img src="../../assets/images/image_12.png" alt="View Message"></a></td>
              </tr>
            </tbody>
          </table>

       </div>
    </div>
    
</body>
</html>