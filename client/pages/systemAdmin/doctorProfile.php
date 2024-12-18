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
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/doctorProfile.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Include navbar -->
    <?php include '../../components/common/admin/navbar.php'; ?>

    <section class="home">
        <div class="doctor_profile">
            <div class="doctor_profile_top">
                <div class="doctor_profile_top_left">
                    <img src="../../assets/images/user.png" alt="">
                </div>
                <!-- <div class="doctor_profile_top_right">
                <h2>Full Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :- &nbsp;&nbsp; Ramesh Peshala</h2>
                <h2>Date of Birth &nbsp;&nbsp;&nbsp; :- &nbsp;&nbsp;2002/05/09</h2>
                <h2>Gender &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :- &nbsp;&nbsp; Male</h2>
                <h2>Email &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-&nbsp;&nbsp; rameshpeshala84@gmail.com</h2>
                <h2>Phone Number &nbsp;:-&nbsp;&nbsp;&nbsp; 0762163506</h2>
                <h2>NIC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:- &nbsp;&nbsp;200212702901</h2>
            </div> -->
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
            </div>
            <div class="doctor_profile_down">
                <button onclick="openConfirmModal()">Reset Password</button>
            </div>
        </div>
        <div id="modal" class="modal-background" style="display: none;">
            <div class="modal-content">
                <i class='bx bxs-lock-open icon-1'></i>
                <p>Do you want to reset your password?</p>
                <div class="modal-buttons">
                    <button onclick="confirmReset()">Yes</button>
                    <button onclick="pcloseModal()">No</button>
                </div>
            </div>
        </div>
        <div id="confirmationModal" class="modal-background" style="display: none;">
            <div class="modal-content">
                <i class='bx bxs-check-circle icon-1'></i>
                <p class="confirmation-message">Password reset process initiated</p>
            </div>
        </div>
        <script src="../../assets/jsFIles/Admin/passwordReset.js"></script>
    </section>
</body>

</html>