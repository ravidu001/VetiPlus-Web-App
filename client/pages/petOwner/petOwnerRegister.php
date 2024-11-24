<?php
    include '../../../config.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PetOwner Registeration</title>
        <link rel="icon" href="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" type="image/png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/colourPalette.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/styles.css" rel="stylesheet">
        
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/navBar.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/myFooter.css" rel="stylesheet">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


        <style>
            .formContainer {
                border-radius: 20px;
                border: 2px solid var(--primary-border-color);
                padding: 2em;

                margin: 1em;
                margin-left: 12%;
                margin-right: 12%;

                display: flex;
                justify-content: space-between;
                gap: 2rem;
            }

            .formContainer .logoPart {
                background-color: var(--primary-border-color);
                display: flex;
                align-items: center;
                justify-content: center;

                border-radius: 10px;
                padding: 1em;
            }
            .logoPart img {
                width: 10em;
            }
            form {
                display: flex;
                flex-direction: column;
                gap: 5px;
            }
            form fieldset {
                display: grid;
                grid-template-columns: 1fr 2fr;
                gap: 5px;

                border: 1px solid var(--shadow-color);
                padding: 15px;
                margin-bottom: 15px;

                font-size: 1.2em;
            }
            form fieldset legend {
                font-weight: bold;
            }
            form input {
                padding: 5px;
            }
            form input:valid {
                border: 2px solid green;
            }

            .formButtons {
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 10vw;
            }
            .formButtons button {
                padding: 5px;

                font-size: 1.2em;

                border-radius: 10px;
                background-color: var(--button-bg-color);
                color: var(--button-text-color);

                width: 10vw;
            }
            .formButtons button:hover {
                cursor: pointer;
                background-color: var(--button-hover-bg-color);
            }
        </style>
    </head>
    <body>

        <div class="formContainer">
            <div class="logoPart">
                <img src="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" alt="VetiPlus Logo">
            </div>
            <form id="regForm" method="post"
                action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h1>Pet Owner Signup</h1>
                <fieldset>
                    <legend>Personal Details</legend>
                    <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="eg: John Doe" required>
                    <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" max="<?= (new DateTime("now"))->format('Y-m-d') ?>" required>
                </fieldset>
                <fieldset>
                    <legend>Address</legend>
                    <label for="homeNo">Apartment/ House no.</label>
                        <input type="text" id="homeNo" name="homeNo" placeholder="eg: 103/1A" required>
                    <label for="street">Street</label>
                        <input type="text" id="street" name="street" placeholder="eg: Hena Road" required>
                    <label for="city">City</label>
                        <input type="text" id="city" name="city" placeholder="eg: Mount-Lavinia" required>
                </fieldset>
                <fieldset>
                    <legend>Contact</legend>
                    <label for="contact">Contact Number</label>
                        <input type="tel" id="contact" name="contact" pattern="07\d\d\d\d\d\d\d\d" placeholder="eg: 0767130191" required>
                    <label for="email">Email</label>
                        <input type="email" id="email" name="email" pattern="^[^\s@]+@([^\s@.,]+\.)+[^\s@.,]{2,}" placeholder="user@gmail.com" required>
                </fieldset>
                <fieldset>
                    <legend>Password Setup</legend>
                    <label for="password">Enter a Password</label>
                        <input type="password" id="password" name="password" required>
                    <label for="confirmPassword">Confirm Password</label>
                        <input type="password" id="confirmPassword" required>
                </fieldset>
                <span id="errorMsg"></span>
                <div class="formButtons">
                    <button type="reset">Clear</button>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
        
        <!-- footer at page's bottom: -->
        <?php include INCLUDE_BASE.'/client/components/guestUser/guestFooter.php'; ?>

        <script>
            const userName = document.getElementById('name');
            const dob = document.getElementById('dob');
            const homeNo = document.getElementById('homeNo');
            const street = document.getElementById('street');
            const city = document.getElementById('city');
            const contact = document.getElementById('contact');
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirmPassword');

            const regForm = document.getElementById('regForm');

        </script>
    </body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // $fname = htmlspecialchars($_POST['fname']);
    // $lname = htmlspecialchars($_POST['lname']);

    $name = htmlspecialchars($_POST['name']);
    $dob = htmlspecialchars($_POST['dob']);

    $homeNo = htmlspecialchars($_POST['homeNo']);
    $street = htmlspecialchars($_POST['street']);
    $city = htmlspecialchars($_POST['city']);

    $contact = htmlspecialchars($_POST['contact']);
    $email = htmlspecialchars($_POST['email']);

    $password = htmlspecialchars($_POST['password']);

    $errors = [];

    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($email == false) array_push($errors, "Invalid Email");

    $today = new DateTime("now");
    $tenYearsAgo = $today->modify('-10 years')->format('Y-m-d');
    $dobDate = DateTime::createFromFormat('Y-m-d', $dob);

    if ($dobDate && $dobDate > new DateTime($tenYearsAgo)) array_push($errors, "Invalid date of birth: should be 10 years at least");

}
// else {
//     header("Location: ../../../../index.php");
// }

?>
