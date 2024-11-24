

<?php
 
  $current_page = basename($_SERVER['PHP_SELF']);
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/images/logo.png" type="image/png">
    <title>VetiPlus</title>
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/navbar.css" type="text/css">
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/profile.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
    <?php include_once "../../components/common/admin/message.php" ?>

    <!-- Include navbar -->
    <?php include '../../components/common/owner/navbar.php'; ?>

    <section class="home">
        <div class="profile_top">
            <div class="profile_top_inside">
                <div class="profile_top_inside_left">
                    <img src="../../assets/images/user.png" alt="">
                </div>
                    <table>
                        <tr>
                            <td>Full Name</td>
                            <td>:-</td>
                            <td>Ramesh Peshala</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:-</td>
                            <td>rameshpeshala84@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td>:-</td>
                            <td>0762163506</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:-</td>
                            <td>419,Gangasirigama , Thissamaharama</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="profile_down">
                                    <button onclick="openModal()">Edit Profile</button>
                                </div>
                            </td>
                        </tr>
                    </table>
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
</section>
<script src="../../assets/jsFIles/Admin/changePassword.js"></script>

</body>
</html>