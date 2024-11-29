<?php

session_start();
$petID = $_SESSION['petID'];

include '../../../../config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function sanitizeInput($input) {
        return htmlspecialchars(trim($input));
    }
    $sanitized = array_map('sanitizeInput', $_POST);

    $name = $sanitized['name'];
    $dob = $sanitized['dob'];
    $breedAvailable = $sanitized['breedAvailable'];
    $breedDescription = $sanitized['breedDescription'];
    
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


    if($validInputs) {
        $stmt = $conn->prepare("UPDATE pet 
                SET name = ?, DOB = ?, breedAvailable = ?, breedDescription = ?
                WHERE petID = ?");
        $stmt->bind_param("ssssi", $name, $dobDateStr, $breedAvailable, $breedDescription, $petID);

        $updateDone = $stmt->execute();
        $stmt->close();
        if($updateDone) {
            echo json_encode(["status" => "success", "message" => "Pet details edited successfuly."]);
            exit();
        } else {
            echo json_encode(["status" => "failure", "message" => "Error updating pet details.\nPlease try again later."]);
            exit();
        }
    } else {
        echo json_encode(["status" => "failure", "message" => $errorsString]);
        exit();
    }
}
else header("Location: ".BASE_PATH."/client/pages/petOwner/dashboard.php");
