<?php

session_start();
$petID = $_SESSION['petID'];

include '../../../../config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $stmt = $conn->prepare("DELETE FROM pet where petID = ?");
    $stmt->bind_param("s", $petID);

    $execDone = $stmt->execute();
    $stmt->close();
    
    header('Content-Type: application/json');

    if ($execDone) {
        echo json_encode(["status" => "success", "message" => "Successfully deleted pet profile. 😿"]);
        unset($_SESSION['petID']);
        exit();
    } else {
        echo json_encode(["status" => "failure", "message" => "Error deleting pet profile. 😼\nTry again later."]);
        exit();
    }
}
else header("Location: ".BASE_PATH."/client/pages/petOwner/dashboard.php");
