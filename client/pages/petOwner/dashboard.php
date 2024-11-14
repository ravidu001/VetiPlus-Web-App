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
        <title>Home</title>
        <link rel="icon" href="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" type="image/png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/colourPalette.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/styles.css" rel="stylesheet">
        
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/navBar.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/myFooter.css" rel="stylesheet">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/dashboard.css" rel="stylesheet">
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
                    ?>
                    <img src="<?= BASE_PATH.'/client/assets/images/profilePics/petOwner/'.$profileDetails['profilePicture']?>"
                        alt="profile Picture">
                    <div class="textContent">
                        <h4>Welcome back!</h4>
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

                        if($result->num_rows > 0) {
                            $data = $result->fetch_all(MYSQLI_ASSOC);
                            $dataMapped = array_map(function($x) { return
                                "<form action='./petProfile.php' method='get' class='petCard' onclick='this.submit()' title='Go to Pet Profile Page.'>
                                    <input type='text' name='petID' value='{$x['petID']}' hidden>
                                    <img src='".BASE_PATH."/client/assets/images/profilePics/pet/{$x['profilePicture']}' class='petImg' alt='Pet Image'>
                                    <h3>{$x['name']}</h3>
                                </form>";
                            }, $data);
                            foreach($dataMapped as $petCard) echo $petCard;
                        }
                        else echo "No Pets Added Yet!";
                    ?>
                    <a class="petCard" href="">
                        <i class="bx bxs-plus-circle bx-lg"></i>
                        <h3>Add Pet</h3>
                    </a>                   
                </div>
            </section>
    
            <section id="upcomingAppointments" class="dashArea">  
                <h2>Upcoming Appointments</h2>
                <div id="upcomingAppointments_content" class="dashAreaContent"></div>
                <?php
                    $today = new DateTime("now");
                    $now = $today->getTimestamp();

                    $stmt = $conn->prepare("SELECT pet.name, app.dateTime, vet.fullName, session.clinicLocation
                                        FROM (((appointment AS app
                                        INNER JOIN pet ON app.petID = pet.petID)
                                        INNER JOIN session ON app.sessionID = session.sessionID)
                                        INNER JOIN vetdoctor AS vet ON session.doctorID = vet.doctorID)
                                        WHERE app.petOwnerID = ?");

                    $stmt->bind_param("s", $userID);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if($result->num_rows > 0) {
                        $data = $result->fetch_all(MYSQLI_ASSOC);
                        $dataMapped = array_map(function($x) { return
                            ;
                        }, $data);
                    }
                    else echo "No Appointments Made Yet!";
                ?>
            </section>
        </div>

        <!-- footer at page's bottom: -->
        <?php include INCLUDE_BASE.'/client/components/petOwner/userFooter.php'; ?>
        
        <!-- <script src="./mapDashboard.js"></script> -->

        <script>
            
        </script>

    </body>
</html>


<!-- 
    <form action='./petProfile.php' method='get' class='petCard' onclick='this.submit()'>
        <input type='text' name='petID' value='{$x['petID']}' hidden>
        <img src='".BASE_PATH."/client/assets/images/vetiplus-logo.png' class='petImg' alt='Pet Image'>
        <h3>{$x['name']}</h3>
    </form>
-->
<div class="appointmentCard">

</div>