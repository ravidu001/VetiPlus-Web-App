<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Salon Service Form</title>
    <link rel="stylesheet" href="../../assets/cssFiles/salon/EditService.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <a href="./ServiceDetails.php"><i class="fa-solid fa-circle-xmark pageclose"></i></a>
                <h1 class="form-title">Edit Pet Salon Service</h1>
            
            <form id="serviceForum" class="service-form">
                <!-- Service Name -->
                <div class="form-group">
                    <label for="serviceName">
                        <i class="fas fa-paw"></i> Service Name <span class="required">*</span>
                    </label>
                    <input type="text" 
                           id="serviceName" 
                           name="serviceName" 
                           value = "servicename"
                           placeholder="e.g., Premium Dog Grooming"
                           required>
                </div>

                <!-- Service Charge -->
                <div class="form-group">
                    <label for="serviceCharge">
                        <i class="fas fa-dollar-sign"></i> Service Charge <span class="required">*</span>
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
                <div class="form-group">
                    <label for="serviceTime">
                        <i class="fas fa-clock"></i> Service Time (minutes) <span class="required">*</span>
                    </label>
                    <input type="number" 
                           id="serviceTime" 
                           name="serviceTime" 
                           placeholder="30"
                           min="0"
                           required>
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label for="description">
                        <i class="fas fa-info-circle"></i> Description
                    </label>
                    <textarea id="description" 
                              name="description" 
                              placeholder="Enter service description..."
                              rows="4"></textarea>
                </div>

                <!-- Image Upload Section -->
                <div class="form-group">
                    <label>
                        <i class="fas fa-images"></i> Service Images (Max 2)
                    </label>
                    <div class="image-upload-container">
                        <!-- First Image Upload -->
                        <div class="image-upload-box">
                            <div class="image-preview">
                                <img src="/api/placeholder/150/150" alt="Preview 1" id="preview1">
                            </div>
                            <div class="upload-button">
                                <i class="fas fa-upload"></i>
                                <span>Upload Image 1</span>
                                <input type="file" 
                                       id="image1" 
                                       name="image1" 
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
                                       name="image2" 
                                       accept="image/*"
                                       class="file-input">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="submit-button">
                    <i class="fas fa-plus-circle"></i> Save
                </button>
            </form>
        </div>
    </div>
</body>
</html>