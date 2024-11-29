<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Profile Edit Form</title>
    <link rel="stylesheet" href="../../assets/cssFiles/salon/SalonProfileEdit.css">
    <link rel="stylesheet" href="../../assets/cssFiles/salon/PopUp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <a href="./home.php"><i class="fa-solid fa-circle-xmark pageclose"></i></a>
            <h1 class="form-title">Your Salon Profile</h1>
            <p>Make the profile more attractive to help improve your products.</p>
            
            <form id="profileForm" class="profile-form">
                <!-- Salon Name -->
                <div class="form-group">
                    <label for="salonName">
                        <i class="fas fa-paw"></i> Salon Name <span class="required">*</span>
                    </label>
                    <input type="text" 
                           id="salonName" 
                           name="salonName" 
                           value="VetiPlus"
                           readonly>
                </div>

                <!-- Image Upload Section -->
                <div class="form-group">
                    <label>
                        <i class="fas fa-images"></i> Profile Image 
                    </label>
                    <div class="image-upload-box">
                        <div class="image-preview">
                            <img src="/api/placeholder/150/150" alt="Preview" id="preview">
                        </div>
                        <div class="upload-button">
                            <i class="fas fa-upload"></i>
                            <span>Upload Salon Profile Image</span>
                            <input type="file" 
                                   id="image1" 
                                   name="image1" 
                                   accept="image/*"
                                   class="file-input">
                        </div>
                    </div>
                </div>

                <!-- Owner Name -->
                <div class="form-group">
                    <label for="ownerName">
                        <i class="fa-solid fa-user"></i> Owner Name <span class="required">*</span>
                    </label>
                    <input type="text" 
                           id="ownerName" 
                           name="ownerName" 
                           value = "Ramesh Peshala"
                           readonly>
                </div>
        
                <!-- Salon Contact Number -->
                <div class="form-group">
                    <label for="salonContactNumber">
                        <i class="fa-solid fa-phone"></i> Salon Contact Number <span class="required">*</span>
                    </label>
                    <input type="tel" 
                           id="salonContactNumber" 
                           name="salonContactNumber" 
                           value = "045-8906789"
                           pattern="[0-9]{10}" 
                           readonly>
                </div>

                <!-- Salon Email -->
                <div class="form-group">
                    <label for="salonEmail">
                        <i class="fa-solid fa-envelope"></i> Salon Email <span class="required">*</span>
                    </label>
                    <input type="email" 
                           id="salonEmail" 
                           name="salonEmail" 
                           value="pabashi@gmail.com"
                           readonly>
                </div>

                <!-- Salon Address -->
                <div class="form-group">
                    <label for="salonAddress">
                        <i class="fa-solid fa-location-crosshairs"></i> Address <span class="required">*</span>
                    </label>
                    <input type="text" 
                           id="salonAddress" 
                           name="salonAddress" 
                           value="Siripa 5, Colombo"
                           readonly>
                </div>

                <!-- Salon URL -->
                <div class="form-group">
                    <label for="salonUrl">
                        <i class="fa-solid fa-location-dot"></i> Location(URL) <span class="required">*</span>
                    </label>
                    <input type="url" 
                           id="salonUrl" 
                           name="salonUrl" 
                           value="https://www.example.com"
                           pattern="https?://.*" 
                           readonly>
                </div>

                <!-- Open Days -->
                <div class=" tableform">
                    <label for="salonOpenDays">
                        <i class="fa-solid fa-calendar-days"></i> Open Days (Usually)<span class="required">*</span>
                    </label>
                   
                        <div id="dayTable" class="day-table">
                            <table>
                                <tr>
                                    <td class="day" data-day="Sunday">Sunday</td>
                                    <td class="day" data-day="Monday">Monday</td>
                                    <td class="day" data-day="Tuesday">Tuesday</td>
                                    <td class="day" data-day="Wednesday">Wednesday</td>
                                    <td class="day" data-day="Thursday">Thursday</td>
                                    <td class="day" data-day="Friday">Friday</td>
                                    <td class="day" data-day="Saturday">Saturday</td>
                                </tr>
                            </table>
                        </div>
                    
                </div>

                <!-- Salon Open Time -->
                <div class="form-group">
                    <label for="salonOpenTime">
                        <i class="fa-regular fa-calendar-days"></i> Salon Open Time (Usually)<span class="required">*</span>
                    </label>
                    <select id="salonOpenTime" name="salonOpenTime" required>
                        <option value="">Select Open Time</option>
                        <option value="12:00 AM">12:00 AM</option>
                        <option value="1:00 AM">1:00 AM</option>
                        <option value="2:00 AM">2:00 AM</option>
                        <option value="3:00 AM">3:00 AM</option>
                        <option value="4:00 AM">4:00 AM</option>
                        <option value="5:00 AM">5:00 AM</option>
                        <option value="6:00 AM">6:00 AM</option>
                        <option value="7:00 AM">7:00 AM</option>
                        <option value="8:00 AM">8:00 AM</option>
                        <option value="9:00 AM">9:00 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
                    </select>
                </div>

                <!-- Salon Close Time -->
                <div class="form-group">
                    <label for="salonCloseTime">
                        <i class="fa-solid fa-clock"></i> Salon Close Time (Usually)<span class="required">*</span>
                    </label>
                    <select id="salonCloseTime" name="salonCloseTime" required>
                        <option value="">Select Close Time</option>
                        <option value="12:00 PM">12:00 PM</option>
                        <option value="1:00 PM">1:00 PM</option>
                        <option value="2:00 PM">2:00 PM</option>
                        <option value="3:00 PM">3:00 PM</option>
                        <option value="4:00 PM">4:00 PM</option>
                        <option value="5:00 PM">5:00 PM</option>
                        <option value="6:00 PM">6:00 PM</option>
                        <option value="7:00 PM">7:00 PM</option>
                        <option value="8:00 PM">8:00 PM</option>
                        <option value="9:00 PM">9:00 PM</option>
                        <option value="10:00 PM">10:00 PM</option>
                    </select>
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label for="description">
                        <i class="fas fa-info-circle"></i> Description about your Salon
                    </label>
                    <textarea id="description" 
                              name="description" 
                              placeholder="Enter salon description..."
                              rows="7"></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="submit-button">
                    <i class="fas fa-plus-circle"></i> Save
                </button>
            </form>
        </div>
    </div>
</body>
    <script src="../../assets/jsFiles/salon/SalonProfileEdit.js"></script>
    <script src="../../assets/jsFIles/salon/UploadImage.js"></script>
</html>
