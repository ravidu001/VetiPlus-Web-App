<?php

session_start();
$_SESSION['user_id'] = 'piggy@pig.com';
$userID = $_SESSION['user_id'];

include '../../../config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function sanitizeInput($input) {
        return htmlspecialchars(trim($input));
    }
    $sanitized = array_map('sanitizeInput', $_POST);
    
    $name = $sanitized['name']; 
    $dob = $sanitized['dob'];
    $contact = $sanitized['contact'];
    $nic = $sanitized['nic'];
    $gender = $sanitized['gender'];

    $houseNo = $sanitized['houseNo'];
    $street = $sanitized['street'];
    $city = $sanitized['city'];

    $errors = [];
    $validInputs = true;

    function addError ($msg) {
        global $errors, $validInputs;
        array_push($errors, $msg);
        $validInputs = false;
    }

    if(empty($name)) addError("Empty name value provided!");
    elseif (strlen($name) < 5) addError("Name should be at least 5 characters.");

    $today = new DateTime("now");
    $tenYearsAgo = (clone $today)->modify('-10 years')->format('Y-m-d');
    $dobDate = DateTime::createFromFormat('Y-m-d', $dob);

    if ($dobDate && $dobDate > new DateTime($tenYearsAgo)) addError("Invalid date of birth: you should be 10 years at least.");

    $contactRegex = '/07\\d\\d\\d\\d\\d\\d\\d\\d/i';
    if(empty($contact)) addError("No contact number provided!");
    elseif (!preg_match($contactRegex, $contact)) addError("Contact number does not follow Sri Lankan phone pattern!\n10 numbers starting with 07.");

    $nicRegex = '/(?:[4-9][0-9]{8}[vVxX])|(?:[12][0-9]{11})/';
    if(empty($nic)) addError("No NIC number provided!");
    elseif (!preg_match($nicRegex, $nic)) addError("NIC number does not follow Sri Lankan NIC number pattern.");

    if($gender != 'male' && $gender != 'female') addError("Gender is not selected!");

    if(empty($houseNo)) addError("No house number or apartment number provided for Address!");
    if(empty($street)) addError("No street name provided for Address!");
    if(empty($city)) addError("No city provided for Address!");

    $lastLogin = $today->format('Y-m-d H:i');

    header('Content-Type: application/json');

    if($validInputs) {
        $stmt = $conn->prepare("INSERT INTO petowner
            (petOwnerID, fullName, DOB, contactNumber, NIC, gender, houseNo, street, city, lastLogin)
            VALUES (?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssss",$userID, $name, $dob, $contact, $nic, $gender, $houseNo, $street, $city, $lastLogin);
        $insertDone = $stmt->execute();
        $stmt->close();
        
        if($insertDone) {
            echo json_encode(["status" => "success", "message" => "Account created successfully."]);
            exit();
        } else {
            echo json_encode(["status" => "failure", "message" => "Error creating account. Please try again in a few minutes."]);
            exit();
        }
    }
    else {
        $errorsFormatted = array_map(function($error) { return
            "$error ";
        }, $errors);
        $errorsString = implode('', $errorsFormatted);

        echo json_encode(["status" => "failure", "message" => $errorsString]);
        exit();
    }
}
else header("Location: ".BASE_PATH."/index.php");
