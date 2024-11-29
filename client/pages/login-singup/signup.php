<?php
    
    include(__DIR__ . '/../../../server/config/config.php');
    

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']); // to prevent sql injection
        $userType = mysqli_real_escape_string($conn, $_POST['userType']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $repassword = mysqli_real_escape_string($conn, $_POST['repassword']);

        $select = mysqli_query($conn, "SELECT * FROM `User` WHERE email='$email'") or die('query failed');

        if (mysqli_num_rows($select) > 0) {
            $message[] = 'User already exists';
        } else {
            if ($password != $repassword) {
                $message[] = 'Confirm password not matched!';
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password
                $insert = mysqli_query($conn, "INSERT INTO `User` (email, password, type) VALUES ('$email', '$hashed_password', '$userType')") or die('query failed');

                if ($insert) {
                    $message[] = 'Registered successfully!';
                    echo "<script>
                    window.location.href = './login.php';
                    </script>";
                } else {
                    $message[] = 'Registration failed!';
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/images/logo.png" type="image/png">
    <title>VetiPlus Login</title>
    <link rel="stylesheet" href="../../assets/cssFiles/login-signup/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="left-panel">
            
                <div class="home-icon">
                    <a href="../../../index.php">  <!-- guest user file location-->
                        <i class='bx bx-home'></i>
                    </a>
                </div>
            
            <img src="../../assets/images/login.png" alt="Pet Illustration" class="illustration">
        </div>
        <div class="gradient">
            <div class="right-panel">
                <div class="login-box">
                    <h2>Sign Up</h2>
                    <div class="sub-heading">
                        Create your account
                    </div>
                    
                    <?php
                        if(isset($message)){
                            foreach($message as $message){
                                echo '<div class="message">'. $message . '</div>';
                            }
                        }
                    ?>
                    
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="login-form" enctype="multipart/form-data">

                        <div class="input-group">
                            <label for="email">
                            <img src="../../assets/images/emailrm.png" alt="Email" class="icon">
                            </label>
                            <input type="email" id="email" name="email" placeholder="Email Address" required>
                        </div>

                        <div class="input-group">
                            <label for="userType">
                                <img src="../../assets/images/type-signup.png" alt="User Type" class="icon">
                            </label>
                            <select id="userType" name="userType" required>
                                <option value="" disabled selected>Select User Type</option>
                                <option value="Pet Owner">Pet Owner</option>
                                <option value="Vet Doctor">Vet Doctor</option>
                                <option value="Vet Assistant">Vet Assistant</option>
                                <option value="Salon">Salon</option>
                            </select>
                        </div>
                    <!--
                        <div class="input-group">
                            <label for="Phone">
                            <img src="../../assets/images/phone-signup.png" alt="Email" class="icon">
                            </label>
                            <input type="text" id="phone" name="phone" placeholder="Phone Number" size="10" required>
                        </div>
                    -->

                        <div class="input-group">
                            <label for="password">
                                <img src="../../assets/images/key.png" alt="Password" class="icon">
                            </label>
                            <input type="password" id="password" name="password" placeholder="Password" required>
                            <span class="toggle-password" onclick="togglePassword()">👁️</span>
                        </div>

                        <div class="input-group">
                            <label for="repassword">
                                <img src="../../assets/images/key.png" alt="rePassword" class="icon">
                            </label>
                            <input type="password" id="repassword" name="repassword" placeholder="Re-Password" required>
                            <span class="toggle-password" onclick="togglePassword()">👁️</span>
                        </div>
                    <!--
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    -->
                        <button type="submit" class="login-button" name="submit"> Sign up</button>
                    </form>
                    <p class="register-prompt">
                        Already have an account? <a href="./login.php" class="register-link">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/jsFIles/login-signup/script.js"></script>
</body>
</html>
