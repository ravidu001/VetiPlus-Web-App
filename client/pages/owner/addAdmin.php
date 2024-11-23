

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
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/navbar.css" type="text/css">4
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/addAdmin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
    <?php include_once "../../components/common/admin/message.php" ?>

    <!-- Include navbar -->
    <?php include '../../components/common/owner/navbar.php'; ?>

    <section class="home">
    <div class="admin">
            <div class="admin-inside">
                <div class="admin-inside-top">
                    <h2>Total Admin</h2>
                    <h3>24</h3>
                </div>
                <div class="admin-inside-top">
                    <h2>Active Admin</h2>
                    <h3>14</h3>
                </div>
                <div class="admin-inside-top">
                    <h2>Leave Admin</h2>
                    <h3>03</h3>
                </div>
            </div>
            <div class="admin-outside">
                <div class="admin-outside-left">
                    <!-- Form to search for an admin  -->
                     <form action="adminProfile.php" method="GET">
                        <input type="email" id="email" name="email" placeholder="Enter Admin Email" required>
                        <button type="submit" name="submit">Search</button>
                    </form>
                </div>
                <div class="admin-outside-right">
                    <a href="adminRegistration.php" class="btn">Add Admin</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>