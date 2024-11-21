<?php

session_start();

$message = '';

include(__DIR__ . '/../../../server/config/backendConfig.php');

if (isset($_POST['delete'])) {
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $query = "DELETE FROM systemadmin WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Data Deleted Successfully";
        header("Location: ../../../client/pages/owner/addAdmin.php");
    } else {
        $_SESSION['message'] = "Error: Data Not Deleted";
        header("Location: ../../../client/pages/owner/addAdmin.php");
    }

    $stmt->close();
}

$conn->close();
