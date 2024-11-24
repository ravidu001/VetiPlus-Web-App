<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/images/vetiplus-logo.png">
    <link rel="stylesheet" href="./../../assets/cssFiles/salon/sidebar.css">
    <script type="text/javascript" src="../../assets/jsFIles/salon/sidebar.js" defer></script>

    <?php
        // Get the current file name (without query parameters)
        $current_page = basename($_SERVER['PHP_SELF']);
        // Check if any of the appointment pages are active
        $appointment_active = in_array($current_page, ['Newappointment.php', 'Cancelappointment.php', 'Completeappointment.php']);
    ?>

</head>
<body>
    
<div class="content">
        <nav id="sidebar" class="close">
            <ul>
                <div class="logocontent">
                    <img class="logo" src="../../assets/images/White Playful Pet Shop Logo.png" alt="logo">
                    <span class="logoname">VetiPlus<br></span>
                </div>
                <button onclick="toggleSidebar()" id="toggle-btn">
                        <i class='bx bxs-chevron-left-circle' ></i>
                </button>  
                </li>
                <li>
                <li class="nav-link <?= $current_page == 'home.php' ? 'active' : '' ?>">                        
                    <a href="../../pages/salon/home.php">
                        <i class='bx bx-grid-alt icon'></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <button onclick="toggleSubMenu(this)" class="dropdown-btn">
                        <i class='bx bx-calendar-event icon'></i>
                        <span>Appointment</span>
                        <i class='bx bx-chevron-down'></i>
                    </button>
                    <ul class="sub-menu">
                        <li class="nav-link <?= ($current_page =='Newappointment.php') ? 'active' : '' ?>"> 
                            <a href="../../pages/salon/Newappointment.php">New</a>
                        </li>
                        <li class="nav-link <?= ($current_page == 'Cancelappointment.php') ? 'active' : '' ?>">
                            <a href="../../pages/salon/Cancelappointment.php">Cancel</a>
                        </li>
                        <li class="nav-link <?= ($current_page == 'Completeappointment.php') ? 'active' : '' ?>">
                            <a href="../../pages/salon/Completeappointment.php">Complete</a>
                        </li>
                    </ul>
                </li>

                <li>
                <li class="nav-link <?= $current_page == 'TimeSlot.php' ? 'active' : '' ?>"> 
                    <a href="../../pages/salon/TimeSlot.php">
                        <i class='bx bxs-pie-chart-alt icon'></i>
                        <span>Time Slot</span>
                    </a>
                </li>

                <li class="nav-link <?= $current_page == 'ServiceDetails.php' ? 'active' : '' ?>"> 
                    <a href="../../pages/salon/ServiceDetails.php">
                        <i class='bx bxs-briefcase icon'></i>
                        <span>Services</span>
                    </a>
                </li>

                <li class="nav-link <?= $current_page == 'SpecialOffers.php' ? 'active' : '' ?>"> 
                    <a href="../../pages/salon/SpecialOffers.php">
                    <i class='bx bxs-offer icon'></i>
                        <span>Special Offers</span>
                    </a>
                </li>
            
                <li class="nav-link <?= $current_page == 'staffdetails.php' ? 'active' : '' ?>"> 
                    <a href="../../pages/salon/staffdetails.php">
                        <i class='bx bx-male-female icon'></i>
                        <span>Salon Team</span>
                    </a>
                </li>

                <li>
                <li class="nav-link <?= $current_page == 'Feedback.php' ? 'active' : '' ?>"> 
                    <a href="../../pages/salon/Feedback.php">
                        <i class='bx bxs-message icon'></i>
                        <span>Feedback</span>
                    </a>
                </li>

                <li>
                <li class="nav-link <?= $current_page == 'about.php' ? 'active' : '' ?>"> 
                    <a href="profile.html">
                        <i class='bx bxs-user-account icon'></i>
                        <span>About Us</span>
                    </a>
                </li>

                <li>
                <li class="nav-link <?= $current_page == 'FirstTimeRenderPage.php' ? 'active' : '' ?>"> 
                    <a href="../../pages/salon/FirstTimeRenderPage.php">
                        <i class='bx bxs-phone-call icon' ></i>
                        <span>Contact Us</span>
                    </a>
                </li>


                <li>
                <li class="nav-link <?= $current_page == 'salonprofile.php' ? 'active' : '' ?>"> 
                    <a href="../../pages/salon/CreateSalonProfile.php">
                        <i class='bx bx-user icon'></i>
                        <span>Profile</span>
                    </a>
                </li>
            </ul>

            <div class="bottomcontent">
                <ul>
                    <li>
                        <a href="profile.html">
                            <i class='bx bx-log-out icon'></i>
                            <span>Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
</body>
    <!-- <script src="/client/assets/jsFIles/salon/sidebar.js"></script> -->
</html>


    

   