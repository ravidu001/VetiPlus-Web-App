<?php
    include '../../../config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
        <link rel="icon" href="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" type="image/png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/colourPalette.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/styles.css" rel="stylesheet">

        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/navBar.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/myFooter.css" rel="stylesheet">
        <link href="<?= BASE_PATH ?>/client/assets/cssFiles/guestUser/hero.css" rel="stylesheet">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
        <style>
            .contactSection {
                margin: 2rem 10rem;
                padding: 3rem;

                display: grid;
                grid-template-columns: repeat(3, 1fr);
                text-align: center;
                gap: 5px;

                border-radius: 10px;
                background-color: var(--primary-bg-color);
                border: 2px solid var(--primary-border-color)
            }
            .contactSection .left img {
                width: 5rem;
            }
            .contactSection img {
                width: 30vw;
                height: auto;
            }

            .contactForm {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .contactForm header {
                font-size: 1.2em;
                font-weight: bold;
            }
            .contactForm form {
                display: flex;
                flex-direction: column;

                justify-content: center;
                gap: 0.5rem;
                padding: 1rem;
            }
            .contactForm input,
            .contactForm select,
            .contactForm textarea {
                font-size: 1.1em;
                padding: 0.2em;
                /* font-family: Georgia, 'Times New Roman', Times, serif; */
            }
            textarea {
                resize: none;
            }
            .contactForm form input[type=submit] {
                font-size: 1.1em;

                background-color: inherit;
                border-radius: 1em;
                padding: 0.8em;
            }
            .contactForm form input[type=submit]:hover {
                color: white;
                background-color: var(--bgColDark);
            }
        </style>

    </head>
    <body>

        <!-- navbar on top: -->
        <?php include INCLUDE_BASE.'/client/components/guestUser/guestNavbar.php'; ?>

        <div class="hero-section">
            <div>
                <header>Contact Us:</header>
                <p>
                    Get in touch with us for more information.
                </p>
            </div>
            <img class="heroImg" src="../../assets/images/guestUser/guestHeroes/contactUsHero.png" alt="">
        </div>

        <div class="contactSection">
            <div class="left">
                <img src="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" alt="VetiPlus logo">
                <div class="details">
                    <h2>Address</h2>
                        <p>UCSC Building Complex,<br/>35 Reid Ave,<br/>Colombo 00700</p>
                    <h2>Email</h2>
                        <p>vetiplus737@gmail.com</p>
                    <h2>Call us</h2>
                        <p>+94 12 345 6789<br/>+94 12 345 6789</p>
                </div>
            </div>

            <img src="../../assets/images/guestUser/contactDoggo.png" alt="">

            <div class="contactForm">
                <header>Connect with Us</header>
                <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <label for="email">Email address:</label>
                        <input type="email" id="email" name="email" required>
                    
                    <label for="contact">Contact number:</label>
                        <input type="tel" id="contact" name="contact" required pattern="[0][7][0-9]{8}" placeholder="07X-XXXXXXXX">
                    
                    <label for="msgType">Type of Message:</label>
                    <select name="msgType" id="msgType">
                        <option value="inquiry">Inquiry</option>
                        <option value="feedback">Feedback</option>
                    </select>

                    <label for="msg">Message:</label>
                        <textarea id="msg" name="msg" placeholder="Enter a message for us." rows="10" cols="30" required></textarea>
                    
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>

        <!-- footer at page's bottom: -->
        <?php include INCLUDE_BASE.'/client/components/guestUser/guestFooter.php'; ?>

    </body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    }
?>