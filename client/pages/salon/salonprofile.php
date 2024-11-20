<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/cssFiles/salon/salonprofile.css">
</head>
<body>
    <div class="profileandnavabr">
        <div>
            <?php 
                require "../../components/salon/sidebar.php";
            ?>
        </div>
    
    <div class="container">
        <div class="salon-profile">
            <button class="edit">
                <a href="./SalonProfileEdit.php">Edit</a>
            </button>

            <div class="salon-header">
                <div class="images">
                    <img src="../../assets/images/salonwomen.jpg" alt="Salon Image" class="salon-image">
                </div>
                <div class="salon-info">
                    <h1 class="salon-name"><b><i>Salon Bliss</i></b></h1>
                    <div class="reviews">
                    <div class="star">
                    <i class="fa-solid fa-star" style="color: #8000ff;"></i>
                    <i class="fa-solid fa-star" style="color: #8000ff;"></i>
                    <i class="fa-solid fa-star" style="color: #8000ff;"></i>
                    <i class="fa-solid fa-star" style="color: #8000ff;"></i>
                    </div>
                    <div class="reveiwdetail">
                     <h3 class="rev"> 105 Google reviews</h3>
                     </div>
                    </div>
                    <div class="salon-details">
                        <p><strong class="detail">Owner:</strong> Shriyani Amarasekara</p>
                        <p><strong class="detail">Address:</strong> 123 Main Street, Anytown USA</p>
                        <p><strong class="detail">Phone:</strong> (123) 456-7890</p>
                        <p><strong class="detail">Hours:</strong> Monday - Saturday, 9am - 7pm</p>
                    </div>
                </div>
            </div>
            <h2 class="section-title">Description</h2>
            <p class="salon-description"> 
                A pet salon is a specialized grooming facility designed to cater to the 
                grooming and pampering needs of pets, such as dogs and cats. Pet salons 
                provide a variety of services, including bathing, haircuts, nail trimming, 
                ear cleaning, and styling. Many also offer additional treatments like teeth 
                cleaning, flea treatments, and specialty grooming for different breeds. 
                Pet salons prioritize the comfort and safety of pets, often using pet-friendly 
                products and techniques. They aim to help pets look and feel their best while 
                maintaining their health and hygiene.
            </p>
                
            </div>
        </div>
    </div>
</body>
</html>