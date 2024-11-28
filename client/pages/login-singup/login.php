<?php
    session_start();
    include(__DIR__ . '/../../../server/config/config.php');

    // Enable error reporting for debugging
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $message = []; // Initialize message array

    if (isset($_POST['login'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']); 
        $password = $_POST['password'];

        // Retrieve user by email
        $select = mysqli_query($conn, "SELECT * FROM `User` WHERE email='$email'") or die('Query failed');

        if (mysqli_num_rows($select) > 0) {
            $row = mysqli_fetch_assoc($select);
            
            // Verify the password with the hashed password stored in the database
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['email'];
                
                // Check if the user is logging in for the first time
                if ($row['loginCount'] == 0) {
                    // increase the login count
                    $loginCount = $row['loginCount'] + 1;
                    $update = mysqli_query($conn, "UPDATE `User` SET loginCount='$loginCount' WHERE email='$email'") or die('Query failed');

                    // Redirect based on user type
                    switch ($row['type']) {
                        case 'Vet Doctor':
                            header('Location: ../vetDoctor/profile.php');
                            break;
                        case 'Pet Owner':
                            header('Location: ../petOwner/petOwnerRegister.php');
                            break;
                        case 'Salon':
                            header('Location: ../salon/FirstTimeRenderPage.php');
                            break;
                        case 'Vet Assistant':
                            header('Location: ../vetAssistant/home.php');
                            break;
                        case 'System Admin':
                            header('Location: ../systemAdmin/home.php');
                            break;
                        case 'Owner':
                            header('Location: ../owner/home.php');
                            break;
                        default:
                            $message[] = 'User type not recognized!';
                    }
                    exit();
                } else {
                    // increase the login count
                    $loginCount = $row['loginCount'] + 1;
                    $update = mysqli_query($conn, "UPDATE `User` SET loginCount='$loginCount' WHERE email='$email'") or die('Query failed');

                    // Redirect based on user type
                    switch ($row['type']) {
                        case 'Vet Doctor':
                            header('Location: ../vetDoctor/homeNew.php');
                            break;
                        case 'Pet Owner':
                            header('Location: ../petOwner/home.php');
                            break;
                        case 'Salon':
                            header('Location: ../salon/home.php');
                            break;
                        case 'Vet Assistant':
                            header('Location: ../vetAssistant/home.php');
                            break;
                        case 'System Admin':
                            header('Location: ../systemAdmin/home.php');
                            break;
                        case 'Owner':
                            header('Location: ../owner/home.php');
                            break;

                        default:
                            $message[] = 'User type not recognized!';
                    }
                    exit();
                }
            } else {
                $message[] = 'Incorrect email or password';
            }
        } else {
            $message[] = 'Account not exisits. Please register';
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
                    <a href="../../../../index.php">  <!-- guest user file location-->
                        <i class='bx bx-home'></i>
                    </a>
                </div>
            
            <img src="../../assets/images/login.png" alt="Pet Illustration" class="illustration">
        </div>
        <div class="gradient">
            <div class="right-panel">
                <div class="login-box">
                    <h2>Welcome to <span class="brand"><br />VetiPlus</span></h2>
                    
                    <div>
                        <?php
                            if(isset($message)){
                                foreach($message as $message){
                                    echo '<div class="message">'. $message . '</div>';
                                }
                            }
                        ?>
                    </div>
                    
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="login-form">
                        <div class="input-group">
                            <label for="email">
                            <img src="../../assets/images/emailrm.png" alt="Email" class="icon">
                            </label>
                            <input type="email" id="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="input-group">
                            <label for="password">
                                <img src="../../assets/images/key.png" alt="Password" class="icon">
                            </label>
                            <input type="password" id="password" name="password" placeholder="Password" required>
                            <span class="toggle-password" onclick="togglePassword()">👁️</span>
                        </div>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                        <button type="submit" class="login-button" name="login">Login</button>
                    </form>
                    <p class="register-prompt">
                        Don’t have an account? <a href="signup.php" class="register-link">Register Now</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/jsFIles/login-signup/script.js"></script>
</body>
</html>
