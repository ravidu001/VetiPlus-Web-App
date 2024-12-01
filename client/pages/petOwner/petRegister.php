<?php
    session_start();
    // if (!isset($_SESSION['user_id']))
    //     $_SESSION['user_id'] = 'sp.john.manuel737@gmail.com';
    $userID = $_SESSION['user_id'];

    include '../../../config.php';
    // echo "<script>alert(' .$userID.')</script>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register Pet</title>
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
            <form method="post" enctype="multipart/form-data" id="petRegisterForm"
                action="<?= BASE_PATH.'/server/controllers/petOwner/petRegisterHandle.php' ?>">

                <h2>Register Your Pet</h2><br/>

                <label>Name:</label>
                    <input type="text" id="name" name="name" required> 

                <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" max="<?= (new DateTime("now"))->format('Y-m-d') ?>" required>
                
                <label>Gender:</label>
                    <span>
                        <label for="male" class="radioLabel">Male:</label>
                            <input type="radio" id="male" name="gender" value="male" required>
                        <label for="female" class="radioLabel">Female:</label>
                            <input type="radio" id="female" name="gender" value="female" required>
                    </span>

                <label for="weight">Weight:</label>
                    <input type="number" id="weight" name="weight" min="0" required>
                    
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
                    <label for="breedAvailYes" class="radioLabel">Yes</label>
                        <input type="radio" id="breedAvailYes" name="breedAvailable" value="1" required onchange="toggleBreedDescription()">
                    <label for="breedAvailNo" class="radioLabel">No</label>
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

            function submitForm (event) {
                event.preventDefault();
                const formData = new FormData(event.target);
    
                fetch(event.target.action, {
                    method: 'POST',
                    body: formData,
                })
                // .then(response => response.text())
                // .then(data => {     
                //     try {
                //         console.log(JSON.parse(data));
                //     } catch (e) {
                //         console.error('Error parsing JSON:', data);
                //      }
                // })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        alert(data.message);
                        window.location.href = '<?= BASE_PATH.'/client/pages/petOwner/home.php' ?>';
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => {
                    console.error('An error occurred:'+ error);
                    alert('An error occurred.\nPlease try again later.'+ error);
                })
            }
            document.getElementById('petRegisterForm').addEventListener('submit', submitForm);
        </script>
    </body>
</html>
