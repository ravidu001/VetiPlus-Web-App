<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function sanitizeInput($input) {
        return htmlspecialchars(trim($input));
    }
    $sanitized = array_map('sanitizeInput', $_POST);

    $email = $sanitized['email'];
    $contact = $sanitized['contact'];
    $msgType = $sanitized['msgType'];
    $msg = $sanitized['msg'];

    if ($msgType == 'feedback') {

    }
    elseif ($msgType == 'complaint') {

    }
    else {

    }

    $stmt = $conn->prepare("INSERT INTO x (email, contact, message)
            VALUES (?,?,?)");
    $stmt->bind_param("sss",$email, $contact, $msg);
}

?>