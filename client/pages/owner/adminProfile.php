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
    <link rel="icon" href="../../assets/images/logo.png" type="image/png">
    <title>VetiPlus</title>
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/navbar.css" type="text/css">
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/adminProfile.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <?php include_once "../../components/common/admin/message.php" ?>

    <!-- Include navbar -->
    <?php include '../../components/common/owner/navbar.php'; ?>

    <section class="home">
        <div class="profile">
            <div class="profile_top">
                <div class="regi-img">
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
                            <?= htmlspecialchars($admin['name']); ?>
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
                            <?= htmlspecialchars($admin['email']); ?>
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
                            <?= htmlspecialchars($admin['address']); ?>
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
                            <?= htmlspecialchars($admin['contactNumber']); ?>
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
                            <?= htmlspecialchars($admin['NIC']); ?>
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
                            <?= htmlspecialchars($admin['gender']); ?>
                        </td>
                    </tr>
                </table>
                <div class="profile_down">
                    <button onclick="window.location.href='editProfile.php?email=<?= urlencode($admin['email']); ?>'">Edit Profile</button>
                    <button onclick="openDeleteModal()">Delete</button>
                </div>
            </div>

        </div>
        <div id="deleteModal" class="modal-background" style="display: none;">
            <div class="modal-content">
                <i class='bx bx-x-circle icon'></i>
                <h2>Are You sure ?</h2>
                <p>Do you want to delete this account?</p>
                <div class="modal-buttons">
                    <form method="post" class="delete-form" action="../../../server/controllers/Owner/deleteAdmin.php">
                        <input type="hidden" name="email" value="<?= htmlspecialchars($admin['email']); ?>">
                        <button type="submit" name="delete" value="DELETE">Yes</button>
                    </form>
                    <button onclick="closeModal()">No</button>
                </div>
            </div>
        </div>
        <script src="../../assets/jsFIles/Owner/deleteAccount.js"></script>
    </section>
</body>

</html>