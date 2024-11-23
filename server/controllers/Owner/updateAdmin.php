<?php
include ( __DIR__ . '../../../../server/config/backendConfig.php');

$message = '';
$email = htmlspecialchars($_GET['email'] ?? ''); // Fetch email from URL

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

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