<?php

$current_page = basename($_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/images/logo.png" type="image/png">
    <title>Profile </title>
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/navbar.css" type="text/css">4
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/profile.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Include navbar -->
    <?php include '../../components/common/admin/navbar.php'; ?>

    <section class="home">
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
    </section>
    <script src="../../assets/jsFIles/Admin/changePassword.js"></script>
</body>

</html>