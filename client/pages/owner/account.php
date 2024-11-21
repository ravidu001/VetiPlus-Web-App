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
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/account.css">
   <title>Account</title>
</head>
<body>
<?php include_once "../../components/common/admin/message.php" ?>
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
    <div class="accounts">
        <div class="accounts-inside">
            <div class="accounts-inside-left">
                <h2>Total Accounts</h2>
                <h2>345</h2>
            </div>
            <div class="accounts-inside-left">
                <h2>Active Accounts</h2>
                <h2>345</h2>
            </div>
            <div class="accounts-inside-left">
                <h2>Delete Accounts</h2>
                <h2>23</h2>
            </div>
        </div>
       
            <div class="account-inside-upper" >
                <div class="account-inside-upper-1">
                    <h3>Users  Accounts</h3>
                </div>
                <div class="account-inside-upper-1">
                    <h3>Pets  Accounts</h3>
                </div>
            </div>
            <div class="account-inside-lower">
                <div class="account-inside-lower-left">
                    <form action="">
                        <label for="searchInput"></label>
                        <input type="text" id="searchInput" title="Search Input" placeholder="Enter User ID">
                        <label for="searchInput"></label>
                        <a href="./userAccount.php">Search</a>
                    </form>   
                </div>
                <div class="account-inside-lower-right">
                    <form action="">
                        <label for="searchInput"></label>
                        <input type="text" id="searchInput" title="Search Input" placeholder="Enter User ID">
                        <label for="searchInput"></label>
                        <a href="./petAccount.php">Search</a> 
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