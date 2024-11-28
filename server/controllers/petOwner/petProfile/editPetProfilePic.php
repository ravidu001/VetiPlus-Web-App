<?php

session_start();
$petID = $_SESSION['petID'];

include '../../../../config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $profilePicture = $_FILES['profilePicture'];
    
    $targetDir = INCLUDE_BASE.'/client/assets/images/profilePics/pet/';
    $fileName = basename($profilePicture['name']);
    $targetFilePath = "$targetDir$fileName";
    
    $uploadDone = move_uploaded_file($profilePicture['tmp_name'], $targetFilePath);
    if ($uploadDone) {
        $stmt = $conn->prepare("UPDATE pet SET profilePicture = ? WHERE petID = ?");
        $stmt->bind_param("ss", $fileName, $petID);
    
        $execDone = $stmt->execute();
        $stmt->close();
    
        if ($execDone) { 
            echo json_encode(["status" => "success", "message" => "Image updated successfully."]);
            exit();
        } else {
            echo json_encode(["status" => "failure", "message" => "Error updating file.\nPlease try again later."]);
            exit();
        }
    } else {
        echo json_encode(["status" => "failure", "message" => "Error uploading image.\nPlease try again later."]);
        exit();
    }
    
}
else header("Location: ".BASE_PATH."/client/pages/petOwner/dashboard.php");
