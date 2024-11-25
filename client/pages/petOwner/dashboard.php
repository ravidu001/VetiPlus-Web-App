<?php
    session_start();
    $_SESSION['user_id'] = 'piggy@pig.com';
    $userID = $_SESSION['user_id'];

    include '../../../config.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PetOwner - Dashboard</title>
        <link rel="icon" href="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" type="image/png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/colourPalette.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/styles.css" rel="stylesheet">
        
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/navBar.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/myFooter.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/dashboard.css" rel="stylesheet">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    </head>

    <body>
        <!-- navbar on top: -->
        <?php include INCLUDE_BASE.'/client/components/petOwner/userNavbar.php'; ?>

        <!-- actual content: -->
        <div class="dashContent">

            <section id="myProfile" class="dashArea">
                <h2>My Profile</h2>
                <div id="myProfile_content" class="dashAreaContent" style="justify-content: space-evenly;">
                    <?php
                        $stmt = $conn->prepare("SELECT * FROM petOwner WHERE petOwnerID = ?");
                        $stmt->bind_param("s", $userID);
                        $stmt->execute();                  
                        $profileDetails = $stmt->get_result()->fetch_assoc();
                        
                        $stmt->close();
                    ?>
                    <img src="<?= BASE_PATH.'/client/assets/images/profilePics/petOwner/'.$profileDetails['profilePicture']?>"
                        alt="Add a profile picture.">
                    <div class="textContent">
                        <h3>Welcome back!</h3>
                        <p><?= $profileDetails['fullName'] ?></p>
                    </div>
                </div>
            </section>
    
            <section id="myPets" class="dashArea">
                <h2>My Pets</h2>
                <div class="dashAreaContent">
                    <?php
                        $stmt = $conn->prepare("SELECT petID, name, profilePicture FROM pet WHERE petOwnerID = ?");
                        $stmt->bind_param("s", $userID);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $stmt->close();

                        if($result->num_rows > 0) :
                            $data = $result->fetch_all(MYSQLI_ASSOC);
                            foreach ($data as $k => $pet) : ?>
                                <form action='./petProfile.php' method='post' class='petCard' onclick='this.submit()' title='Go to Pet Profile Page.'>
                                    <input type='text' name='petID' id='petID' value='<?= $pet['petID'] ?>' hidden>
                                    <img src='<?= BASE_PATH."/client/assets/images/profilePics/pet/".$pet['profilePicture'] ?>' class='petImg' alt='Pet Image'>
                                    <h3><?= $pet['name'] ?></h3>
                                </form>
                            <?php endforeach;
                        else: echo "<h3>No Pets Added Yet!</h3>";
                        endif;
                    ?>
                    <a class="petCard" href="./addPet.php">
                        <i class="bx bxs-plus-circle bx-lg"></i>
                        <h3>Add Pet</h3>
                    </a>                   
                </div>
            </section>
    
            <section id="upcomingAppointments" class="dashArea">  
                <h2>Upcoming Appointments</h2>
                <?php
                    $today = new DateTime("now");
                    $now = $today->getTimestamp();

                    $stmt = $conn->prepare("(SELECT pet.name, app.dateTime, vet.fullName, session.clinicLocation, session.district, 'vet' AS appointmentType
                                        FROM (((appointment AS app
                                        INNER JOIN pet ON app.petID = pet.petID)
                                        INNER JOIN session ON app.sessionID = session.sessionID)
                                        INNER JOIN vetdoctor AS vet ON session.doctorID = vet.doctorID)
                                        WHERE app.petOwnerID = ?)
                                        UNION
                                        (SELECT pet.name, gmSes.dateTime, gmSes.notes, salon.name, salon.address, 'salon' AS appointmentType
                                        FROM (((groomingsession AS gmSes
                                        INNER JOIN pet ON pet.petID = gmSes.petID)
                                        INNER JOIN salonsession AS salSes ON gmSes.salSessionID = salSes.salSessionID)
                                        INNER JOIN salon ON salon.salonID = salSes.salonID)
                                        WHERE gmSes.petOwnerID = ?)
                                        ORDER BY dateTime");

                    $stmt->bind_param("ss", $userID, $userID);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();

                    if($result->num_rows > 0) {
                        $data = $result->fetch_all(MYSQLI_ASSOC);

                        // $dataMapped = array_map(function($x) {
                        foreach ($data as $x) :
                            $icon = $x['appointmentType'] === 'vet'
                                ? "<i class='bx bxs-injection'></i>"
                                : "<i class='bx bxs-brush'></i>";

                            $date = date("d.m.Y", strtotime($x['dateTime']));
                            $time = date("h:i A", strtotime($x['dateTime']));

                            $provider = $x['appointmentType'] === 'vet'
                                ? $x['fullname']
                                : $x['notes'];

                            $location = $x['appointmentType'] === 'vet'
                                ? $x['clinicLocation']." | ".$x['district']
                                : $x['salon.name']." | ".$x['address'];

                            ?>
                            <div class='appointmentCard'>
                                <div class='appointmentType'><?= $icon ?></div>
                                <h3><?= $x['pet.name'] ?></h3>
                                <p><?= $provider ?></p>
                                <p><?= $date ."|". $time ?></p>
                                <p><?= $location ?></p>
                            </div> 
                            <?php
                        endforeach;
                        // }, $data);
                    }
                    else echo "<p class='resultZero'>No Appointments Made Yet!</p>";
                ?>
            </section>
        </div>
        <script>
            // function navigateToPetProfile (petID, petCard) {
            //     window.location.href = petCard.getAttribute('data-href')
            // }
        </script>

        <!-- footer at page's bottom: -->
        <?php include INCLUDE_BASE.'/client/components/petOwner/userFooter.php'; ?>

    </body>
</html>
