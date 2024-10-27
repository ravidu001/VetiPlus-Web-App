<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" href="../../img/vpLogo.png" />
        <title>Pet Owner Registration</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link href="css/style.css" rel="stylesheet"> -->
    </head>
    <body>    
        <?php
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'test';

            $conn = new mysqli($host, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // 
            // fname, lname, dob, homeNo, street, city, mobile, email, password
            extract($_POST);

            // hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $loginCredentials_stmt = $conn->prepare("INSERT INTO ? (email, password) VALUES (? ?)");
            $loginCredentials_stmt->bind_param("ss", $email, $hashed_password);

            $userDetails_stmt = $conn->prepare("INSERT INTO ? (fname, lname, dob, mobile )
                                    VALUES (? ? ? ? ? ? ?)");
            // $userDetails_stmt->bind_param("ss", );
        
            if ($loginCredentials_stmt->execute() && $userDetails_stmt->execute()) {
                echo "New user registered and details added successfully.";
            } else {
                echo "Error" , $loginCredentials_stmt->error , $userDetails_stmt->error;
            }
        ?>
    </body>
</html>