<div class="main-container1">
    <div class="profile-pic">
        <?php
        /*if(!isset($_SESSION['user_id'])) {
            die("User ID not set in session");
        } else {
            echo "<script>alert('".$_SESSION['user_id']."');</script>";
        }

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            echo "<script>alert('Connection successful');</script>";
        }
        */
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
                        
                        if (empty($image)) {
                            echo "<img src='../../assets/images/vetDoctor/profile/defaultProfile.png' alt='defaul' class='picture'>";
                        } else {
                            echo "<img src='../../assets/images/vetDoctor/profile/$image' alt='profile' class='picture'>";
                        }
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
                        echo "<img src='../../assets/images/vetDoctor/profile/defaultProfile.png' alt='profile pictu' class='picture'>";
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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name="doctorProfile"
            enctype="multipart/form-data">

            <input type="file" class="box" id="box" name="image" accept="image/jpg, image/jpeg, image/png">

            <div class="sub-heading">
                <?php echo isset($user_id) ? htmlspecialchars($user_id) : ''; ?></br>
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
                        <input type="text" id="name" name="name" placeholder="Enter your name"
                            value="<?php echo isset($fullName) ? htmlspecialchars($fullName) : ''; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="DOB">Date of birth</label>
                    </td>
                    <td>
                        <input type="date" id="DOB" name="DOB"
                            value="<?php echo isset($DOB) ? htmlspecialchars($DOB) : ''; ?>"
                            <?php echo isset($DOB) ? 'readonly' : ''; ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="NIC">NIC</label>
                    </td>
                    <td>
                        <input type="text" id="NIC" name="NIC" placeholder="Enter your NIC number"
                            value="<?php echo isset($NIC) ? htmlspecialchars($NIC) : ''; ?>"
                            <?php echo isset($NIC) ? 'readonly' : ''; ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="contactNumber">Phone number</label>
                    </td>
                    <td>
                        <input type="text" id="contactNumber" name="contactNumber" maxlength="10"
                            placeholder="Enter your phone number"
                            value="<?php echo isset($contactNumber) ? htmlspecialchars($contactNumber) : ''; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:right; margin-right: 10px; margin-top:0px; ">
                        <div id="phoneMessage" style="color: red;"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address</label>
                    </td>
                    <td>
                        <input type="text" id="address" name="address" placeholder="Enter your permanent address"
                            value="<?php echo isset($address) ? htmlspecialchars($address) : ''; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gender">Gender</label>
                    </td>
                    <td>
                        <input type="radio" id="gender1" name="gender" value="male"
                            <?php echo (isset($gender) && $gender == 'male') ? 'checked' : ''; ?><?php echo isset($gender) && $gender == 'male' ? 'readonly' : ''; ?>>Male
                        <input type="radio" id="gender2" name="gender" value="female" class="female"
                            <?php echo (isset($gender) && $gender == 'female') ? 'checked' : ''; ?>
                            <?php echo isset($gender) && $gender == 'female' ? 'readonly' : ''; ?>>Female
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="bio">Bio</label>
                    </td>
                    <td>
                        <textarea class="bio" name="bio" placeholder="Enter your bio...">
                            <?php echo isset($bio) ? htmlspecialchars($bio) : ''; ?>
                        </textarea>
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
                        <?php 
                        if(isset($doctorCertificate) || !empty($doctorCertificate)) {
                            echo "<img src='../../assets/images/vetDoctor/certificate/$doctorCertificate' alt='certificate' class='doc-certificate'>";
                        } else {
                            echo '<input type="file" id="certificate" name="certificate" accept=".jpeg, .jpg" required>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="experience">Year of Experience</label>
                    </td>
                    <td>
                        <input type="number" id="experience" name="experience"
                            placeholder="Enter your years of experience"
                            value="<?php echo isset($experience) ? htmlspecialchars($experience) : ''; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="treatmentTime">Time Taken to Treat (in minutes)</label>
                    </td>
                    <td>
                        <input type="number" id="treatmentTime" name="treatmentTime"
                            placeholder="Enter time taken to treat"
                            value="<?php echo isset($timeSlot) ? htmlspecialchars($timeSlot) : ''; ?>">
                    </td>
                </tr>
                <tr id="special1" style="display: table-row;">
                    <td>
                        <label for="specialization1">Specialization </label>
                    </td>
                    <td>
                        <input type="text" id="specialization1" name="specialization1"
                            placeholder="Enter your specialization">

                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:right;">
                        <button type="submit" class="submitBtn" name="submit">Edit Profile</button>
                    </td>
                </tr>
            </table>
        </form>
        
        <form action="../../../server/controllers/vetDoctor/passwordChange.php" method="post" name="changePasswordform" enctype="multipart/form-data">
            <table class="form-group">


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
                            <input type="password" id="currentPassword" name="currentPassword"
                                placeholder="* * * * * * * *" readonly>
                            <button type="button" class="toggle-password"></button>
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
                            <input type="password" id="newCurrentPassword" name="newCurrentPassword"
                                placeholder="Enter your password">
                            <button type="button" class="toggle-password"
                                onclick="togglePassword('newCurrentPassword')">👁️</button>
                        </div>
                    </td>
                </tr>
                <tr id="new-password">
                    <td><label for="newPassword">New Password</label></td>
                    <td>
                        <div class="password-field">
                            <input type="password" id="newPassword" name="newPassword"
                                placeholder="Enter your new password">
                            <button type="button" class="toggle-password"
                                onclick="togglePassword('newPassword')">👁️</button>
                        </div>
                    </td>
                <tr id="password-message">
                    <td colspan="2" style="text-align:right; margin-right: 10px; margin-top:0px; ">
                        <div id="passwordMessage" style="color: red;"></div>
                    </td>
                </tr>
                </tr>
                <tr id="confirm-password">
                    <td><label for="confirmPassword">Confirm Password</label></td>
                    <td>
                        <div class="password-field">
                            <input type="password" id="confirmPassword" name="confirmPassword"
                                placeholder="Confirm your password">
                            <button type="button" class="toggle-password"
                                onclick="togglePassword('confirmPassword')">👁️</button>
                        </div>
                    </td>
                </tr>
                <tr id="cancel-password" style="text-align:right;">
                    <td style="text-align:left;">
                        <button type="button" class="cancelBtn" onclick="resetPassword()">Cancel</button>
                    </td>
                    <td>
                        <button type="submit" class="cancelBtn" name="passwordChange">Save</button>
                    </td>
                </tr>

            </table>
        </form>
        <button type="button" class="logoutBtn">
            Logout
        </button>
        <button type="button" class="deleteBtn">
            Delete Account
        </button>
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
        echo "<script>alert('".$fullName."');</script>";
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

            */

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
                    SET  fullName = '$fullName', profilePicture = '$image', contactNumber = '$contactNumber', address = '$address', NIC = '$NIC', DOB = '$DOB', gender = '$gender', bio = '$bio', experience = '$experience', doctorCertificate = '$doctorCertificate', timeSlot = '$timeSlot'
                    WHERE doctorID = '$user_id'";
                $result = mysqli_query($conn, $query);
                echo "<script>alert('methana');</script>";
                if($result ) {
                    echo "<script>alert('Profile updated successfully');</script>";
                    /*
                        echo "<script>
                                alert('Profile updated successfully');
                                window.location.reload(); 
                              </script>";
                    */
                } else {
                    echo "<script>alert('Profile not updated');</script>";
                }
            } else {
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
                    timeSlot
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
                    $timeSlot
                )";

               echo "<script>alert('hello');</script>";
               if(mysqli_query($conn, $query)) {
                    echo "<script>alert('Profile added successfully');</script>";
                } else {
                    echo "<script>alert('Profile not Added');</script>";
                }
                

                echo "<script>alert('$result ekata psse');</script>";
                if($result) {
                    echo "<script>alert('Profile added successfully');</script>";
                } else {
                    echo "<script>alert('Profile not Added');</script>";
                }
            } 
        }
    }


    
?>