<?php
if (isset($_GET['user_id'])) {
    $user_id = urldecode($_GET['user_id']);
    // Proceed with deleting the profile using $user_id
    // Example:
    // $query = "DELETE FROM vetDoctor WHERE doctorID = '$user_id'";
    // mysqli_query($conn, $query);
    echo "<script>alert('User ID: .$user_id. will be deleted');</script>";
} else {
    echo "<script>alert('User ID not found');</script>";
}

$query = "DELETE FROM vetDoctor WHERE doctorID = '$user_id'";
$result= mysqli_query($conn, $query);
if ($result) {
    echo "<script>alert('Profile deleted successfully');
        window.location.href = '../../../client/pages/login-signup/login.php';
        </script>";
} else {
    echo "<script>alert('Profile not deleted');
        window.location.href = '../../../client/pages/vetDoctor/profile.php';
        </script>";
}

?>