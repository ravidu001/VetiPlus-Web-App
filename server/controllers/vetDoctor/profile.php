<?php
    if(isset($_POST['submit'])) {
        $user_id = $_SESSION['user_id'];
        $doctorID = $user_id;

        // get the profile picture
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = '../../assets/images/vetDoctor/profile/'.$image;

        $fullName = $_POST['name'];
        $contactNumber = $_POST['contactNumber'];
        $address = $_POST['address'];
        $NIC = $_POST['NIC'];
        $DOB = $_POST['DOB'];
        $gender = $_POST['gender'];
        $experience = $_POST['experience'];
        $bio = $_POST['bio'];

        // get the doctor certificate
        $doctorCertificate = $_FILES['certificate']['name'];
        $doctorCertificate_size = $_FILES['certificate']['size'];
        $doctorCertificate_tmp_name = $_FILES['certificate']['tmp_name'];
        $doctorCertificate_folder = '../../assets/images/vetDoctor/certificate/'.$doctorCertificate;

        // get the time taken for treatment
        $timeSlot = $_POST['treatmentTime'];

        $specialization1 = $_POST['specialization1'];
        // get the specialization 1 certificate
        $specializationCertificate1 = $_FILES['certificate1']['name'];
        $specializationCertificate1_size = $_FILES['certificate1']['size'];
        $specializationCertificate1_tmp_name = $_FILES['certificate1']['tmp_name'];
        $specializationCertificate1_folder = '../../assets/images/vetDoctor/specialization/'.$specializationCertificate1;


        $specialization2 = $_POST['specialization2'];
        // get the specialization 2 certificate
        $specializationCertificate2 = $_FILES['certificate2']['name'];
        $specializationCertificate2_size = $_FILES['certificate2']['size'];
        $specializationCertificate2_tmp_name = $_FILES['certificate2']['tmp_name'];
        $specializationCertificate2_folder = '../../assets/images/vetDoctor/specialization/'.$specializationCertificate2;

        $specialization3 = $_POST['specialization3'];
        // get the specialization 3 certificate
        $specializationCertificate3 = $_FILES['certificate3']['name'];
        $specializationCertificate3_size = $_FILES['certificate3']['size'];
        $specializationCertificate3_tmp_name = $_FILES['certificate3']['tmp_name'];
        $specializationCertificate3_folder = '../../assets/images/vetDoctor/specialization/'.$specializationCertificate3;

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
        
        // Check if specialization details are set
        if (empty($specialization1) || empty($specializationCertificate1) || empty($specializationCertificate1_size) || empty($specializationCertificate1_tmp_name)) {
            $messages[] = "Specialization 1 details are not complete.";
        }
        if (empty($specialization2) || empty($specializationCertificate2) || empty($specializationCertificate2_size) || empty($specializationCertificate2_tmp_name)) {
            $messages[] = "Specialization 2 details are not complete.";
        }
        if (empty($specialization3) || empty($specializationCertificate3) || empty($specializationCertificate3_size) || empty($specializationCertificate3_tmp_name)) {
            $messages[] = "Specialization 3 details are not complete.";
        }
        
        // If there are any messages, display them in an alert
        if (!empty($messages)) {
            $alertMessage = implode("\\n", $messages); // Join messages with new line
            echo "<script>alert('".$alertMessage."');</script>";
        }


        if($image_size > 1000000) {
            echo "<script>alert('Image size is too large')</script>";
        } else {
            
            move_uploaded_file($image_tmp_name, $image_folder);
            move_uploaded_file($doctorCertificate_tmp_name, $doctorCertificate_folder);
            move_uploaded_file($specializationCertificate1_tmp_name, $specializationCertificate1_folder);
            move_uploaded_file($specializationCertificate2_tmp_name, $specializationCertificate2_folder);    
            move_uploaded_file($specializationCertificate3_tmp_name, $specializationCertificate3_folder);
                                
            //  if user already exists in the database. If exists, then update the profile, else insert the profile
            $query = "SELECT * FROM vetDoctor WHERE doctorID = '$user_id'";      
            $result = mysqli_query($conn, $query);  
            
            
            if(mysqli_num_rows($result) > 0) {
                $query = "UPDATE vetDoctor 
                    SET  fullName = '$fullName', profilePicture = '$image', contactNumber = '$contactNumber', address = '$address', NIC = '$NIC', DOB = '$DOB', gender = '$gender', bio = '$bio', experience = '$experience', doctorCertificate = '$doctorCertificate', timeSlot = '$timeSlot'
                    WHERE doctorID = '$user_id'";
                $result = mysqli_query($conn, $query);
                if($result) {
                    echo "<script>alert('Profile updated successfully')</script>";
                } else {
                    echo "<script>alert('Profile not updated')</script>";
                }
            } else {
                $query = "INSERT INTO vetDoctor (doctorID, fullName, profilePicture, contactNumber, address, NIC, DOB , gender, bio, experience, doctorCertificate, timeSlot ) 
                VALUES ('$user_id', '$fullName', '$image', '$contactNumber', '$address', '$NIC', '$DOB', '$gender', '$bio', '$experience', '$doctorCertificate', '$timeSlot')";

                $result = mysqli_query($conn, $query);
                if($result) {
                    echo "<script>alert('Profile added successfully')</script>";
                } else {
                    echo "<script>alert('Profile not Added')</script>";
                }
            } 
        }

        
    }
?>