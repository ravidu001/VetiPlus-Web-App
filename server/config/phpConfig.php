<?php

session_start();
$_SESSION['user_id'] = 'tharindudeepaloka@gmail.com';
$user_id = $_SESSION['user_id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vetiplus";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
?>