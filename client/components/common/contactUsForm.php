<div class="contactSection">
    <div class="left">
        <img src="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" alt="VetiPlus logo">
        <div class="details">
            <h2>Address</h2>
                <p>UCSC Building Complex,<br/>
                35 Reid Ave,<br/>
                Colombo 00700</p>
            <h2>Email</h2>
                <p>vetiplus737@gmail.com</p>
            <h2>Call us</h2>
                <p>+94 12 345 6789<br/>+94 12 345 6789</p>
        </div>
    </div>
    
    <img src="../../assets/images/guestUser/contactDoggo.png" id="contactDoggo" alt="contact Doggo">
    
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
<?php

    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $msgType = $_POST['msgType'];
    $msg = $_POST['msg'];

    $stmt = $conn->prepare("INSERT INTO ")
?>