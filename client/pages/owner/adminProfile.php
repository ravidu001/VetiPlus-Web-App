
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
    <div class="profile-top-head">
            <h1>Admin Profile</h1>
        </div>
        <div class="profile">
            <div class="profile_top">
                <div class="profile_top_inside">
                    <div class="profile_top_inside_left">
                        <img src="../../assets/images/user.png" alt="">
                    </div>
                    <div class="profile_top_inside_right">
                        <?php if (!empty($admin)): ?>
                            <h2>Full Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; <?= htmlspecialchars($admin['name']); ?></h2>
                            <h2>Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; <?= htmlspecialchars($admin['email']); ?></h2>
                            <h2>Phone Number &nbsp; :- &nbsp; <?= htmlspecialchars($admin['contactNumber']); ?></h2>
                            <h2>Address &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; <?= htmlspecialchars($admin['address']); ?></h2>
                            <h2>Gender &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:- &nbsp; &nbsp; <?= htmlspecialchars($admin['gender']); ?></h2>
                            <h2>NIC &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:- &nbsp; <?= htmlspecialchars($admin['NIC']); ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="profile_down">
                <button onclick="window.location.href='editProfile.php?email=<?= urlencode($admin['email']); ?>'">Edit Profile</button>
                <button onclick="openDeleteModal()">Delete</button>
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