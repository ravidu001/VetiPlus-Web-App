<?php
    session_start();
    $_SESSION['user_id'] = 'piggy@pig.com';
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
            <form id="regForm" method="post"
                action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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
            const userName = document.getElementById('name');
            const dob = document.getElementById('dob');
            const houseNo = document.getElementById('houseNo');
            const street = document.getElementById('street');
            const city = document.getElementById('city');
            const contact = document.getElementById('contact');

            const regForm = document.getElementById('regForm');

        </script>
    </body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // $name = htmlspecialchars($_POST['name']);
    // $dob = htmlspecialchars($_POST['dob']);
    // $contact = htmlspecialchars($_POST['contact']);

    // $houseNo = htmlspecialchars($_POST['houseNo']);
    // $street = htmlspecialchars($_POST['street']);
    // $city = htmlspecialchars($_POST['city']);
    function sanitizeInput($input) {
        return htmlspecialchars(trim($input));
    }
    $sanitized = array_map('sanitizeInput', $_POST);
    
    $name = $sanitized['name']; 
    $dob = $sanitized['dob'];
    $contact = $sanitized['contact'];
    $nic = $sanitized['nic'];
    $gender = $sanitized['gender'];

    $houseNo = $sanitized['houseNo'];
    $street = $sanitized['street'];
    $city = $sanitized['city'];

    $errors = [];
    $validInputs = true;

    function addError ($msg) {
        global $errors, $validInputs;
        array_push($errors, $msg);
        $validInputs = false;
    }

    if(empty($name)) addError("Empty name value provided!");
    elseif (strlen($name) < 5) addError("Name should be at least 5 characters.");

    $today = new DateTime("now");
    $tenYearsAgo = (clone $today)->modify('-10 years')->format('Y-m-d');
    $dobDate = DateTime::createFromFormat('Y-m-d', $dob);

    if ($dobDate && $dobDate > new DateTime($tenYearsAgo)) addError("Invalid date of birth: you should be 10 years at least.");

    $contactRegex = '/07\\d\\d\\d\\d\\d\\d\\d\\d/i';
    if(empty($contact)) addError("No contact number provided!");
    elseif (!preg_match($contactRegex, $contact)) addError("Contact number does not follow Sri Lankan phone pattern!\n10 numbers starting with 07.");

    $nicRegex = '/(?:[4-9][0-9]{8}[vVxX])|(?:[12][0-9]{11})/';
    if(empty($nic)) addError("No NIC number provided!");
    elseif (!preg_match($nicRegex, $nic)) addError("NIC number does not follow Sri Lankan NIC number pattern.");

    if($gender != 'male' && $gender != 'female') addError("Gender is not selected!");

    if(empty($houseNo)) addError("No house number or apartment number provided for Address!");
    if(empty($street)) addError("No street name provided for Address!");
    if(empty($city)) addError("No city provided for Address!");

    $lastLogin = $today->format('Y-m-d H:i');

    if($validInputs) {
        $stmt = $conn->prepare("INSERT INTO petowner
            (petOwnerID, fullName, DOB, contactNumber, NIC, gender, houseNo, street, city, lastLogin)
            VALUES (?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssss",$userID, $name, $dob, $contact, $nic, $gender, $houseNo, $street, $city, $lastLogin);
        $insertDone = $stmt->execute();
        if($insertDone) {
            echo "
            <script>
                alert(`Successfully Registered!\nWelcome to the VetiPlus Pet owner Community!`);
                window.location.href = './dashboard.php';
            </script>";
        }
    }
    else {
        $errorsFormatted = array_map(function($error) { return
            "$error\n";
        }, $errors);
        $errorsString = implode('', $errorsFormatted);

        echo "
        <script>
            alert(`$errorsString`);
            window.location.href = './petOwnerRegister.php';
        </script>";
    }
}
// else {
//     header("Location: ../../../../index.php");
// }

?>
