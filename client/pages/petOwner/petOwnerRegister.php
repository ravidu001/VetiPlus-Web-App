<?php
    session_start();
    $_SESSION['user_id'] = 'hmm@hmm.com';
    // $_SESSION['user_id'] = 'sp.john.manuel737@gmail.com';
    $userID = $_SESSION['user_id'];

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

                width: fit-content;
                margin: 1em auto 1em auto;

                display: flex;
                justify-content: center;
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

                font-size: 1.3em;
            }
            form fieldset legend {
                font-weight: bold;
            }
            form input {
                padding: 5px;
                font-size: 1rem;
            }
            form input:valid {
                border: 2px solid green;
            }
            form input[type=date]:invalid {
                color: grey;
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
            <form id="petOwnerRegisterForm" method="post"
                action="<?= BASE_PATH.'/server/controllers/petOwner/petOwnerRegisterHandle.php' ?>">
                <h1>Pet Owner Signup</h1>
                <fieldset>
                    <legend>Personal Details</legend>
                    <label for="name">Name</label>
                        <input type="text" id="name" name="name" minlength="5" placeholder="eg: John Doe" required>
                    <?php 
                        $today = new DateTime("now");
                        $todayDate = $today->format('Y-m-d');
                        $tenYearsAgoDate = (clone $today)->modify('-10 years')->format('Y-m-d');
                    ?>
                    <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob"max="<?= $tenYearsAgoDate ?>" required>
                    <label for="contact">Contact Number</label>
                        <input type="text" id="contact" name="contact" pattern="07\d\d\d\d\d\d\d\d" minlength="10" placeholder="eg: 0767130191" required>
                    <label for="nic">NIC number</label>
                        <input type="text" id="nic" name="nic" placeholder="eg: 200229001015 or 712441524V" pattern="(?:[4-9][0-9]{8}[vVxX])|(?:[12][0-9]{11})" required>
                    <label for="male">Gender</label>
                        <div>
                            <label for="male">Male</label>
                            <input type="radio" id="male" value="male" name="gender" required>
                            <label for="female">Female</label>
                            <input type="radio" id="female" value="female" name="gender" required>
                        </div>
                </fieldset>
                <fieldset>
                    <legend>Address</legend>
                    <label for="houseNo">Apartment/ House no.</label>
                        <input type="text" id="houseNo" name="houseNo" placeholder="eg: 103/1A" required>
                    <label for="street">Street</label>
                        <input type="text" id="street" name="street" placeholder="eg: Hena Road" required>
                    <label for="city">City</label>
                        <input type="text" id="city" name="city" placeholder="eg: Mount-Lavinia" required>
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
            document.getElementById('petOwnerRegisterForm').addEventListener('submit', function (event) {
                event.preventDefault();
                const formData = new FormData(this);

                fetch(this.action, {
                    method: 'POST',
                    body: formData,
                })
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    } else {
                        throw new Error(`HTTP Error: ${response.status}`);
                    }
                })
                .then(data => {
                    if (data.status === 'success') {
                        alert(data.message);
                        window.location.href = '<?= BASE_PATH.'/client/pages/petOwner/dashboard.php' ?>';
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => {
                    console.error('An error occurred\n'+ error);
                    alert('An error occurred.\nPlease try again later.\n'+ error);
                })
            })

            // const userName = document.getElementById('name');
            // const dob = document.getElementById('dob');
            // const houseNo = document.getElementById('houseNo');
            // const street = document.getElementById('street');
            // const city = document.getElementById('city');
            // const contact = document.getElementById('contact');

            // const petOwnerRegisterForm = document.getElementById('petOwnerRegisterForm');
        </script>
    </body>
</html>
