
<?php
 
 $current_page = basename($_SERVER['PHP_SELF']);

 include ( __DIR__ . '/../../../server/config/backendConfig.php');
include ( __DIR__ . '/../../../server/controllers/Owner/createAdmin.php');
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../../assets/images/logo.png" type="image/png">
   <title>Profile </title>
   <link rel="stylesheet" href="../../assets/cssFiles/Admin/navbar.css" type="text/css">4
   <link rel="stylesheet" href="../../assets/cssFiles/Owner/adminRegistration.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<?php if (!empty($message)) : ?>
    <div class="blurred-background"></div>
    <div class="message">
        <?= htmlspecialchars($message) ?>
    </div>
<?php endif; ?>

   <!-- Include navbar -->
   <?php include '../../components/common/admin/navbar.php'; ?>

   <section class="home">
   <div class="admin-regi">
        <div class="admin-regi-top">
            <h1>Admin Registration Form</h1>
        </div>
        <div>
            <form action="" method="POST">
                <div class="admin-regi-inside">
                    <div class="admin-regi-inside-left">
                        <label for="name"> Name</label>
                        <input type="text" id="name" name="name" placeholder="Name" required>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
                    </div>
                    <div class="admin-regi-inside-left">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Address" required>
                        <label for="city">Gender</label>
                        <input type="text" id="gender" name="gender" placeholder="Gender" required>
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number" required>
                        <label for="state">NIC</label>
                        <input type="text" id="nic" name="nic" placeholder="NIC" required>
                    </div>
                </div>
                <div class="admin-regi-bottom">
                    <button type="submit" name="submit" >Register</button>
                </div>
            </form>
        </div>
    </div>
   </section>
   <script src="../../assets/jsFIles/Owner/messageHandler.js"></script>
</body>
</html>
