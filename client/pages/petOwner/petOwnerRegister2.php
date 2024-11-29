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
        <script defer src="./petOwnerRegisterValidate.js"></script>

        <style>
            .formContainer {
                border-radius: 20px;
                border: 2px solid var(--primary-border-color);
                box-shadow: 0 0 20px grey;
                padding: 2em;


                width: fit-content;
                margin: 1em;
                margin-left: auto;
                margin-right: auto;

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

            .inputContainer {
                margin-bottom: 5px;
                padding-bottom: 15px;
                position: relative;
            }
            .inputContainer label {
                display: inline-block;
            }
            .inputContainer input {
                display: block;
                width: 100%;
                padding: 5px;
                margin-bottom: 5px;
                border: 1px solid;
                /* font-family: inherit; */
            }
            .inputContainer i {
                visibility: hidden;
                position: absolute;
                top: 40%;
                right: 10px;
            }
            .inputContainer small {
                visibility: hidden;
                position: absolute;
                bottom: 0;
                left: 0;
            }
            .inputContainer.success input {
                border-color: green;
            }
            .inputContainer.error input {
                border-color: red;
            }
            .inputContainer.success i.bxs-check-circle {
                color: green;
                visibility: visible;
            }
            .inputContainer.error i.bxs-error-circle {
                color: red;
                visibility: visible;
            }
            .inputContainer.error small {
                color: red;
                visibility: visible;
            }
        </style>
    </head>
    <body>

        <div class="formContainer">
            <div class="logoPart">
                <img src="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" alt="VetiPlus Logo">
            </div>
            <form id="regForm" method="post" onsubmit="return handleSubmit(event)"
                action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h1>Pet Owner Signup</h1>

                <div class="inputContainer">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                        <i class="bx bxs-check-circle bx-sm"></i>
                        <i class="bx bxs-error-circle bx-sm"></i>
                    <small>Error Message</small>
                </div>
                <div class="inputContainer">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" required>
                        <i class="bx bxs-check-circle bx-sm"></i>
                        <i class="bx bxs-error-circle bx-sm"></i>
                    <small>Error Message</small>
                </div>
                <div class="inputContainer">
                    <label for="houseNo">Apartment/ House no.</label>
                    <input type="text" id="houseNo" name="houseNo" required>
                        <i class="bx bxs-check-circle bx-sm"></i>
                        <i class="bx bxs-error-circle bx-sm"></i>
                    <small>Error Message</small>
                </div>
                <div class="inputContainer">
                    <label for="street">Street</label>
                    <input type="text" id="street" name="street" required>
                        <i class="bx bxs-check-circle bx-sm"></i>
                        <i class="bx bxs-error-circle bx-sm"></i>
                    <small>Error Message</small>
                </div>
                <div class="inputContainer">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" required>
                        <i class="bx bxs-check-circle bx-sm"></i>
                        <i class="bx bxs-error-circle bx-sm"></i>
                    <small>Error Message</small>
                </div>
                <div class="inputContainer">
                    <label for="contact">Contact number</label>
                    <input type="tel" id="contact" name="contact" required>
                        <i class="bx bxs-check-circle bx-sm"></i>
                        <i class="bx bxs-error-circle bx-sm"></i>
                    <small>Error Message</small>
                </div>
                <div class="inputContainer">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" required>
                        <i class="bx bxs-check-circle bx-sm"></i>
                        <i class="bx bxs-error-circle bx-sm"></i>
                    <small>Error Message</small>
                </div>
                <div class="inputContainer">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                        <i class="bx bxs-check-circle bx-sm"></i>
                        <i class="bx bxs-error-circle bx-sm"></i>
                    <small>Error Message</small>
                </div>
                <div class="inputContainer">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" required>
                        <i class="bx bxs-check-circle bx-sm"></i>
                        <i class="bx bxs-error-circle bx-sm"></i>
                    <small>Error Message</small>
                </div>
                
                <button type="reset">Clear</button>
                <button type="submit">Submit</button>
            </form>
        </div>
        
        <!-- footer at page's bottom: -->
        <?php include INCLUDE_BASE.'/client/components/guestUser/guestFooter.php'; ?>

    </body>
</html>
