<?php
    session_start();
    if (!isset($_SESSION['user_id']))
        $_SESSION['user_id'] = 'sp.john.manuel737@gmail.com';
    $userID = $_SESSION['user_id'];

    include '../../../config.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Vet Appointments</title>
        <link rel="icon" href="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" type="image/png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/colourPalette.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/styles.css" rel="stylesheet">
        
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/navBar.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/myFooter.css" rel="stylesheet">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/formStyles.css" rel="stylesheet">
    </head>
    <body>
        <!-- navbar on top: -->
        <?php include INCLUDE_BASE.'/client/components/petOwner/userNavbar.php'; ?>

        <div class="aloneContent">
            <form method="post" enctype="multipart/form-data"
                action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                <h2>Register Your Pet</h2><br/>
                <label>Name:</label>
                    <input type="text" id="name" name="name" required> 
                <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" max="<?= (new DateTime("now"))->format('Y-m-d') ?>" required>
                <label>Gender:</label>
                    <span>
                        <label for="g_male">Male:</label>
                            <input type="radio" id="g_male" name="gender" value="male" required>
                        <label for="g_female">Female:</label>
                            <input type="radio" id="g_female" name="gender" value="female" required>
                    </span>
                <label for="weight">Weight:</label>
                    <input type="number" id="weight" name="weight" required>
                    
                <!-- <label for="species">Species:</label>
                    <select name="species" id="species" onchange="displayOtherTypeBox()" required>
                        <option value="">Select an option:</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="rabbit">Rabbit</option>
                        <option value="bird">Bird</option>
                        <option value="hamster">Hamster</option>
                        <option value="other">Other</option>
                    </select> -->
                <!-- text option for other pet type: -->
                <!-- <label for="otherPet" id="otherPetLabel" style="display: none;">Enter pet species:</label>
                    <input type="text" id="otherPetInput" name="otherSpecies" style="display: none;" disabled required> -->

                    
                    <label for="species">Species:</label>
                    <input type="text" id="species" name="species" list="petSpecies">
                    <datalist id="petSpecies">
                        <option value="Dog">
                        <option value="Cat">
                        <option value="Rabbit">
                        <option value="Bird">
                        <option value="Hamster">
                    </datalist>

                <label for="breed">Breed:</label>
                    <input type="text" id="breed" name="breed" required>

                <label for="breedAvailNo">Is your pet available for breeding?</label>
                <span>
                    <label for="breedAvailYes" class="input-field">Yes</label>
                        <input type="radio" id="breedAvailYes" name="breedAvailable" value="1" required onchange="toggleBreedDescription()">
                    <label for="breedAvailNo" class="input-field">No</label>
                        <input type="radio" id="breedAvailNo" name="breedAvailable" value="0" selected required onchange="toggleBreedDescription()">
                </span>
                <label for="breedDescription" class="breedDesc" id="breedDescriptionLabel" style="display:none;">Provide a description for breeding your pet:</label>
                    <textarea name="breedDescription" id="breedDescription" class="breedDesc input-field"
                        cols="30" rows="5" style="resize: none; display:none;" required>
                    </textarea>

                <label for="profilePicture">Add a profile picture:</label>
                    <input type="file" id="profilePicture" accept="image/*" name="profilePicture" required>

                <span></span>   <!-- Empty span for grid layout -->
                <button type="reset">Clear</button>
                <button type="submit">Add Pet</button>
            </form>
        </div>

        <!-- footer at page's bottom: -->
        <?php include INCLUDE_BASE.'/client/components/petOwner/userFooter.php'; ?>

        <script>
            function toggleBreedDescription() {
                const breedDescParts = document.querySelectorAll('.breedDesc')
                if (document.getElementById('breedAvailYes').checked) {
                    breedDescParts.forEach(x => x.style.display = "block")
                } else if (document.getElementById('breedAvailNo').checked) {
                    breedDescParts.forEach(x => x.style.display = "none")
                }
            }

            // const displayOtherTypeBox = () => {
            //     const otherPetLabel = document.getElementById('otherPetLabel')
            //     const otherPetInput = document.getElementById('otherPetInput')

            //     const selectOption = document.getElementById('species').value;
            //     if (selectOption == 'other'){
            //         otherPetLabel.style.display = "block"
            //         otherPetInput.style.display = "block"
            //         otherPetInput.disabled = false
            //     }
            //     else{
            //         otherPetLabel.style.display = "none"
            //         otherPetInput.style.display = "none"
            //         otherPetInput.disabled = true
            //     }
            // }
        </script>
    </body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function sanitizeInput($input) {
            return htmlspecialchars(trim($input));
        }
        $sanitized = array_map('sanitizeInput', $_POST);

        $name = htmlspecialchars($_POST['name']);
        $dob = htmlspecialchars($_POST['dob']);
        $gender = htmlspecialchars($_POST['gender']);
        $weight = htmlspecialchars($_POST['weight']);

        htmlspecialchars($_POST['species']) == 'other'
            ? $species = htmlspecialchars($_POST['otherSpecies'])
            : $species = htmlspecialchars($_POST['species']);

        $breed = htmlspecialchars($_POST['breed']);

        $breedAvailable = htmlspecialchars($_POST['breedAvailable']);
        ($breedAvailable == 1) 
            ? $breedDescription = htmlspecialchars($_POST['breedDescription'])
            : $breedDescription = null;

        $profilePicture = $_FILES['profilePicture'];

        $targetDir = INCLUDE_BASE.'/client/assets/images/profilePics/pet/';
        $fileName = basename($profilePicture['name']);
        $targetFilePath = "$targetDir$fileName";
        $uploadDone = move_uploaded_file($profilePicture['tmp_name'], $targetFilePath);

        $stmt = $conn->prepare("INSERT INTO 
                    pet (petOwnerID, name, DOB, gender, weight, species, breed, breedAvailable, breedDescription, profilePicture)
                    VALUES (?,?,?,?,?,?,?,?,?,?)");

        if ($uploadDone) {
            $stmt->bind_param("ssssdssiss", $userID, $name, $dob, $gender, $weight, $species, $breed, $breedAvailable, $breedDescription, $fileName);
            
            $insertDone = $stmt->execute();
            $stmt->close();
            
            if ($insertDone) { echo "
                <script> 
                    console.log('Pet Profile created');
                    alert('Pet Successfully Added');
                    window.location.href = './dashboard.php';
                </script>";
                exit();
            }else echo "<script> alert('Unable to add pet!<br/>$conn->error') </script>";
        }
        else echo "<script> alert('Error in uploading profile picture!<br/>$conn->error') </script>";
    }
?>
