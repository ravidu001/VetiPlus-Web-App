<?php
// Get the current file name (without query parameters)
$current_page = basename($_SERVER['PHP_SELF']);
?>


    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/cssFiles/salon/sidebar.css">
    <script type="text/javascript" src="../../assets/jsFIles/salon/sidebar.js" defer></script>
</head>
<body>
    <div class="content">
        <nav id="sidebar" class="close">
            <ul>
                <div class="logocontent">
                    <img class="logo" src="../../assets/images/vetiplus-logo.png" alt="">
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
                    <button onclick=toggleSubMenu(this) class="dropdown-btn">
                        <i class='bx bx-calendar-event icon'></i>
                        <span>Appointment</span>
                        <i class='bx bx-chevron-down'></i>
                    </button>
                    <ul class="sub-menu">
                    <li class="nav-link <?= $current_page == 'appointment.php' ? 'active' : '' ?>"> 
                        <li><a href="#">New</a></li>
                        <li><a href="#">View</a></li>
                        <li><a href="#">History</a></li>
                    </ul>
                </li>
                <li>
                <li class="nav-link <?= $current_page == 'timeslot.php' ? 'active' : '' ?>"> 
                    <a href="calendar.html">
                        <i class='bx bxs-pie-chart-alt icon'></i>
                        <span>Time Slot</span>
                    </a>
                </li>
                <li>
                    <button onclick=toggleSubMenu(this) class="dropdown-btn">
                        <i class='bx bxs-briefcase icon'></i>
                        <span>Service</span>
                        <i class='bx bx-chevron-down icon'></i>
                    </button>
                    <ul class="sub-menu">
                    <li class="nav-link <?= $current_page == 'ServiceDEtails.php' ? 'active' : '' ?>"> 
                        <li><a href="../../pages/salon/Service/ServiceDetails.php">View</a></li>
                        <li><a href="../../pages/salon/Service/AddService.html">Add</a></li>
                        <li><a href="../../pages/salon/Service/EditService.html">Edit</a></li>
                        <li><a href="../../pages/salon/Service/ServiceDetails.php">Delete</a></li>
                    </ul>
                </li>
    
                <li>
                    <button onclick=toggleSubMenu(this) class="dropdown-btn">
                        <i class='bx bx-male-female icon'></i>
                        <span>Staff</span>
                        <i class='bx bx-chevron-down icon'></i>
                    </button>
                    <ul class="sub-menu">
                    <li class="nav-link <?= $current_page == 'staffdetails.php' ? 'active' : '' ?>"> 
                        <li><a href="../../pages/salon/staff/staffdetails.php">View</a></li>
                        <li><a href="#">Add</a></li>
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Delete</a></li>
                    </ul>
                </li>
    
                <li>
                <li class="nav-link <?= $current_page == 'Feedback.php' ? 'active' : '' ?>"> 
                    <a href="profile.html">
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
                <li class="nav-link <?= $current_page == 'contact.php' ? 'active' : '' ?>"> 
                    <a href="profile.html">
                        <i class='bx bxs-phone-call icon' ></i>
                        <span>Contact Us</span>
                    </a>
                </li>
    
    
                <li>
                <li class="nav-link <?= $current_page == 'profile.php' ? 'active' : '' ?>"> 
                    <a href="profile.html">
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

