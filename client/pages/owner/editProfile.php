
<?php
 
  $current_page = basename($_SERVER['PHP_SELF']);

  include ( __DIR__ . '../../../../server/config/backendConfig.php');
  include ( __DIR__ . '../../../../server/controllers/Owner/updateAdmin.php');
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/images/logo.png" type="image/png">
    <title>VetiPlus</title>
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/navbar.css" type="text/css">4
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/editProfile.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
    <?php include_once "../../components/common/admin/message.php" ?>

    <!-- Include navbar -->
    <?php include '../../components/common/owner/navbar.php'; ?>

    <section class="home">
    <div class="admin-regi">
        <div class="admin-regi-top">
            <h1>Admin Update Form</h1>
        </div>
        <div>
            <form action="" method="POST">
                <div class="admin-regi-inside">
                <div class="admin-regi-inside-right">
                  <img src="../../assets/images/user.png" alt="">
                  <h3>Hello <?= htmlspecialchars($name); ?></h3>
                  <h3>Email :<?= htmlspecialchars($email); ?></h3>
                </div>
                    <div class="admin-regi-inside-left">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="<?= htmlspecialchars($name); ?>" required>

                    <label for="phone_number">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" value="<?= htmlspecialchars($phone_number); ?>" required>

                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" value="<?= htmlspecialchars($address); ?>" required>
                </div>
                </div>
                <div class="admin-regi-bottom">
                    <button type="submit" name="submit">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
    </section>
</body>
</html>