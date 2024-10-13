<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Salon - Home</title>
    <link rel="stylesheet" href="../../assets/cssFiles/salon/Home.css">
</head>
<?php
    require_once '../../components/salon/navbar.php';
?>
<body>
    <div class="container">
        <div class="calendar-section">

            <!-- Search Date Input -->
            <div class="search-date">
                <label for="search-date">Go to Date: </label>
                <input type="date" id="search-date">
                <button id="go-to-date">Go</button>
            </div>

            <div class="calendar-header">
                <button id="prev-month">&lt;</button>
                <h2 id="calendar-title"></h2>
                <button id="next-month">&gt;</button>
            </div>
            <div id="calendar"></div>
        </div>

        <div class="appointment-section">
            <h2>Upcoming Appointments</h2>
            <table id="appointment-table">
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Service</th>
                        <th>Time</th>
                        <th>Date</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5">Select a date to view details</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="appointment-rates">
        <h2>Appointment Rate</h2>
        <canvas id="appointmentChart"></canvas>
    </div>

    <div class="our-system-services">
        <h2 class="our-services">Our Services For Your Pet Salon System</h2>
        <div class="one-service">
            <h3 class="service-name">Manage Appointments</h3>
            <p class="description-appointments">With our appointment management feature, you can easily select the date, view all the appointments for that day, and even schedule new ones. Keep track of which customers are coming in, and send reminders or updates when needed. This ensures smooth operations and customer satisfaction by avoiding double bookings and last-minute cancellations.</p>
            <img src="../../assets/images/salon/complete appontment.webp" class="service-pic">
        </div>
        
        <div class="one-service">
            <h3 class="service-name">Manage Time Slots</h3>
            <p class="description-appointments">Efficiently manage your salon’s time slots by adjusting available hours according to daily demands. Activate or deactivate slots based on specific needs, ensuring that your salon always operates at optimal efficiency. This feature allows for flexible scheduling, which helps you manage staff and appointments seamlessly while improving customer experience.</p>
            <img src="../../assets/images/salon/images.png" class="service-pic">
        </div>
        
        <div class="one-service">
            <h3 class="service-name">Manage Services</h3>
            <p class="description-appointments">This feature allows you to add, delete, update, and view your salon's service offerings. Whether you're introducing a new grooming package or adjusting prices, you have full control. Keep your service menu up-to-date and tailor your services based on customer needs. You can highlight promotions or discounts to attract more customers.</p>
            <img src="../../assets/images/salon/service.png" class="service-pic">
        </div>
        
        <div class="one-service">
            <h3 class="service-name">Manage Profile</h3>
            <p class="description-appointments">Maintain a professional online presence by keeping your salon's profile updated. Include important details like salon location, contact information, hours of operation, and special offers to attract customers. A well-maintained profile helps build trust with potential clients and makes it easier for them to choose your salon for their pets' grooming needs.</p>
            <img src="../../assets/images/salon/client.webp" class="service-pic">
        </div>
        
        <div class="one-service">
            <h3 class="service-name">Upload Pictures and Videos</h3>
            <p class="description-appointments">Showcase the unique services and special offers at your salon by uploading high-quality pictures and videos. Whether it's a showcase of your grooming process or customer testimonials, media can enhance your salon's appeal and give customers a better sense of what you offer. Keep your content fresh to engage both existing and potential customers.</p>
            <img src="../../assets/images/salon/photoeditor.jpg" class="service-pic">
        </div>
        
        <div class="one-service">
            <h3 class="service-name">View Feedback and Reviews</h3>
            <p class="description-appointments">Access valuable customer feedback and reviews to continually improve your salon's services. By understanding what clients appreciate and what could be better, you can refine your services and ensure a high level of customer satisfaction. Respond to reviews directly to show your clients that their feedback matters.</p>
            <img src="../../assets/images/salon/feedback.png" class="service-pic">
        </div>
        
        <div class="one-service">
            <h3 class="service-name">Edit Details</h3>
            <p class="description-appointments">Easily edit all the critical details about your salon, including profile information, service descriptions, and media uploads. This feature allows you to quickly make updates and keep your salon's profile accurate and appealing to clients, ensuring they always have the most up-to-date information about your offerings.</p>
            <img src="../../assets/images/salon/edit.png" class="service-pic">
        </div>
        


    </div>

    <div class="footer">
        <!-- footer in my site -->
    </div>

    <script src="../../assets/jsFIles/salon/Home.js"></script>
</body>
</html>
