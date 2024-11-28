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

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/appointmentPages.css" rel="stylesheet">
    
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
                        if (!empty($profileDetails['profilePicture'])):
                    ?>
                    <img src="<?= BASE_PATH.'/client/assets/images/profilePics/petOwner/'.$profileDetails['profilePicture']?>"
                        alt="Profile picture.">
                    <?php else: ?>
                        <p>Add a profile picture.</p>
                    <?php endif; ?>
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
                    <a class="petCard" href="./petRegister.php">
                        <i class="bx bxs-plus-circle bx-lg"></i>
                        <h3>Add Pet</h3>
                    </a>                   
                </div>
            </section>
    
            <section id="upcomingAppointments" class="dashArea">  
                <h2>Upcoming Appointments</h2>
                <div class="appointments-container scrollAppointments">
                    <?php for ($i=0; $i<2; $i++) :?>
                        <div class="appointmentCard">
                            <img src="<?= BASE_PATH.'/client/assets/images/petOwner/salonIcon.png'?>" class="appointmentIcon" alt="appointmentIcon">
                            <div class="appointmentDetails">
                                <h3>Bingo</h3>
                                <span>Full Bath - Mr.Perera</span>
                                <span><b>Example Salon</b> No.103\1A, Hena Road, Mount-Lavinia</span>
                                <h4>05.12.2024 | 6:00PM</h4>
                            </div>
                            <div class="appintmentOptions">
                                <button><i class="bx bxs-edit bx-md"></i> Edit</button>
                                <button><i class="bx bxs-calendar-edit bx-md"></i> Reschedule</button>
                            </div>
                        </div>
                        <div class="appointmentCard">
                            <img src="<?= BASE_PATH.'/client/assets/images/petOwner/vetIcon.png'?>" class="appointmentIcon" alt="appointmentIcon">
                            <div class="appointmentDetails">
                                <h3>Bingo</h3>
                                <span>Monthly Check-up</span>
                                <span><b>Dr. Rajapakse</b> No.103\1A, Hena Road, Mount-Lavinia</span>
                                <h4>05.12.2024 | 6:00PM</h4>
                            </div>
                            <div class="appintmentOptions">
                                <button><i class="bx bxs-edit bx-md"></i> Edit</button>
                                <button><i class="bx bxs-calendar-edit bx-md"></i> Reschedule</button>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </section>
        </div>
        <script>
            
        </script>

        <!-- footer at page's bottom: -->
        <?php include INCLUDE_BASE.'/client/components/petOwner/userFooter.php'; ?>

    </body>
</html>
