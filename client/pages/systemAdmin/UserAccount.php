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
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/userAccount.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Include navbar -->
    <?php include '../../components/common/admin/navbar.php'; ?>

    <section class="home">
        <div class="user-account">
            <div class="user-account-inside">
                <div class="user-account-inside-left">
                    <img src="../../assets/images/user.png" alt="">
                </div>
                <!-- <div class="user-account-inside-right">
                    <h2>Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; Ramesh Peshala</h2>
                    <h2>Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; rameshpeshala84@gmail.com</h2>
                    <h2>Address &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:- &nbsp; 419,gangasirigama,Thissamaharama</h2>
                    <h2>Contact Number &nbsp; &nbsp;:- &nbsp; 0762163506</h2>
                    <h2>ID Number &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; 200212702901</h2>
                    <h2>User ID &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; 22001557</h2>
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
            <div class="user-account-outside">
                <div class="user-account-outside-left" id="main-content">
                    <button onclick="openConfirmModal()">Reset Password</button>
                    <button onclick="openDeleteModal()">Delete Account</button>
                    <button onclick="window.location.href='petAccount.php'">Pet Data</button>
                </div>
                <!-- <div class="user-account-outside-right">
                    <h2>Total Appointment &nbsp; &nbsp; :- &nbsp; &nbsp; &nbsp; 456</h2>
                    <h2>Cancel Appointment &nbsp; :- &nbsp; &nbsp; &nbsp; 23</h2>
                </div> -->
                <table>
                    <tr>
                        <td>
                            <div class="regi-icon">
                                <i class='bx bx-calendar-check icon'></i>
                                <label for="total_appointment">Total Appointment</label>
                            </div>
                        </td>
                        <td>
                            <h3>40</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="regi-icon">
                                <i class='bx bx-calendar-x icon'></i>
                                <label for="cancel_appointment">Cancel Appoinment</label>
                            </div>
                        </td>
                        <td>
                            <h3>10</h3>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="modal" class="modal-background" style="display: none;">
            <div class="modal-content">
                <i class='bx bxs-lock icon-1'></i>
                <p>Do you want to reset your password?</p>
                <div class="modal-buttons">
                    <button onclick="confirmReset()">Yes</button>
                    <button onclick="pcloseModal()">No</button>
                </div>
            </div>
        </div>
        <div id="confirmationModal" class="modal-background" style="display: none;">
            <div class="modal-content">
                <i class='bx bxs-lock-open icon-1'></i>
                <p class="confirmation-message">Password reset process initiated</p>
            </div>
        </div>
        <div id="deleteModal" class="modal-background" style="display: none;">
            <div class="modal-content">
                <i class='bx bxs-x-circle icon-1'></i>
                <p>Do you want to delete this account?</p>
                <div class="modal-buttons">
                    <button onclick="openPasswordModal()">Yes</button>
                    <button onclick="closeModal()">No</button>
                </div>
            </div>
        </div>
        <div id="passwordModal" class="modal-background" style="display: none;">
            <div class="modal-content">
                <i class='bx bxs-lock icon-1'></i>
                <p>Enter your password:</p>
                <input type="password" id="password" class="password-input" placeholder="Password">

                <div class="modal-buttons">
                    <button onclick="initiateProcess()">Submit</button>
                    <button onclick="closeModal()">Cancel</button>
                </div>
            </div>
        </div>
        <div id="dconfirmationModal" class="modal-background" style="display: none;">
            <div class="modal-content">
                <i class='bx bxs-check-circle icon-1'></i>
                <p class="confirmation-message">Process initiated</p>
            </div>
        </div>
        </div>
    </section>
    <script src="../../assets/jsFIles/Admin/passwordReset.js"></script>
    <script src="../../assets/jsFIles/Admin/deleteaccount.js"></script>
</body>

</html>