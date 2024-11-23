<?php
include __DIR__ . '/../../../server/config/phpConfig.php';

// if (!isset($_SESSION['user_id'])) {
//     die("User ID not set in session");
// } else {
//     echo "<script>alert('" . $_SESSION['user_id'] . "');</script>";
// }
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// } else {
//     echo "<script>alert('Connection successful');</script>";
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['user_id'])) {
        die("Salon ID is missing. Please log in again.");
    }

    $salon_id = $_SESSION['user_id'];
    $ServiceName = $_POST['serviceName'];
    $ServiceCharge = $_POST['serviceCharge'];
    $serviceDescription = $_POST['serviceDescription'];

    $image1 = $_FILES['photo1']['name'];
    $image1_size = $_FILES['photo1']['size'];
    $image_tmp_name1 = $_FILES['photo1']['tmp_name'];
    $image_folder1 = '../../../client/assets/images/salon/service/' . $image1;
    // require('../../../client/');

    $image2 = $_FILES['photo2']['name'];
    $image2_size = $_FILES['photo2']['size'];
    $image_tmp_name2 = $_FILES['photo2']['tmp_name'];
    $image_folder2 = '../../../client/assets/images/salon/service/' . $image2;
    // require('../../../client/');



    // echo "<script>alert('man wada')</script>";
     if (move_uploaded_file($image_tmp_name1, $image_folder1) && move_uploaded_file($image_tmp_name2, $image_folder2)) {
    $insert_query = $conn->prepare("INSERT INTO salonservice (serviceName, serviceDescription, photo1, photo2, serviceCharge, salonID)
            VALUES (?, ?, ?, ?, ?, ?)");

// Assuming $photo1 and $photo2 are set or passed in, you should use variables.
    $photo1 = $image1; // Default empty string or set the appropriate value
    $photo2 = $image2; // Default empty string or set the appropriate value

    $insert_query->bind_param("ssssis", $ServiceName, $serviceDescription, $photo1, $photo2, $ServiceCharge, $salon_id);

    if ($insert_query->execute()) {
        // echo "<script>alert('Service added successfully!');</script>";
        header('Location: ../../../client/pages/salon/ServiceDetails.php?status=success');
        // require ('../../../client/pages/salon/ServiceDetails.php');
        exit;
    } else {
        echo "<script>alert('Failed to add the service. " . $insert_query->error . "');</script>";
    }
} else {
    echo "<script>alert('Failed to upload images.');</script>";
    header('Location: ../../../client/pages/salon/ServiceDetails.php?status=error');
}
}
