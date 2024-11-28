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
                <input type="text" id="contact" name="contact" pattern="07\d\d\d\d\d\d\d\d" minlength="10" placeholder="eg: 0767130191" required>
            
            <label for="">Rating</label>
            
            <label for="">Image</label>


            <label for="msgType">Type of Message:</label>
            <select name="msgType" id="msgType">
                <option value="feedback">Feedback</option>
                <option value="complaint">Complaint</option>
            </select>
    
            <label for="msg">Message:</label>
                <textarea id="msg" name="msg" placeholder="Enter a message for us." rows="10" cols="30" required></textarea>
            
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
<script>

</script>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function sanitizeInput($input) {
        return htmlspecialchars(trim($input));
    }
    $sanitized = array_map('sanitizeInput', $_POST);

    $email = $sanitized['email'];
    $contact = $sanitized['contact'];
    $msgType = $sanitized['msgType'];
    $msg = $sanitized['msg'];

    $stmt = $conn->prepare("INSERT INTO x (email, contact, message)
            VALUES (?,?,?)");
    $stmt->bind_param("sss",$email, $contact, $msg);
}

?>