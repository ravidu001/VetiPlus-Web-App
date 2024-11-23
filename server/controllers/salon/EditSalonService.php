<?php

include __DIR__ . '/../../../server/config/phpConfig.php';

// if (isset($_GET['service_id'])) {
//     $service_id = $_GET['service_id'];
//     $sql = "SELECT * FROM salonservice WHERE serviceID = '$service_id'";
//     $result = $conn->query($sql);
//     $row = $result->fetch_assoc();
// }



// Process update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $service_id = $_POST['Serviceid'];
    $name = $_POST['serviceName'];
    $charge = $_POST['serviceCharge'];
    $description = $_POST['description'];



    
$query = "SELECT photo1, photo2 FROM salonservice WHERE serviceID = '$service_id'";
$result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) > 0) {
        $old_images = mysqli_fetch_assoc($result);
        $image1_to_store = $old_images['photo1'];
        $image2_to_store = $old_images['photo2'];
    } else {
        die("Failed to fetch old images from databse");
    }

    //Check if the new images are uploaded and overwrite the defaults if present    
    if(isset($_FILES['photo1'])  && $_FILES['photo1']['error']  === UPLOAD_ERR_OK){
        $image1 = $_FILES['photo1']['name'];
        $image1_size = $_FILES['photo1']['size'];
        $image_tmp_name1 = $_FILES['photo1']['tmp_name'];
        $image_folder1 = '../../../client/assets/images/salon/service/' . $image1;

        if(move_uploaded_file($image_tmp_name1, $image_folder1)) {
            $image1_to_store = $image1; // Update to the newly uploaded image
        }
    }

    //Check if the new images are uploaded and overwrite the defaults if present    
    if(isset($_FILES['photo2'])  && $_FILES['photo2']['error']  === UPLOAD_ERR_OK){
        $image2 = $_FILES['photo2']['name'];
        $image2_size = $_FILES['photo2']['size'];
        $image_tmp_name2 = $_FILES['photo2']['tmp_name'];
        $image_folder2 = '../../../client/assets/images/salon/service/' . $image2;

        if(move_uploaded_file($image_tmp_name2, $image_folder2)) {
            $image2_to_store = $image2; // Update to the newly uploaded image
        }
    }



    // // print_r($service_id);
    // // print_r($name);
    // $image1 = $_FILES['photo1']['name'];
    // $image1_size = $_FILES['photo1']['size'];
    // $image_tmp_name1 = $_FILES['photo1']['tmp_name'];
    // $image_folder1 = '../../../client/assets/images/salon/service/' . $image1;
    // // require('../../../client/');

    // $image2 = $_FILES['photo2']['name'];
    // $image2_size = $_FILES['photo2']['size'];
    // $image_tmp_name2 = $_FILES['photo2']['tmp_name'];
    // $image_folder2 = '../../../client/assets/images/salon/service/' . $image2;
    // // require('../../../client/');

    // if(isset($image1) && isset($image2)){
    //     move_uploaded_file($image_tmp_name1, $image_folder1) && move_uploaded_file($image_tmp_name2, $image_folder2);
    // }
    // else{
    //     $image1 = "SELECT (photo1) FROM salonservice WHERE serviceID='$service_id'";
    //     print_r($image1);
    // }
    
    

    $sql = "UPDATE salonservice 
            SET serviceName='$name', serviceCharge='$charge', serviceDescription='$description' ,  photo1 = '$image1',  photo2 = '$image2'
            WHERE serviceID='$service_id'";
    // print_r($service_id);
    
    if ($conn->query($sql) === TRUE) {
        echo "Service updated successfully";
        header('Location: ../../../client/pages/salon/ServiceDetails.php?status=success');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header('Location: ../../../client/pages/salon/ServiceDetails.php?status=error');
    }
}
?>
