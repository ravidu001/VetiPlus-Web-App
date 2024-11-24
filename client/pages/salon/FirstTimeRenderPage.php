<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Time Render Page</title>
    <link rel="stylesheet" href="../../assets/cssFiles/salon/FirstTimeRendar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<div class="RendarContent">
    <!-- I am not set the path yet because the login and sign up page is waiting -->
    <a href="#"><i class="fa-solid fa-circle-xmark pageclose"></i></a>
    <div class="rendarpart1">
        <h2>Pet Salon Registration</h2>
        <p>"Enhance your business effortlessly with our platform your ultimate partner for growth and success. "</p>
            <h3>What is your Salon Name ?</h3>

            <form id="salonForum" class="salon-form">
                <!-- Salon Name -->
                <div class="form-group">
                    <label for="serviceName">
                        <i class="fas fa-paw"></i> Salon Name <span class="required">*</span>
                    </label>
                    <input type="text" 
                           id="salonName" 
                           name="salonName" 
                           placeholder="e.g., VetiPlus"
                           required>
                </div>

                <!-- Phone Number -->
                <div class="form-group">
                    <label for="salonPhoneNumber">
                    <i class="fa-solid fa-phone"></i> Phone Number <span class="required">*</span>
                    </label>
                    <input type="number" 
                           id="salonPhoneNumber" 
                           name="salonPhoneNumber" 
                           placeholder="e.g., 077-6399941"
                           pattern="0[0-9]{2}-[0-9]{7}"
                           required>
                </div>

                 <!-- Address (URL) -->
                <div class="form-group">
                    <label for="location">
                        <i class="fa-solid fa-location-dot"></i> Location (URL) <span class="required">*</span>
                    </label>
                    <input type="url" 
                        id="location" 
                        name="location" 
                        placeholder="e.g., https://www.example.com"
                        pattern="https?://.+" 
                        required>
                </div>

                <!-- Owner Name-->
                <div class="form-group">
                    <label for="ownername">
                        <i class="fa-solid fa-user"></i> Owner Name <span class="required">*</span>
                    </label>
                    <input type="text" 
                           id="ownername" 
                           name="ownername" 
                           placeholder="e.g., M.S.P.Jothipala"
                           required>
                </div>

                <!-- Business Registration Number -->
                <div class="form-group">
                    <label for="registrationNumber">
                        <i class="fa-solid fa-registered"></i> Business Registration Number <span class="required">*</span>
                    </label>
                    <input type="text" 
                        id="registrationNumber" 
                        name="registrationNumber" 
                        placeholder="e.g., ABC123" 
                        pattern="[A-Z]{3}[0-9]{3}" 
                        title="Please enter a valid registration number (e.g., ABC123)" 
                        required>
                </div>

            </form>

    </div>
    <div class="rendarpart2">
            <h3>BR Certificate(If you have)</h3>
            <form id="salonForum" class="salon-form">
                
                        <div class="image-upload-box">
                            <div class="image-preview">
                                <img src="/api/placeholder/150/150" alt="Preview " id="preview1">
                            </div>
                            <div class="upload-button">
                                <i class="fas fa-upload"></i>
                                <span>Upload Image</span>
                                <input type="file"
                                       id="image1"
                                       name="photo1"
                                       accept="image/*"
                                       class="file-input">
                            </div>
                        </div>
                 

                 <input type="checkbox"><p>Check the integration and agree....</p>
                <br>
                <!-- Submit Button -->
                <input type="button" class="submit-button" onclick="redirect()" value="Submit">
                    
                </button> <br>

                <p>
                    Thank you for choosing to join our system! 
                    Please provide accurate dataand information. 
                    If you encounter any issues, inform us and 
                    allow a fewminutes for us to verify your details 
                    and register your salon. We willsend you an acceptance 
                    message shortly.
                </p>

                <h2>Thank you once again for being a part of our community!</h2>
            </form>
    </div>
</div>
</body>
    <script src="../../assets/jsFIles/salon/UploadImage.js"></script>  
</html>