<?php
$current_page = basename($_SERVER['PHP_SELF']);

include(__DIR__ . '/../../../server/config/backendConfig.php');
include(__DIR__ . '/../../../server/controllers/Owner/selectAdmin.php');
include(__DIR__ . '/../../../server/controllers/Owner/deleteAdmin.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/ownerNavbar.css">
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/adminProfile.css">
    <title>Admin Profile</title>
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
        <div class="profile">
            <div class="profile_top">
                <div class="profile_top_inside">
                    <div class="profile_top_inside_left">
                        <img src="../../assets/images/image_8.jpg" alt="">
                    </div>
                    <div class="profile_top_inside_right">
                        <?php if (!empty($admin)): ?>
                            <h2>Full Name &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; <?= htmlspecialchars($admin['name']); ?></h2>
                            <h2>Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; <?= htmlspecialchars($admin['email']); ?></h2>
                            <h2>Phone Number :- &nbsp; <?= htmlspecialchars($admin['contactNumber']); ?></h2>
                            <h2>Address &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; <?= htmlspecialchars($admin['address']); ?></h2>
                            <h2>Gender &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; :- &nbsp; <?= htmlspecialchars($admin['gender']); ?></h2>
                            <h2>NIC &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; :- &nbsp; <?= htmlspecialchars($admin['NIC']); ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="profile_down">
                <button onclick="window.location.href='editProfile.php?email=<?= urlencode($admin['email']); ?>'">Edit Profile</button>
                <form method="post" class="delete-form" action="../../../server/controllers/Owner/deleteAdmin.php">
                    <input type="hidden" name="email" value="<?= htmlspecialchars($admin['email']); ?>">
                    <button type="submit" name="delete" value="DELETE">Delete</button>
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
    <script src="../../assets/jsFIles/Owner/messageHandler.js"></script>c

</body>
</html>