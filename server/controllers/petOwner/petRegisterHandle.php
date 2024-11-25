<?php

session_start();
$_SESSION['user_id'] = 'sp.john.manuel737@gmail.com';
$userID = $_SESSION['user_id'];

include '../../../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function sanitizeInput($input) {
        return htmlspecialchars(trim($input));
    }
    $sanitized = array_map('sanitizeInput', $_POST);

    $name = $sanitized['name'];
    $dob = $sanitized['dob'];
    $gender = $sanitized['gender'];
    $weight = $sanitized['weight'];

    $species = $sanitized['species'];
    $breed = $sanitized['breed'];

    $breedAvailable = $sanitized['breedAvailable'];
    ($breedAvailable == 1) 
        ? $breedDescription = $sanitized['breedDescription']
        : $breedDescription = '';

    $profilePicture = $_FILES['profilePicture'];

    $targetDir = INCLUDE_BASE.'/client/assets/images/profilePics/pet/';
    $fileName = basename($profilePicture['name']);
    $targetFilePath = "$targetDir$fileName";
    $uploadDone = move_uploaded_file($profilePicture['tmp_name'], $targetFilePath);

    $stmt = $conn->prepare("INSERT INTO 
                pet (petOwnerID, name, DOB, gender, weight, species, breed, breedAvailable, breedDescription, profilePicture)
                VALUES (?,?,?,?,?,?,?,?,?,?)");

    if ($uploadDone) {
        $stmt->bind_param("ssssdssiss", $userID, $name, $dob, $gender, $weight, $species, $breed, $breedAvailable, $breedDescription, $fileName);
        
        $insertDone = $stmt->execute();
        $stmt->close();
        
        if ($insertDone) {
            echo json_encode(["status" => "success", "message" => "Pet Profile created successfully."]);
            exit();
        } else {
            echo json_encode(["status" => "failure", "message" => "Unable to add pet!".$conn->error]);
            exit();
        }
    }
    else {
        echo json_encode(["status" => "failure", "message" => "Error in uploading profile picture!".$conn->error]);
        exit();
    }
}
else header("Location: ".BASE_PATH."/client/pages/petOwner/dashboard.php");


// <script>
// console.log('Pet Profile created')
// alert('Pet Successfully Added')
// window.location.href = "<?= BASE_PATH.'/client/pages/petOwner/dashboard.php'"
// </script>