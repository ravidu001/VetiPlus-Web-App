
<?php

include __DIR__ . '/../../../server/controllers/salon/AddSalonService.php';
// include (__DIR__ . '../../../server/config/phpConfig.php');
// require ('../../../server/config/phpConfig.php')
// require ("../../../server/controllers/salon/AddSalonService.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Salon Service Form</title>
    <link rel="stylesheet" href="../../assets/cssFiles/salon/AddService.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <a href="./ServiceDetails.php"><i class="fa-solid fa-circle-xmark pageclose"></i></a>
                <h1 class="form-title">Add New Pet Salon Service</h1>

            <form id="serviceForum" class="service-form" action= "../../../server/controllers/salon/AddSalonService.php" method="POST" enctype="multipart/form-data">
                <!-- Service Name -->
                <div class="form-group">
                    <label for="serviceName">
                        <i class="fas fa-paw"></i> Service Name <span class="required">*</span>
                    </label>
                    <input type="text"
                           id="serviceName"
                           name="serviceName"
                           placeholder="e.g., Premium Dog Grooming"
                           required>
                </div>

                <!-- Service Charge -->
                <div class="form-group">
                    <label for="serviceCharge">
                        <i class="fa-solid fa-rupee-sign"></i> Service Charge <span class="required">*</span>
                    </label>
                    <div class="price-input-wrapper">
                        <input type="number"
                               id="serviceCharge"
                               name="serviceCharge"
                               placeholder="0.00"
                               step="0.01"
                               min="0"
                               required>
                    </div>
                </div>

                <!-- Service Time -->
                <!-- <div class="form-group">
                    <label for="serviceTime">
                        <i class="fas fa-clock"></i> Service Time (minutes) <span class="required">*</span>
                    </label>
                    <input type="number"
                           id="serviceTime"
                           name="serviceTime"
                           placeholder="30"
                           min="0"
                           required>
                </div> -->

                <!-- Description -->
                <div class="form-group">
                    <label for="serviceDescription">
                        <i class="fas fa-info-circle"></i> Description
                    </label>
                    <textarea id="serviceDescription"
                              name="serviceDescription"
                              placeholder="Enter service description..."
                              rows="4"></textarea>
                </div>

                <!-- Image Upload Section -->
                <div class="form-group">
                    <label>
                        <i class="fas fa-images"></i> Service Images (Max 2)
                    </label>
                    <div class="image-upload-container">
                        First Image Upload
                         <div class="image-upload-box">
                            <div class="image-preview">
                                <img src="/api/placeholder/150/150" alt="Preview 1" id="preview1">
                            </div>
                            <div class="upload-button">
                                <i class="fas fa-upload"></i>
                                <span>Upload Image 1</span>
                                <input type="file"
                                       id="image1"
                                       name="photo1"
                                       accept="image/*"
                                       class="file-input">
                            </div>
                        </div>

                        <!-- Second Image Upload -->
                         <div class="image-upload-box">
                            <div class="image-preview">
                                <img src="/api/placeholder/150/150" alt="Preview 2" id="preview2">
                            </div>
                            <div class="upload-button">
                                <i class="fas fa-upload"></i>
                                <span>Upload Image 2</span>
                                <input type="file"
                                       id="image2"
                                       name="photo2"
                                       accept="image/*"
                                       class="file-input">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" name="submit" class="submit-button">
                    <i class="fas fa-plus-circle"></i> Add Service
                </button>
            </form>
        </div>
    </div>
</body>
    <script src="../../assets/jsFIles/salon/UploadImage.js"></script> 
</html>