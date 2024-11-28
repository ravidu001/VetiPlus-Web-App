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

    $species = $sanitized['species'];
    $breed = $sanitized['breed'];

    $errors = [];
    $validInputs = true;

    function addError ($msg) {
        global $errors, $validInputs;
        array_push($errors, $msg);
        $validInputs = false;
    }

    if(empty($name)) addError("Empty name value provided!");
    
    $todayDate = new DateTime("now");
    $dobDate = DateTime::createFromFormat('Y-m-d', $dob);
    
    if ($dobDate && $dobDate > $todayDate) addError("Adding possible future pets is not allowed.");
    else $dobDateStr = $dobDate->format('Y-m-d');

    $breedAvailable = $sanitized['breedAvailable'];
    if ($breedAvailable == 1) {
        $breedDescription = $sanitized['breedDescription'];
        if(empty($breedDescription)) addError("Please provide a description for breeding your pet.");
    } else $breedDescription = '';

    if(empty($species)) addError("No pet species provided!");
    if(empty($breed)) addError("No pet breed provided!");

    if(!isset($_FILES['profilePicture'])) addError("Please provide a profile picture for your pet.");

    if($validInputs) {

        $profilePicture = $_FILES['profilePicture'];
    
        $targetDir = INCLUDE_BASE.'/client/assets/images/profilePics/pet/';
        $fileName = basename($profilePicture['name']);
        $targetFilePath = "$targetDir$fileName";
        $uploadDone = move_uploaded_file($profilePicture['tmp_name'], $targetFilePath);
    
        header('Content-Type: application/json');
        
        if ($uploadDone) {
            $stmt = $conn->prepare("INSERT INTO 
                        pet (petOwnerID, name, DOB, gender, species, breed, breedAvailable, breedDescription, profilePicture)
                        VALUES (?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssssiss", $userID, $name, $dobDateStr, $gender, $species, $breed, $breedAvailable, $breedDescription, $fileName);
            
            $insertDone = $stmt->execute();
            $stmt->close();
            
            if ($insertDone) {
                echo json_encode(["status" => "success", "message" => "Pet Profile created successfully."]);
                exit();
            } else {
                echo json_encode(["status" => "failure", "message" => "Unable to add pet!"]);
                exit();
            }
        }
        else {
            echo json_encode(["status" => "failure", "message" => "Error in uploading profile picture!"]);
            exit();
        }
    } else {
        $errorsFormatted = array_map(function($error) { return
            "$error ";
        }, $errors);
        $errorsString = implode('', $errorsFormatted);

        echo json_encode(["status" => "failure", "message" => $errorsString]);
        exit();
    }
}
else header("Location: ".BASE_PATH."/client/pages/petOwner/dashboard.php");
