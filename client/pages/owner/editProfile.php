<?php
// Get the current filename
$current_page = basename($_SERVER['PHP_SELF']);

include ( __DIR__ . '../../../../server/config/backendConfig.php');

$message = '';
$email = htmlspecialchars($_GET['email'] ?? ''); // Fetch email from URL

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Update logic
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];

    if (!empty($email)) {
        $sql = "UPDATE systemadmin SET name = ?, contactNumber = ?, address = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $phone_number, $address, $email);

        if ($stmt->execute()) {
            $message = "Profile updated successfully!";
            header("Location: adminProfile.php?email=" . urlencode($email));
            exit;
        } else {
            $message = "Error updating profile: " . $conn->error;
        }
        $stmt->close();
    }
}

// Fetch admin details for the form
$name = $phone_number = $address = '';
if (!empty($email)) {
    $sql = "SELECT name, contactNumber, address FROM systemadmin WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $admin = $result->fetch_assoc();
        $name = $admin['name'];
        $phone_number = $admin['contactNumber'];
        $address = $admin['address'];
    }
    $stmt->close();
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/ownerNavbar.css">
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/editProfile.css">
   <title>Edit Profile</title>
</head>
<body>

<?php if (!empty($message)) : ?>
    <div class="blurred-background"></div>
    <div class="message">
        <?= htmlspecialchars($message) ?>
    </div>
<?php endif; ?>

<div class="admin-navbar"> 
    <div class="admin-navbar-inside-left-inner">
        <img src="../../assets/images/admin_logo.png" alt="">
        <h1>VETIPLUS</h1>
    </div>
</div>
<div class="admin-navbar-inside">
    <div class="admin-navbar-inside-left">
        <div>
            <div class="admin-navbar-inside-left-inner-1">
                <ul>
                    <li class="<?= ($current_page == 'home.php') ? 'active' : '' ?>">
                        <img src="../../assets/images/image_1.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="home.php">Dashboard</a>
                    </li>

                    <li class="<?= ($current_page == 'account.php') ? 'active' : '' ?>">
                    <img src="../../assets/images/image_2.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="account.php">Accounts</a>
                    </li>

                    <li class="<?= ($current_page == 'appointment.php') ? 'active' : '' ?>">
                    <img src="../../assets/images/image_3.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="appointment.php">Appointment</a>
                    </li>

                    <li class="<?= ($current_page == 'payment.php') ? 'active' : '' ?>">
                    <img src="../../assets/images/image_4.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="payment.php">Payment Transactions</a>
                    </li>
                    <li class="<?= ($current_page == 'addAdmin.php') ? 'active' : '' ?>">
                    <img src="../../assets/images/Owner/add_member.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="addAdmin.php">Add Admin</a>
                    </li>

                    <li class="<?= ($current_page == 'profile.php') ? 'active' : '' ?>">
                    <img src="../../assets/images/image_11.png" alt="">
                        &nbsp;&nbsp;&nbsp;
                        <a href="profile.php">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        <br><br>
        <button type="button" title="Click me" onclick="openLogout()">Logout</button>
    </div>
    <div class="admin-regi">
        <div class="admin-regi-top">
            <h1>Admin Update Form</h1>
        </div>
        <div>
            <form action="" method="POST">
                <div class="admin-regi-inside">
                <div class="admin-regi-inside-right">
                  <img src="../../assets/images/image_8.jpg" alt="">
                  <h3>Email : malith@gmail.com</h3>
                  <h3>NIC : 200212702901</h3>
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
</div>
<div id="modal" class="modalbackground" style="display: none;">
        <div class="modalcontent">
            <p>Do you want to Logout?</p>
            <div class="modalbuttons">
                <button onclick="confirmLogout()">Yes</button>
                <button onclick="closeLogout()">No</button>
            </div>
        </div>
    </div>
    <script src="../../assets/jsFIles/Admin/logout.js"></script>
    <script src="../../assets/jsFIles/Owner/messageHandler.js"></script>
</body>
</html>