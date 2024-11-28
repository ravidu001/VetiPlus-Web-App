<?php 
    session_start();
    // if (!isset($_SESSION['user_id']))
    //     $_SESSION['user_id'] = 'sp.john.manuel737@gmail.com';
    $userID = $_SESSION['user_id'];

    include '../../../config.php';

    $stmt = $conn->prepare("SELECT * FROM petowner WHERE petOwnerID = ?");
    $stmt->bind_param("s", $userID);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if ($result->num_rows <= 0) {
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

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/profilePages.css" rel="stylesheet">

    </head>
    <body>
        <!-- navbar on top: -->
        <?php include INCLUDE_BASE.'/client/components/petOwner/userNavbar.php'; ?>

        <div class="aloneContent profilePage">
            <h1>My Profile</h1>

            <div class="profilePicContainer">
                <?php if (isset($data['profilePicture'])) : ?>
                    <img src="<?= BASE_PATH.'/client/assets/images/profilePics/petOwner/'.$data['profilePicture'] ?>"
                        alt="Profile Picture">
                <?php else: ?>
                    <span>No profile picture added.</span>
                <?php endif; ?>

                <form id="editPetOwnerProfilePic" method="post" enctype="multipart/form-data" class="profilePicEditForm"
                    action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                    <input type="hidden" name="formName" value="profilePicEdit">

                    <label for="photo">Change Profile Picture:</label>    
                    <input type="file" id="photo" accept="image/*" name="photo" required>

                    <button type="submit">Save</button>
                </form>

            </div>

            <form id="editPetOwnerDetails" method="post" class="profileDetailsEditForm"
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
                    <span class="display-field"><?= $data['houseNo'].', '.$data['streetName'].',<br/>'.$data['city']; ?></span>

                    <input type="text" id="houseNo" class="input-field" name="houseNo" value="<?= $data['houseNo']; ?>" required>
                    <input type="text" id="streetName" class="input-field" name="streetName" value="<?= $data['streetName']; ?>" required>
                    <input type="text" id="city" class="input-field" name="city" value="<?= $data['city']; ?>" required>
                <!-- </div> -->

                <button type="submit" style="display: none;" id="save-button">Save</button>
            </form>

            <form action="../login-singup/logout.php" method="post">
                <button type="submit">Logout</button>
            </form>

            <!-- <button id="logoutButton">Logout</button> -->

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

            // petOwner logout
            document.getElementById('logoutButton').addEventListener('click', function () {
                if (confirm('Are you sure you want to logout?')) {
                    fetch('<?= BASE_PATH ?>/client/pages/petOwner/logout.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            alert('Successfully logged out.')
                            window.location.href = '<?= BASE_PATH ?>/index.php';
                        } else {
                            alert('Failed to logout. Please try again.');
                        }
                    })
                    .catch(error => {
                        console.error('Logout error:', error);
                        alert('An error occurred while logging out.');
                    });
                }
            });

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
            $houseNo = $_POST['houseNo'];
            $streetName = $_POST['streetName'];
            $city = $_POST['city'];

            $stmt = $conn->prepare("UPDATE petowner
                            SET fullName = ?, contactNumber = ?, DOB = ?, houseNo = ?, streetName = ?, city = ?
                            WHERE petOwnerID = ?");
            $stmt->bind_param("sssssss", $name, $contact, $dob, $houseNo, $streetName, $city, $userID);
            $updateSuccess = $stmt->execute();
            $stmt->close();
            if (!$updateSuccess) echo "
                <script> alert('Failed to update details: '$conn->error) </script>";


        }
        if (isset($_POST['formName']) && $_POST['formName'] == 'profilePicEdit') {
            $uploadedPhoto = $_FILES['photo'];

            $targetDir = INCLUDE_BASE.'/client/assets/images/profilePics/petOwner/';
            $fileName = basename($uploadedPhoto['name']);
            $targetFilePath = "$targetDir$fileName";
            
            $uploadDone = move_uploaded_file($uploadedPhoto['tmp_name'], $targetFilePath);
            if ($uploadDone) {
                $stmt = $conn->prepare("UPDATE petowner SET profilePicture = ? WHERE petOwnerID = ?");
                $stmt->bind_param("ss", $fileName, $userID);

                if ($stmt->execute()) {
                    echo "
                    <script>
                        alert('Image uploaded and saved');
                        window.location.assign(window.location.href);    // refresh the current page
                    </script>";
                } else {
                    echo "<script> alert(Database error: $conn->error) </script>";
                }
            } else {
                echo "<script> alert(Error uploading file: $conn->error) </script>";
            }   
        }
    }
?>
