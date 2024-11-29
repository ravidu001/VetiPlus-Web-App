
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
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/userAccount.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
    <?php include_once "../../components/common/admin/message.php" ?>

    <!-- Include navbar -->
    <?php include '../../components/common/owner/navbar.php'; ?>

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
                    <a href="./petAccount.php">Pet Data</a>
                </div>
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
    </section>
</body>
</html>