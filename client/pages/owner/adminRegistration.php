<?php

$current_page = basename($_SERVER['PHP_SELF']);

include(__DIR__ . '/../../../server/config/backendConfig.php');
include(__DIR__ . '/../../../server/controllers/Owner/createAdmin.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/images/logo.png" type="image/png">
    <title>VetiPlus</title>
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/navbar.css" type="text/css">
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/adminRegistration.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div id="alertBox" class="alert-box hidden">
        <span id="alertMessage"></span>
        <button class="close-btn" onclick="closeAlert()">×</button>
    </div>
    <?php if (!empty($message)) : ?>
        <div class="blurred-background"></div>
        <div class="message">
            <?= htmlspecialchars($message) ?>
            <i class='bx bxs-check-circle icon-1'></i>
        </div>
    <?php endif; ?>

    <!-- Include navbar -->
    <?php include '../../components/common/owner/navbar.php'; ?>

    <section class="home">
        <div class="admin-regi">
            <div>
                <form action="" method="POST" onsubmit="return validateForm()">
                   <div class="regi-img">
                   <img src="../../assets/images/user.png" alt="">
                   </div>
                   <h1>Fill the Details</h1>
                    <table>
                        <tr>
                            <td>
                              <div class="regi-icon">
                              <i class='bx bxs-user-circle icon'></i>
                              <label for="name"> Name</label>
                              </div>
                            </td>
                            <td>
                                <input type="text" id="name" name="name" placeholder="Name" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="regi-icon">
                            <i class='bx bxs-envelope icon' ></i>
                              <label for="email">Email</label>
                              </div>
                            </td>
                            <td>
                                <input type="email" id="email" name="email" placeholder="Email" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="regi-icon">
                            <i class='bx bxs-lock icon'></i>
                              <label for="password">Password</label>
                              </div>
                            </td>
                            <td>
                                <input type="password" id="password" name="password" placeholder="Password" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="regi-icon">
                            <i class='bx bxs-lock icon'></i>
                              <label for="cpassword">Confirm Password</label>
                              </div>
                            </td>
                            <td>
                                <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
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
                                <input type="text" id="address" name="address" placeholder="Address" required>
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
                                <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number" required>
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
                                <input type="text" id="nic" name="nic" placeholder="NIC" required>
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
                                <select id="gender" name="gender" class="gender" required>
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <div class="admin-regi-bottom">
                        <button type="submit" name="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="../../assets/jsFIles/Owner/messageHandler.js"></script>
    <script src="../../assets/jsFIles/Owner/validate.js"></script>
</body>

</html>