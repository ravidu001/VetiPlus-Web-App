<div class="sysFeedbackForm dashArea">
    <img src="../../assets/images/guestUser/contactDoggo.png" id="contactDoggo" alt="contact Doggo">
    
    <form id="contactForm" enctype="multipart/form-data" method="post"
         action="<?= BASE_PATH.'/server/controllers/common/sysFeedbackHandle.php' ?>">
        
        <h3>Connect with Us</h3>
            
        <div class="inputContainer">
            <label for="msgType">Type of Message:</label>
            <select name="msgType" id="msgType" required>
                <option value="feedback">Feedback</option>
                <option value="complaint">Complaint</option>
            </select>
        </div>

        <div class="inputContainer" id="rating-container">
            <label for="rating">Rating</label>
            <input type="range" id="rating" name="rating" min="0" max="5" value="5" required>
        </div>
        
        <div class="inputContainer" id="complaintImage-container" style="display:none;">
            <label for="complaintImage">Image</label>
            <input type="file" id="complaintImage" name="complaintImage" accept="image/*" required>
        </div>

        <div class="inputContainer">
            <label for="msg">Message:</label>
            <textarea id="msg" name="msg" placeholder="Enter a message for us." rows="5" cols="30" required></textarea>
        </div>
        
        <button type="submit">Submit</button>
    </form>
</div>
<script>
    const ratingContainer = document.getElementById('rating-container');
    const imageContainer = document.getElementById('complaintImage-container');

    const msgType = document.getElementById('msgType')
    msgType.addEventListener('change', (e) => {
        if (msgType.value == 'feedback') {
            ratingContainer.style.display = "flex"
            imageContainer.style.display = "none"
        } else if (msgType.value == 'complaint') {
            ratingContainer.style.display = "none"
            imageContainer.style.display = "flex"
        }
    })
</script>