<?php
    // base location for PHP FORM HANDLERS, HEADER locations
    // images, plain href, css files and other stuff:
    define('BASE_PATH', 'http://localhost/VetiPlus-Web-App');

    // base location for php include files:
    define('INCLUDE_BASE', __DIR__);
    
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'vetiplus';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
