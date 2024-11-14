<?php 
    session_start();
    if (!isset($_SESSION['user_id']))
        $_SESSION['user_id'] = 'sp.john.manuel737@gmail.com';
    $userID = $_SESSION['user_id'];

    include '../../../config.php';

    $stmt = $conn->prepare("SELECT * FROM petowner WHERE petOwnerID = ?");
    $stmt->bind_param("s", $userID);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if ($result->num_rows <= 0) {
        // $error_message = urlencode($conn->error); // Encode the error message
        // header("Location: ./errorPage.php?msg=$error_message");
        // exit();
        echo $conn->error;
    }
    $data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pet Owner Profile</title>

        <link rel="icon" href="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" type="image/png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/colourPalette.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/styles.css" rel="stylesheet">
        
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/navBar.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/myFooter.css" rel="stylesheet">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/poppinsFont.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/profilePage.css" rel="stylesheet">

    </head>
    <body>
        <!-- navbar on top: -->
        <?php include INCLUDE_BASE.'/client/components/petOwner/userNavbar.php'; ?>

        <div class="aloneContent profilePage">
            <h1>My Profile</h1>

            <div class="profilePicContainer">
                <img src="<?= BASE_PATH.'/client/assets/images/profilePics/petOwner/'.$data['profilePicture'] ?>"
                    alt="Profile Picture">
                <form id="profilePicEdit" method="post" enctype="multipart/form-data"
                    action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                    <input type="hidden" name="formName" value="profilePicEdit">

                    <label for="photo">Change Profile Picture:</label>    
                    <input type="file" id="photo" accept="image/*" name="photo" required>

                    <button type="submit">Save</button>
                </form>
            </div>

            <form id="userEditForm" method="post"
                action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                <input type="hidden" name="formName" value="profileDetailsEdit">

                <!-- <div class="userData"> -->
                    <label for="name">Name: </label>
                    <span class="display-field"><?= $data['fullName']; ?></span>
                    <input type="text" id="name" class="input-field" name="name" value="<?= $data['fullName']; ?>" required>
                <!-- </div> -->

                <button type="button" onclick="toggleEdit()">Edit</button>

                <!-- <div class="userData"> -->
                    <label for="contact">Contact Number: </label>
                    <span class="display-field"><?= $data['contactNumber']; ?></span>
                    <input type="number" id="contact" class="input-field" name="contact" value="<?= $data['contactNumber']; ?>" required>
                <!-- </div> -->

                <!-- <div class="userData"> -->
                    <label for="dob">Date of Birth: </label>
                    <span class="display-field"><?= $data['DOB']; ?></span>
                    <input type="date" id="dob" class="input-field" name="dob" value="<?= $data['DOB']; ?>" required>
                <!-- </div> -->
                
                <!-- <div class="userData"> -->
                    <label for="nic">NIC Number: </label>
                    <span class="display-field"><?= $data['NIC']; ?></span>
                    <input type="text" id="nic" class="input-field" name="nic" value="<?= $data['NIC']; ?>" required>
                <!-- </div> -->
                
                <!-- <div class="userData"> -->
                    <label id="address">Address: </label>
                    <span class="display-field"><?= $data['houseNo'].', '.$data['street'].'<br/>'.$data['city']; ?></span>

                    <input type="text" id="houseNo" class="input-field" name="houseNo" value="<?= $data['houseNo']; ?>" required>
                    <input type="text" id="street" class="input-field" name="street" value="<?= $data['street']; ?>" required>
                    <input type="text" id="city" class="input-field" name="city" value="<?= $data['city']; ?>" required>
                <!-- </div> -->
                
                <!-- <div class="userData"> -->
                    <!-- <label for="nic">Available for breeding: </label>
                    <span class="display-field"><?= $data['breedAvailable'] == 1 ? 'Yes': 'No'; ?></span>

                    <label for="breedAvailYes" class="input-field">Yes</label>
                        <input type="radio" id="breedAvailYes" class="input-field" name="breedAvail" value="1" required>
                    <label for="breedAvailNo" class="input-field">No</label>
                        <input type="radio" id="breedAvailNo" class="input-field" name="breedAvail" value="0" required> -->
                <!-- </div> -->

                <button type="submit" style="display: none;" id="save-button">Save</button>
            </form>
        </div>

        <!-- footer at page's bottom: -->
        <?php include INCLUDE_BASE.'/client/components/petOwner/userFooter.php'; ?>

        <script>
            function toggleEdit() {
                const displayFields = document.querySelectorAll('.display-field');
                const inputFields = document.querySelectorAll('.input-field');
                const editButton = document.querySelector('button[onclick="toggleEdit()"]')
                const saveButton = document.getElementById('save-button');

                if (editButton.textContent === "Edit") {
                    // Switch to edit mode
                    displayFields.forEach(field => field.style.display = 'none');
                    inputFields.forEach(field => field.style.display = 'inline-block');
                    editButton.textContent = "Cancel";
                    saveButton.style.display = "inline-block";
                }
                else {
                    // Switch back to display mode without saving
                    inputFields.forEach(field => field.style.display = 'none');
                    displayFields.forEach(field => field.style.display = 'inline');
                    editButton.textContent = "Edit";
                    saveButton.style.display = "none";
                }
            }
        </script>
    </body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['formName']) && $_POST['formName'] == 'profileDetailsEdit') {

            $name = $_POST['name'];
            $contact = $_POST['contact'];
            $dob = $_POST['dob'];
            $nic = $_POST['nic'];

        }
        if (isset($_POST['formName']) && $_POST['formName'] == 'profilePicEdit') {
            $uploadedPhoto = $_FILES['photo'];

            $targetDir = BASE_PATH.'/client/assets/images/profilePics/petOwner/';
            $fileName = basename($uploadedPhoto['name']);
            $targetFilePath = "$targetDir$fileName";
            
            $uploadDone = move_uploaded_file($uploadedPhoto['tmp_name'], $targetFilePath);
            if ($uploadDone) {
                $stmt = $conn->prepare("UPDATE petowner SET profilePicture = ? WHERE petOwnerID = ?");
                $stmt->bind_param("ss", $fileName, $userID);

                if ($stmt->execute()) {
                    echo "Image uploaded and saved";
                    exit;
                } else {
                    echo "Database error: ". $conn->error;
                }
            } else {
                echo "Error uploading file";
            }   
        }
    }
?>