<?php

include(__DIR__ . '/../../../server/config/backendConfig.php');

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $address = $_POST['address'];
    $gender = strtolower(trim($_POST['gender'])); // Normalize case for gender validation
    $nic = $_POST['nic'];
    $type = 'System Admin';

    // Validate email uniqueness
    $checkEmailQuery = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($checkEmailQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $message = "Email is already signed in. Please enter a new email.";
    }else {
        $query = "Insert into user (email, password, type) values (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $email, $password, $type);
        $stmt->execute();

        
        // Insert data into the database
        $sql = "INSERT INTO systemadmin(email, name, contactNumber, address, gender, NIC) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $email, $name, $phone_number, $address, $gender, $nic);

        if ($stmt->execute()) {
            $message = "Registration admin successful!";
        } else {
            $message = "Error: " . $stmt->error;
        }
    }

    $conn->close();
}

?>
