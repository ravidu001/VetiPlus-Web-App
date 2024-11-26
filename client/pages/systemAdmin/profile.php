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
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/navbar.css" type="text/css">
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/profile.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Include navbar -->
    <?php include '../../components/common/admin/navbar.php'; ?>

    <section class="home">
        <div class="profile_top">
            <div class="profile_top_inside">
                <div class="profile_top_inside_left">
                    <img src="../../assets/images/user.png" alt="">
                </div>
                <table>
                    <tr>
                        <td>
                            <div class="regi-icon">
                                <i class='bx bxs-user-circle icon'></i>
                                <label for="name"> Name</label>
                            </div>
                        </td>
                        <td>
                            <h3>Ramesh Peshala</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="regi-icon">
                                <i class='bx bxs-envelope icon'></i>
                                <label for="email">Email</label>
                            </div>
                        </td>
                        <td>
                            <h3>rameshpeshala84@gmail.com</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="regi-icon">
                                <i class='bx bxs-home icon'></i>
                                <label for="address">Address</label>
                            </div>
                        </td>
                        <td>
                            <h3>419,Gangasirigama,Thissamaharama</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="regi-icon">
                                <i class='bx bxs-phone icon'></i>
                                <label for="phone_number">Phone Number</label>
                            </div>
                        </td>
                        <td>
                            <h3>0762163506</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="regi-icon">
                                <i class='bx bxs-message-check icon'></i>
                                <label for="nic">NIC</label>
                            </div>
                        </td>
                        <td>
                           <h3>200212702901</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="regi-icon">
                                <i class='bx bx-child icon'></i>
                                <label for="gender">Gender</label>
                            </div>
                        </td>
                        <td>
                            <h3>Male</h3>
                        </td>
                    </tr>
                </table>
                <div class="profile_down">
                                <button onclick="openModal()">Edit Profile</button>
                            </div>
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