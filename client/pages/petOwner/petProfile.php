<?php
    session_start(); 
    // if (!isset($_SESSION['user_id']))
    //     $_SESSION['user_id'] = 'sp.john.manuel737@gmail.com';
    $userID = $_SESSION['user_id'];

    include '../../../config.php';

    if(isset($_POST['petID'])) $_SESSION['petID'] = $_POST['petID'];
    if(!isset($_SESSION['petID'])) header("Location: ".BASE_PATH."/client/pages/petOwner/dashboard.php");

    $petID = $_SESSION['petID'];

    $stmt = $conn->prepare("SELECT * FROM pet WHERE petID = ? AND petOwnerID = ?");
    $stmt->bind_param("ss", $petID, $userID);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if ($result->num_rows <= 0) {
        echo $conn->error;
    }
    $data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pet Profile</title>
        <link rel="icon" href="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" type="image/png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/colourPalette.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/styles.css" rel="stylesheet">
        
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/navBar.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/myFooter.css" rel="stylesheet">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/profilePages.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/formStyles.css" rel="stylesheet">

    </head>
    <body>
        <!-- navbar on top: -->
        <?php include INCLUDE_BASE.'/client/components/petOwner/userNavbar.php'; ?>

        <div class="dashContent">

            <section class="dashArea">
                <h2>Pet Profile</h2>

                <div class="profilePicContainer">
                    <img src="<?= BASE_PATH.'/client/assets/images/profilePics/pet/'.$data['profilePicture'] ?>"
                        alt="Pet Profile Picture">

                    <form id="editPetProfilePic" method="post" enctype="multipart/form-data" class="profilePicEditForm"
                        action="<?= BASE_PATH.'/server/controllers/petOwner/petProfile/editPetProfilePic.php' ?>">

                        <label for="profilePicture">Change Profile Picture:</label>    
                        <input type="file" id="profilePicture" accept="image/*" name="profilePicture" required>

                        <button type="submit">Save</button>
                    </form>

                </div>

                <form id="editPetDetails" method="post" class="profileDetailsEditForm"
                    action="<?= BASE_PATH.'/server/controllers/petOwner/petProfile/editPetDetails.php' ?>">

                    <label for="name">Name: </label>
                    <span class="display-field"><?= $data['name']; ?></span>
                    <input type="text" id="name" class="input-field" name="name" value="<?= $data['name']; ?>" required>

                    <button type="button" onclick="toggleEdit()">Edit</button>
                    
                    <label for="dob">Date of Birth: </label>
                    <span class="display-field"><?= $data['DOB']; ?></span>
                    <input type="text" id="dob" class="input-field" name="dob" value="<?= $data['DOB']; ?>" max="<?= (new DateTime("now"))->format('Y-m-d') ?>" required>
                   
                    <label>Available for breeding: </label>
                    <span class="display-field"><?= $data['breedAvailable'] ? 'Yes': 'No'; ?></span>
                    <span>
                        <label for="breedAvailYes" class="input-field">Yes</label>
                            <input type="radio" id="breedAvailYes" class="input-field" name="breedAvailable" value="1"
                                <?= $data['breedAvailable'] ? 'checked': ''; ?> required onchange="toggleBreedDescription()">
                        <label for="breedAvailNo" class="input-field">No</label>
                            <input type="radio" id="breedAvailNo" class="input-field" name="breedAvailable" value="0"
                                <?= !$data['breedAvailable'] ? 'checked': ''; ?> required onchange="toggleBreedDescription()">
                    </span>
                   
                    <label for="breedDescription">Description for breeding your pet:</label>
                    <span class="display-field"><?= $data['breedAvailable'] ? $data['breedDescription']: "Not-applicable"; ?></span>
                        <textarea name="breedDescription" id="breedDescription" class="input-field" cols="30" rows="5" style="resize: none; display:none;"
                            <?= !$data['breedAvailable'] ? 'disabled': ''; ?> required>
                            <?= $data['breedDescription']; ?>
                        </textarea>
                    
                    <button type="submit" style="display: none;" id="save-button">Save</button>
                </form>

                <div class="unchangingData">
                    <div class="dataContainer">
                        <span class="field"><b>Species:</b></span>
                        <span class="data"><?= $data['species']; ?></span>
                    </div>
                    
                    <div class="dataContainer">
                        <span class="field"><b>Breed:</b></span>
                        <span class="data"><?= $data['breed']; ?></span>
                    </div>
                </div>

                <button id="deletePet" class="loneBtn">Delete Pet Profile</button>

            </section>

            <section class="dashArea">
                <h2>Appointment History</h2>
                
            </section>
        </div>

        <!-- footer at page's bottom: -->
        <?php include INCLUDE_BASE.'/client/components/petOwner/userFooter.php'; ?>

        <script>
            function submitForm (event) {
                event.preventDefault();
                const formData = new FormData(event.target);
    
                fetch(event.target.action, {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        alert(data.message);
                        window.location.href = "<?= BASE_PATH.'/client/pages/petOwner/petProfile.php' ?>";
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => {
                    console.error('An error occurred:'+ error);
                    alert('An error occurred.\nPlease try again later.'+ error);
                })
            }
            document.getElementById('editPetProfilePic').addEventListener('submit', submitForm);
            document.getElementById('editPetDetails').addEventListener('submit', submitForm);

            document.getElementById('deletePet').addEventListener('click', (event) => {
                event.preventDefault()
                const deleteConfirm = confirm("Do you really want to remove this pet?\nYou cannot access its details hereafter!")
                
                if (deleteConfirm) {
                    fetch("<?= BASE_PATH.'/server/controllers/petOwner/petProfile/deletePet.php' ?>", {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                    })
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
            })

            const breedText = document.getElementById('breedDescription')
            function toggleBreedDescription() {
                if (document.getElementById('breedAvailYes').checked) {
                    breedText.disabled = false
                } else if (document.getElementById('breedAvailNo').checked) {
                    breedText.disabled = true
                }
            }

            function toggleEdit() {
                const displayFields = document.querySelectorAll('.display-field');
                const inputFields = document.querySelectorAll('.input-field');
                const editButton = document.querySelector('button[onclick="toggleEdit()"]')
                const saveButton = document.getElementById('save-button');

                if (editButton.textContent === "Edit") {
                    // Switch to edit mode
                    displayFields.forEach(field => field.style.display = 'none');
                    inputFields.forEach(field => field.style.display = 'inline-block');
                    editButton.textContent = "Cancel";
                    saveButton.style.display = "inline-block";
                }
                else {
                    // Switch back to display mode without saving
                    inputFields.forEach(field => field.style.display = 'none');
                    displayFields.forEach(field => field.style.display = 'inline');
                    editButton.textContent = "Edit";
                    saveButton.style.display = "none";
                }
            }
        </script>
    </body>
</html>
