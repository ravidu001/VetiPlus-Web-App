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

    if(isset($_POST['submit'])) {
        $user_id = $_SESSION['user_id'];
        $doctorID = $user_id;

        if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
            $image = $_FILES['image']['name'];
            $image_size = $_FILES['image']['size'];
            $image_tmp_name = $_FILES['image']['tmp_name'];
            $image_folder = '../../../client/assets/images/vetDoctor/profile/' . $image;
            // Move the uploaded file to the desired folder
            if (move_uploaded_file($image_tmp_name, $image_folder)) {
                echo "<script>alert('Profile image uploaded successfully.');</script>";
            } else {
                echo "<script>alert('Profile image not uploaded');</script>";
            }
        } else {
            $query = "SELECT profilePicture FROM vetDoctor WHERE doctorID = '$user_id'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $image = $row['profilePicture'];
            $image_size = 10000;
            echo "<script>alert('No profile file uploaded or there was an error uploading the file.');</script>";
        }
        // get the profile picture
        // $image = $_FILES['image']['name']; // get the image name
        // $image_size = $_FILES['image']['size']; // get the image size
        // $image_tmp_name = $_FILES['image']['tmp_name']; // get the image temporary name
        // $image_folder = '../../assets/images/vetDoctor/profile/' .$image;

        $fullName = $_POST['name'];
        echo "<script>alert('".$fullName."');</script>";
        $contactNumber = $_POST['contactNumber'];
        $address = $_POST['address'];
        $NIC = $_POST['NIC'];
        $DOB = $_POST['DOB'];
        // $gender = $_POST['gender'];
        $experience = $_POST['experience'];
        $bio = $_POST['bio'];

        // echo "<script>alert('".$image"');</script>";


        if (isset($_FILES['certificate']) && $_FILES['certificate']['error'] == UPLOAD_ERR_OK) {
            $doctorCertificate = $_FILES['certificate']['name'];
            $doctorCertificate_size = $_FILES['certificate']['size'];
            $doctorCertificate_tmp_name = $_FILES['certificate']['tmp_name'];
            $doctorCertificate_folder = '../../../client/assets/images/vetDoctor/certificate/' . $doctorCertificate;
        
            // Move the uploaded file to the desired folder
            if (move_uploaded_file($doctorCertificate_tmp_name, $doctorCertificate_folder)) {
                echo "<script>alert('Certificate uploaded successfully.');</script>";
            } else {
                echo "<script>alert('Certificate not uploaded');</script>";
            }
        } else {
            $query = "SELECT doctorCertificate FROM vetDoctor WHERE doctorID = '$user_id'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $doctorCertificate = $row['doctorCertificate'];
            $image_size = 10000;
            echo "<script>alert('No  doc file uploaded or there was an error uploading the file.');</script>";
        }
        // get the doctor certificate
        // $doctorCertificate = $_FILES['certificate']['name'];
        // $doctorCertificate_size = $_FILES['certificate']['size'];
        // $doctorCertificate_tmp_name = $_FILES['certificate']['tmp_name'];
        // $doctorCertificate_folder = '../../assets/images/vetDoctor/certificate/' .$doctorCertificate;

        // get the time taken for treatment
        $timeSlot = $_POST['treatmentTime'];

        $specialization1 = $_POST['specialization1'];

        
        

        // check up {{{{{{}}}}}}
        // Check if user ID is set

        // Initialize an array to hold messages
        $messages = [];
        
        // Check if the user ID is set
        if (empty($user_id)) {
            $messages[] = "User  ID is not set.";
        }
        
        // Check if the profile picture details are set
        if (empty($image) || empty($image_size) || empty($image_tmp_name)) {
            $messages[] = "Profile picture details are not set.";
        }
        
        // Check if the doctor details are set
        if (empty($fullName) || empty($contactNumber) || empty($address) || empty($NIC) || empty($DOB) || empty($gender) || empty($experience) || empty($bio)) {
            $messages[] = "Doctor details are not complete.";
        }
        
        // Check if the doctor certificate details are set
        if (empty($doctorCertificate) || empty($doctorCertificate_size) || empty($doctorCertificate_tmp_name)) {
            $messages[] = "Doctor certificate details are not set.";
        }
        
        // Check if treatment time is set
        if (empty($timeSlot)) {
            $messages[] = "Treatment time is not set.";
        }

        
        
       
        // If there are any messages, display them in an alert
        if (!empty($messages)) {
            $alertMessage = implode("\\n", $messages); // Join messages with new line
            echo "<script>alert('".$alertMessage."');</script>";
        }


        if($image_size > 1000000) {
            echo "<script>alert('Image size is too large');</script>";
        } else {
        /*
            if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) { // check if the file is uploaded
                echo "<script> altert('File upload error: ');</script>" . $_FILES['image']['error'];
                exit;
            } else {
                echo "<script>alert('File  successfully.');</script>";
            }
            if (!file_exists($image_tmp_name)) { // check if the file exists
                echo "<script>alert('Temporary file does not exist.');</script>";
                exit;
            } else {
                echo "<script>alert('Temporary file exists.');</script>";
            }

            

            if (move_uploaded_file($image_tmp_name, $image_folder)) { // move the file to the folder
                echo "<script>alert('File uploaded successfully.');</script>";
            } else {
                echo "<script>alert('File not uploaded');</script>";

            }
            if (move_uploaded_file($doctorCertificate_tmp_name, $doctorCertificate_folder)) {
                echo "<script>alert('Certificate uploaded successfully.');</script>";
            } else {
                echo "<script>alert('Certificate not uploaded');</script>";
            };
            */
                                
            //  if user already exists in the database. If exists, then update the profile, else insert the profile
            echo "<script>alert('".$user_id."');</script>";
            $query = "SELECT * FROM vetDoctor WHERE doctorID = '$user_id'";      
            $result = mysqli_query($conn, $query);  
            echo "<script>alert('hii');</script>";
            echo "<script>alert('".mysqli_num_rows($result)."');</script>";
            if(mysqli_num_rows($result) > 0) {
                echo "<script>alert('mee');</script>";
                // Update the profile picture if a new one is uploaded
                if (!isset($image)){
                    $image = $row['profilePicture'];
                }
                $query = "UPDATE vetDoctor 
                    SET  fullName = '$fullName', profilePicture = '$image', contactNumber = '$contactNumber', address = '$address', NIC = '$NIC', DOB = '$DOB', bio = '$bio', experience = '$experience', doctorCertificate = '$doctorCertificate', timeSlot = '$timeSlot', specialization = '$specialization1'
                    WHERE doctorID = '$user_id'";
                    // gender = '$gender' remove from update due to not passing the value
                $result = mysqli_query($conn, $query);
                echo "<script>alert('methana');</script>";
                if($result ) {
                    echo "<script>alert('Profile updated successfully');
                            window.location.href = '../../../client/pages/vetDoctor/profile.php'; 
                            </script>";
                    
                } else {
                    echo "<script>alert('Profile not updated');
                    window.location.href = '../../../client/pages/vetDoctor/profile.php'; 
                    </script>";
                }
            } else {
                $gender = $_POST['gender'];
                echo "<script>alert('User ID: $user_id" .
                "Image: $image" .
                "Contact Number: $contactNumber" .
                "Address: $address" .
                "NIC: $NIC" .
                "Date of Birth: $DOB" .
                "Gender: $gender" .
                "Bio: $bio" .
                "Experience: $experience" .
                "Doctor Certificate: $doctorCertificate" .
                "Time Slot: $timeSlot');</script>"; 

                $query = "INSERT INTO vetDoctor (
                    doctorID, 
                    fullName, 
                    profilePicture, 
                    contactNumber, 
                    address, 
                    NIC, 
                    DOB, 
                    gender, 
                    bio, 
                    experience, 
                    doctorCertificate, 
                    timeSlot,
                    specialization
                ) VALUES (
                    '$user_id', 
                    '$fullName', 
                    '$image', 
                    $contactNumber, 
                    '$address', 
                    '$NIC', 
                    '$DOB', 
                    '$gender', 
                    '$bio', 
                    $experience, 
                    '$doctorCertificate', 
                    $timeSlot,
                    '$specialization1'
                )";
               
               echo "<script>alert('hello');</script>";
               if(mysqli_query($conn, $query)) {
                    echo "<script>alert('Profile added successfully');</script>";
                } else {
                    echo "<script>alert('Profile not Added');</script>";
                }
            } 
        }
    }


    
?>