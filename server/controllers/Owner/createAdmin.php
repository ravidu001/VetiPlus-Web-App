<?php

include ( __DIR__ . '/../../../server/config/backendConfig.php');

$message = '';

if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
    $address = $_POST['address'];  
    $gender = $_POST['gender'];
    $nic = $_POST['nic'];

        $sql = "INSERT INTO systemadmin(email,password,name,contactNumber,address,gender,NIC) VALUES ('$email','$password','$name','$phone_number','$address','$gender','$nic')";

        if ($conn->query($sql) === TRUE) {
            $message = "Registration successful! ";
        } else {
           $message = "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    } 

?>