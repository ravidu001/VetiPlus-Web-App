<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
    include (__DIR__ . '/../../../server/config/config.php');
    
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../../../client/pages/login-signup/login.php");
        exit();
    }

    $user_id = $_SESSION['user_id'];
// Change password
if(isset($_POST['passwordChange'])) {
    $newCurrentPassword = $_POST['newCurrentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    if (isset($newCurrentPassword) && isset($newPassword) && isset($confirmPassword) && !empty($newCurrentPassword) && !empty($newPassword) && !empty($confirmPassword)) {
        $query = "SELECT password FROM User WHERE email = '$user_id'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $password = $row['password'];
        

        if (password_verify($newCurrentPassword, $password)) {
            if ($newPassword == $confirmPassword) {
                $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $query = "UPDATE User SET password = '$newPassword' WHERE email = '$user_id'";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    echo "<script>alert('Password changed successfully');
                            window.location.href = '../../../client/pages/vetDoctor/profile.php';
                            </script>";
                } else {
                    echo "<script>alert('Password not changed');
                            window.location.href = '../../../client/pages/vetDoctor/profile.php';
                            </script>";
                }
            } else {
                echo "<script>alert('Passwords do not match');
                            window.location.href = '../../../client/pages/vetDoctor/profile.php';
                            </script>";
            }
        } else {
            echo "<script>alert('Current password is incorrect');
                            window.location.href = '../../../client/pages/vetDoctor/profile.php';
                            </script>";
        }
    } else {
        echo "<script>alert('Please fill all fields');
                            window.location.href = '../../../client/pages/vetDoctor/profile.php';
                            </script>";
    } 
}

?>