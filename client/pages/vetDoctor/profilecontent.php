
<div class="main-container1">
    <div class="profile-pic">
    <?php
            // Ensure $conn and $user_id are defined
            if (isset($conn) && isset($user_id)) {
                // Sanitize the user ID to prevent SQL injection
                $user_id = mysqli_real_escape_string($conn, $user_id);

                // Prepare the SQL query
                $query = "SELECT * FROM vetDoctor WHERE doctorID = '$user_id'";
                $result = mysqli_query($conn, $query);

                // Check if the query was successful
                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $image = $row['profilePicture'];
                         echo "<img src='../../assets/images/vetDoctor/profile/$image' alt='profile pict'>";
                        // echo "<img src='../../assets/images/vetDoctor/profile/defaultProfile.png' alt='profile pictu'>";

                        // Pre-fill form fields with existing data
                        $fullName = $row['fullName'];
                        $contactNumber = $row['contactNumber'];
                        $address = $row['address'];
                        $NIC = $row['NIC'];
                        $DOB = $row['DOB'];
                        $gender = $row['gender'];
                        $experience = $row['experience'];
                        $bio = $row['bio'];
                        $doctorCertificate = $row['doctorCertificate'];
                        $timeSlot = $row['timeSlot']; 

                    } else {
                        echo "<img src='../../assets/images/vetDoctor/profile/defaultProfile.png' alt='profile pictu'>";
                    }
                } else {
                    // Handle query error
                    echo "Error executing query: " . mysqli_error($conn);
                }
            } else {
                // Handle undefined $conn or $user_id
                echo "Database connection or user ID is not set.";
            }
        ?>


        <!--<i class='bx bx-edit-alt'></i>-->

    </div>

    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name="doctorProfile" enctype="multipart/form-data">
            <input type="file" class="box" id="box" name="image" accept="image/jpg, image/jpeg, image/png">

            <div class="sub-heading">
                johndoe@gmail.com </br>
                Veterinarian
            </div>
    
            <table class="form-group">
                <tr>
                    <td colspan="2">
                        <div class="formtext">
                            Personal Details
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="name">Name</label>
                    </td>
                    <td>
                        <input type="text" id="name" name="name" placeholder="Enter your name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="DOB">Date of birth</label>
                    </td>
                    <td>
                        <input type="date" id="DOB" name="DOB">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="NIC">NIC</label>
                    </td>
                    <td>
                        <input type="text" id="NIC" name="NIC" placeholder="Enter your NIC number">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="contactNumber">Phone number</label>
                    </td>
                    <td>
                        <input type="text" id="contactNumber" name="contactNumber" placeholder="Enter your phone number">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address</label>
                    </td>
                    <td>
                        <input type="text" id="address" name="address" placeholder="Enter your permanent address">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gender">Gender</label>   
                    </td>
                    <td>
                        <input type="radio" id="gender1" name="gender" value="male">Male
                        <input type="radio" id="gender2" name="gender" value="female" class="female">Female
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="bio">Bio</label>
                    </td>
                    <td>
                        <textarea class="bio" name="bio" placeholder="Enter your bio..."></textarea>
                    </td>
                </tr>


                <!-- Professional Details -->
                <tr>
                    <td colspan="2">
                        <div class="formtext">
                            Professional Details
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="certificate">Veterianary doctor certificate</label>
                    </td>
                    <td>
                        <input type="file" id="certificate" name="certificate" accept=".jpeg, .jpg">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="experience">Year of Experience</label>
                    </td>
                    <td>
                        <input type="number" id="experience" name="experience" placeholder="Enter your years of experience">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="treatmentTime">Time Taken to Treat (in minutes)</label>
                    </td>
                    <td>
                        <input type="number" id="treatmentTime" name="treatmentTime" placeholder="Enter time taken to treat">
                    </td>
                </tr>
                <tr id="special1" style="display: table-row;">
                    <td>
                        <label for="specialization1">Specialization 1</label>
                    </td>
                    <td>
                        <input type="text" id="specialization1" name="specialization1" placeholder="Enter your specialization">
                        <input type="file" id="certificate1" name="certificate1" accept=".jpeg, .jpg">
                    </td>
                </tr>

                <tr id="special2" style="display: none;">
                    <td>
                        <label for="specialization2">Specialization 2</label>
                    </td>
                    <td>
                        <input type="text" id="specialization2" name="specialization2" placeholder="Enter your specialization">
                        <input type="file" id="certificate2" name="certificate2" accept=".jpeg, .jpg">
                    </td>
                </tr>

                <tr id="special3" style="display: none;">
                    <td>
                        <label for="specialization3">Specialization 3</label>
                    </td>
                    <td>
                        <input type="text" id="specialization3" name="specialization3" placeholder="Enter your specialization">
                        <input type="file" id="certificate3" name="certificate3" accept=".jpeg, .jpg">
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align:right;">
                            <button type="button" class="addBtn" onclick="addSpecialization()">Add more...</button>
                    </td>
                </tr>





                <!-- Change Password -->
                <tr>
                    <td colspan="2">
                        <div class="formtext">
                            Change Password
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label for="currentPassword">Current Password</label></td>
                    <td>
                    <div class="password-field">
                        <input type="password" id="currentPassword" name="currentPassword" placeholder="Enter your password">
                        <button type="button" class="toggle-password" onclick="togglePassword('currentPassword')">👁️</button>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:right;" colspan="2">
                        <button type="button" onclick="changePassword()" class="passwordBtn">Change Password</button>
                    </td>
                </tr>
                <tr id="current-password">
                    <td><label for="newCurrentPassword">Current Password</label></td>
                    <td>
                        <div class="password-field">
                            <input type="password" id="newCurrentPassword" name="newCurrentPassword" placeholder="Enter your password">
                            <button type="button" class="toggle-password" onclick="togglePassword('newCurrentPassword')">👁️</button>
                        </div>
                    </td>
                </tr>
                <tr id="new-password">
                    <td><label for="newPassword">New Password</label></td>
                    <td>
                        <div class="password-field">
                            <input type="password" id="newPassword" name="newPassword" placeholder="Enter your new password">
                            <button type="button" class="toggle-password" onclick="togglePassword('newPassword')">👁️</button>
                        </div>
                    </td>
                </tr>
                <tr id="confirm-password">
                    <td><label for="confirmPassword">Confirm Password</label></td>
                    <td>
                        <div class="password-field">
                            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password">
                            <button type="button" class="toggle-password" onclick="togglePassword('confirmPassword')">👁️</button>
                        </div>
                    </td>
                </tr>
                <tr id="cancel-password" style="text-align:right;">
                    <td colspan="2">
                        <button type="button" class="cancelBtn" onclick="resetPassword()">Cancel</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="submitBtn" name="submit">Save Changes</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

     


<script src="../../assets/jsFIles/vetDocotor/profile.js"></script> 




<?php
    if(isset($_POST['submit'])) {
        $user_id = $_SESSION['user_id'];
        $doctorID = $user_id;

        // get the profile picture
        $image = $_FILES['image']['name']; // get the image name
        $image_size = $_FILES['image']['size']; // get the image size
        $image_tmp_name = $_FILES['image']['tmp_name']; // get the image temporary name
        $image_folder = '../../assets/images/vetDoctor/profile/' .$image;

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
        $doctorCertificate_folder = '../../assets/images/vetDoctor/certificate/' .$doctorCertificate;

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
        /*
            if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) { // check if the file is uploaded
                echo "<script> altert('File upload error: ')</script>" . $_FILES['image']['error'];
                exit;
            } else {
                echo "<script>alert('File  successfully.');</script>";
            }
            if (!file_exists($image_tmp_name)) { // check if the file exists
                echo "<script>alert('Temporary file does not exist.')</script>";
                exit;
            } else {
                echo "<script>alert('Temporary file exists.')</script>";
            }

            */
            if (move_uploaded_file($image_tmp_name, $image_folder)) { // move the file to the folder
                echo "<script>alert('File uploaded successfully.');</script>";
            } else {
                echo "<script>alert('File not uploaded');</script>";

            }
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
