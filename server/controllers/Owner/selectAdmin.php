<?php


include ( __DIR__ . '/../../../server/config/backendConfig.php');

$admin = [];
if (isset($_GET['email'])) {
    $email = htmlspecialchars($_GET['email']);

    $sql = "SELECT * FROM systemadmin WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();
    } else {
        echo "<p>No admin found with the email: $email</p>";
    }
    $stmt->close();
} else {
    echo "<p>No email provided. Please go back and enter an email.</p>";
}

$conn->close();
?>