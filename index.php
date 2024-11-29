<?php
    include './config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home - VetiPlus</title>
        <link rel="icon" href="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" type="image/png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/colourPalette.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/styles.css" rel="stylesheet">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/navBar.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/myFooter.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/hero.css" rel="stylesheet">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/guestHome.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/happyCx.css" rel="stylesheet">

    </head>

    <body>

        <!-- navbar on top: -->
        <?php include INCLUDE_BASE.'/client/components/guestUser/guestNavbar.php'; ?>

        <section class="hero-section">
            <header>
                VetiPlus:<br/>
                Connecting Pet Parents<br/>with<br/>Quality Care
            </header>
            <img class="heroImg" src="./client/assets/images/guestUser/guestHeroes/homeHero.png" alt="">
        </section>

        <h1>Our Services</h1>
        <div class="serviceCards"></div>

        <div class="homeDiv">
            <img src="./client/assets/images/guestUser/homeImg/SittingDoggo.png" alt="SittingDoggo">
            <div class="homeDivText">
                <h2>Pets do speak, but only to those who know how to listen.</h2>
                <p>Join the VetiPlus family today and connect with professionals who take pet care to another level.</p>    
                <a href="pages/login.html" class="regBtn">
                    <button>Register</button>
                </a>
            </div>
        </div>

        <div class="homeDiv">
            <div class="homeDivText">
                <h2>Why Choose Us</h2>
                <p>
                    VetiPlus is a community of pet owners andservice providers revolutionizing pet care.
                    Whether you're a pet parent or a dedicated professional, 
                    VetiPlus provides the tools to makeyour experience seamless and rewarding.
                    Become part of our family today
                </p>    
                <a href="pages/login.html" class="regBtn">
                    <button>Register</button>
                </a>
            </div>
            <img src="./client/assets/images/guestUser/homeImg/CuteDoggo.png" alt="SittingDoggo">
        </div>

        <h1>Our Community</h1>
        <div class="userTypes">
            <div class="userCard">
                <img src="./client/assets/images/guestUser/userTypes/petOwners.png" alt="">
                <p class="userTitle">Pet Owner</p>
                <p class="userDescription">
                    Care for your furry friend from
                    anywhere. Register to access 24/7
                    health records, and appointment
                    booking, knowing expert care is just
                    a click away.
                </p>
            </div>
            <div class="userCard">
                <img src="./client/assets/images/guestUser/userTypes/vetDoctor.png" alt="">
                <p class="userTitle">Veterinary Doctor</p>
                <p class="userDescription">
                    Expand your practice online. Join
                    our network to grow your client
                    base with tools for easy
                    appointment management, digital
                    prescriptions, and secure record
                    keeping.
                </p>
            </div>
            <div class="userCard">
                <img src="./client/assets/images/guestUser/userTypes/vetAssistant.png" alt="">
                <p class="userTitle">Veterinary Assistant</p>
                <p class="userDescription">
                    Streamline your work. Sign up to
                    efficiently collaborate seamlessly
                    with veterinarians and provide top
                    notch support to clients with
                    consultation sessions.
                </p>
            </div>
            <div class="userCard">
                <img src="./client/assets/images/guestUser/userTypes/salon.png" alt="">
                <p class="userTitle">Pet Salon</p>
                <p class="userDescription">
                    Boost your business. Register to
                    showcase your grooming services,
                    manage bookings, and connect with
                    pet owners in your area with
                    increased visibility
                </p>
            </div>
        </div>

        <h1>Our Happy Customers</h1>
        <div class="happyCxContainer">
            <?php for ($i=0; $i<2; $i++): ?>
            <div class="happyCxCard">
                <img src="./client/assets/images/boy.jpg" alt="">
                <div class="details">
                    <span>Mr.Perera</span>
                    <span>VetiPlus good!</span>
                </div>
                <div class="stars">
                    <i class="bx bxs-star bx-md"></i>
                    <i class="bx bxs-star bx-md"></i>
                    <i class="bx bxs-star bx-md"></i>
                    <i class="bx bxs-star bx-md"></i>
                    <i class="bx bxs-star bx-md"></i>
                </div>
            </div>
            <div class="happyCxCard">
                <img src="./client/assets/images/girl.jpg" alt="">
                <div class="details">
                    <span>Mrs.Sunil</span>
                    <span>VetiPlus good!</span>
                </div>
                <div class="stars">
                    <i class="bx bxs-star bx-md"></i>
                    <i class="bx bxs-star bx-md"></i>
                    <i class="bx bxs-star bx-md"></i>
                    <i class="bx bxs-star bx-md"></i>
                    <i class="bx bxs-star bx-md"></i>
                </div>
            </div>
            <?php endfor; ?>
        </div>

        
        <!-- footer at page's bottom: -->
        <?php include INCLUDE_BASE.'/client/components/guestUser/guestFooter.php'; ?>

        <script>
            const imgFolder = "./client/assets/images/serviceIcons/"
            const services = [
                {
                    serviceName: "Vet Appointments",
                    imgLoc: imgFolder + "vetAppointmentIcon.png"
                },
                {
                    serviceName: "Salon Appointments",
                    imgLoc: imgFolder + "salonIcon.png"
                },
                {
                    serviceName: "Adoption",
                    imgLoc: imgFolder + "petAdoptionIcon.png"
                },
                {
                    serviceName: "Breeding",
                    imgLoc: imgFolder + "petBreedingIcon.png"
                },
                {
                    serviceName: "Unified Records",
                    imgLoc: imgFolder + "recordKeepingIcon.png"
                }
            ]
            document.querySelector('.serviceCards').innerHTML = services
                .map(ser => `<div class='serviceCard'>
                                <h4>${ser.serviceName}</h4>
                                <img src='${ser.imgLoc}'/>
                            </div>`)
        </script>
        <script src="<?= INCLUDE_BASE ?>/client/pages/guestUser/heroHeight.js"></script>
    </body>
</html>