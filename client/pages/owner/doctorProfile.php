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
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/doctorProfile.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Include navbar -->
    <?php include '../../components/common/owner/navbar.php'; ?>

    <section class="home">
        <div class="doctor_profile">
            <div class="doctor_profile_top">
                <div class="doctor_profile_top_left">
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
                <div class="doc-pro-down">
                    <div class="doc-pro-down-inside">
                    <i class='bx bx-calendar-check icon'></i>
                        <h2>Number of Appointment</h2>
                        <h3>10</h3>
                    </div>
                    <div class="doc-pro-down-inside">
                    <i class='bx bx-user-plus icon'></i>
                        <h2>Number of Patients</h2>
                        <h3>8</h3>
                    </div>
                    <div class="doc-pro-down-inside">
                    <i class='bx bx-user-x icon'></i>
                        <h2>Number of Cancel Appointment</h2>
                        <h3>2</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>