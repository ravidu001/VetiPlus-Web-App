<?php
session_start(); // Start the session if not already started
include '../../../server/config/config.php'; // Include your database connection file

if (isset($_GET['user_id'])) {
    $user_id = urldecode($_GET['user_id']);
    $user_id = mysqli_real_escape_string($conn, $user_id); // Sanitize the user_id

    // Proceed with deleting the profile using $user_id
    $query = "DELETE FROM vetDoctor WHERE doctorID = '$user_id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>
            alert('Profile deleted successfully');
            window.location.href = '../../../client/pages/login-singup/login.php';
        </script>";
    } else {
        echo "<script>
            alert('Profile not deleted');
            window.location.href = '../../../client/pages/vetDoctor/profile.php';
        </script>";
    }
} else {
    echo "<script>
        alert('User ID not found');
        window.location.href = '../../../client/pages/vetDoctor/profile.php';
    </script>";
}
?>