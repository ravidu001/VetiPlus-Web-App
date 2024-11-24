<?php
    include '../../../config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Our Services</title>
        <link rel="icon" href="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" type="image/png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/colourPalette.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/styles.css" rel="stylesheet">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/navBar.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/myFooter.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/myFooter.css" rel="stylesheet">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/hero.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/servicesPage.css" rel="stylesheet">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
    </head>
    <body>
        <!-- navbar on top: -->
        <?php include INCLUDE_BASE.'/client/components/guestUser/guestNavbar.php'; ?>

        <div class="hero-section">
            <div>
                <header>Our Services:</header>
                <p>
                    Join us today to enjoy a whole host of benefits and services from our professionals.
                </p>
            </div>
            <img class="heroImg" src="../../assets/images/guestUser/guestHeroes/servicesHero.png" alt="">
        </div>

        <div class="services">
            <div class="appointments">
                <div class=" card">
                    <div class="text">
                        <h1>Vet Appointments</h1>
                        <p>
                            Book hassle-free veterinary appointments.
                            Access top-quality care for your pets with just a few clicks.
                        </p>
                    </div>
                    <img src="../../assets/images/serviceIcons/vetAppointmentIcon.png" alt="Vet Appointments">
                </div>
                <div class=" card">
                    <div class="text">
                        <h1>Salon Appointments</h1>
                        <p>
                            Pamper your pet with ease.
                            Schedule grooming sessions at your preferred pet salons through our platform.
                        </p>
                    </div>
                    <img src="../../assets/images/serviceIcons/salonIcon.png" alt="Salon Appointments">
                </div>
            </div>

            <div class="otherServices">
                <div class=" card">
                    <div class="text">
                        <h1>Adoption</h1>
                        <p>
                            Find your perfect furry companion.
                            Connect with local shelters and rescues to give a loving home to a pet in need.
                        </p>
                    </div>
                    <img src="../../assets/images/serviceIcons/petAdoptionIcon.png" alt="">
                </div>
                <div class=" card">
                    <div class="text">
                        <h1>Pet Breeding</h1>
                        <p>
                            Responsible pet breeding made simple.
                            Connect with reputable breeders or list your breeding services on our platform.
                        </p>
                    </div>
                    <img src="../../assets/images/serviceIcons/petBreedingIcon.png" alt="">
                </div>
                <div class=" card">
                    <div class="text">
                        <h1>Unified Records</h1>
                        <p>
                            Maintain records on your pet in one place.
                            No longer is it needed to carry about (and misplace) your pet's record books.
                        </p>
                    </div>
                    <img src="../../assets/images/serviceIcons/recordKeepingIcon.png" alt="">
                </div>
            </div>
        </div>
   
        <!-- footer at page's bottom: -->
        <?php include INCLUDE_BASE.'/client/components/guestUser/guestFooter.php'; ?>

    </body>
</html>
