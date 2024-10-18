<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetiPlus Login</title>
    <link rel="stylesheet" href="../../assets/cssFiles/login-signup/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <img src="../../assets/images/login.png" alt="Pet Illustration" class="illustration">
        </div>
        <div class="gradient">
            <div class="right-panel">
                <div class="login-box">
                    <h2>Welcome to <span class="brand"><br />VetiPlus</span></h2>
                    <form action="#" method="POST" class="login-form">
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
                        <button type="submit" class="login-button">Login</button>
                    </form>
                    <p class="register-prompt">
                        Don’t have an account? <a href="#" class="register-link">Register Now</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/jsFIles/login-signup/script.js"></script>
</body>
</html>
