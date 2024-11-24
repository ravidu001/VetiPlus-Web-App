<?php
    session_start(); 
    include '../../../config.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Salon Appointments</title>
        <link rel="icon" href="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" type="image/png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/colourPalette.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/styles.css" rel="stylesheet">
        
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/navBar.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/myFooter.css" rel="stylesheet">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/petOwner/servicePages.css" rel="stylesheet">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    </head>
    <body>
        <!-- navbar on top: -->
        <?php include INCLUDE_BASE.'/client/components/petOwner/userNavbar.php'; ?>

        <div class="dashContent">

            <section class="dashArea upcomingAppointments">
                <h2>Upcoming Appointments</h2>
            </section>

            <section id="availableSalons" class="dashArea">
                <h2>Salons Available</h2>
                <button id="expandCardSectionBtn"><i class="bx bxs-down-arrow-circle bx-lg"></i></button>
                <div class="cards cardsScrollX">
                    <div class="serviceCard">
                        <img src="<?= BASE_PATH ?>/client/assets/images/salon/groomer.jpg" alt="salon Profile Picture">
                        <h2>Example Salon</h2>
                        <span class="address">No.103\1A, Hena Road, Mount-Lavinia</span>
                        <span><b>Contact:</b> 0767130191</span>
                        <span><b>Rating:</b> 4.0</span>
                    </div>
                    <div class="serviceCard">
                        <img src="<?= BASE_PATH ?>/client/assets/images/salon/boy.jpg" alt="salon Profile Picture">
                        <h2>Example Salon</h2>
                        <span class="address">No.103\1A, Hena Road, Mount-Lavinia</span>
                        <span><b>Contact:</b> 0767130191</span>
                        <span><b>Rating:</b> 4.0</span>
                    </div>
                    <div class="serviceCard">
                        <img src="<?= BASE_PATH ?>/client/assets/images/salon/girl.jpg" alt="salon Profile Picture">
                        <h2>Example Salon</h2>
                        <span class="address">No.103\1A, Hena Road, Mount-Lavinia</span>
                        <span><b>Contact:</b> 0767130191</span>
                        <span><b>Rating:</b> 4.0</span>
                    </div>
                    <div class="serviceCard">
                        <img src="<?= BASE_PATH ?>/client/assets/images/salon/girl.jpg" alt="salon Profile Picture">
                        <h2>Example Salon</h2>
                        <span class="address">No.103\1A, Hena Road, Mount-Lavinia</span>
                        <span><b>Contact:</b> 0767130191</span>
                        <span><b>Rating:</b> 4.0</span>
                    </div>
                    <div class="serviceCard">
                        <img src="<?= BASE_PATH ?>/client/assets/images/salon/girl.jpg" alt="salon Profile Picture">
                        <h2>Example Salon</h2>
                        <span class="address">No.103\1A, Hena Road, Mount-Lavinia</span>
                        <span><b>Contact:</b> 0767130191</span>
                        <span><b>Rating:</b> 4.0</span>
                    </div>
                    <div class="serviceCard">
                        <img src="<?= BASE_PATH ?>/client/assets/images/salon/girl.jpg" alt="salon Profile Picture">
                        <h2>Example Salon</h2>
                        <span class="address">No.103\1A, Hena Road, Mount-Lavinia</span>
                        <span><b>Contact:</b> 0767130191</span>
                        <span><b>Rating:</b> 4.0</span>
                    </div>
                </div>
            </section>
        </div>

        <!-- footer at page's bottom: -->
        <?php include INCLUDE_BASE.'/client/components/petOwner/userFooter.php'; ?>

        <script>
            const cardsSection = document.querySelector('.cards')
            const expandIcon = document.getElementById('availableSalons').querySelector('i')

            const expandCardSectionBtn = document.getElementById('expandCardSectionBtn')
            expandCardSectionBtn.addEventListener('click', () => {
                cardsSection.classList.toggle('cardsScrollX')
                cardsSection.classList.toggle('cardsWrap')

                expandIcon.classList.toggle('bxs-down-arrow-circle')
                expandIcon.classList.toggle('bxs-up-arrow-circle')
            })
            
            // cardsSection.addEventListener('wheel', (e) => {
            //     e.preventDefault();
            //     cardsSection.scrollLeft += e.deltaY;
            // })
        </script>
    </body>
</html>