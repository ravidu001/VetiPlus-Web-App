<?php
// Get the current file name (without query parameters)
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../../assets/images/adminprofile.jpg" alt="logo">
                </span>

                <div class="text header-text">
                    <span class="name">VetiPlus</span>
                    <span class="profession">Pet Care</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <h4>Main Menu</h4>
                    <li class="nav-link <?= $current_page == 'home.php' ? 'active' : '' ?>">                        
                        <a href="home.php">
                            <i class='bx bx-home icon'></i>
                            <span class="text nav-text">Dashbord</span>
                        </a>
                    </li>
                    <li class="nav-link <?= $current_page == 'accountDashboard.php' ? 'active' : '' ?>">
                        <a href="accountDashboard.php">
                            <i class='bx bx-group icon'></i>
                            <span class="text nav-text"> Account</span>
                        </a>
                    </li>
                    <li class="nav-link <?= $current_page == 'appointment.php' ? 'active' : '' ?>">
                        <a href="appointment.php">
                        <i class='bx bx-calendar icon'></i>
                            <span class="text nav-text"> Appointment</span>
                        </a>
                    </li>
                    <li class="nav-link <?= $current_page == 'payment.php' ? 'active' : '' ?>">
                        <a href="payment.php">
                        <i class='bx bx-dollar icon'></i>
                            <span class="text nav-text">Payment</span>
                        </a>
                    </li>
                    <h4>Other Menu</h4>
                    <li class="nav-link <?= $current_page == 'feedback.php' ? 'active' : '' ?>">
                        <a href="feedback.php">
                        <i class='bx bx-message-dots icon'></i>
                            <span class="text nav-text">Feedback</span>
                        </a>
                    </li>
                    <li class="nav-link <?= $current_page == 'complain.php' ? 'active' : '' ?>">
                        <a href="complain.php">
                        <i class='bx bx-shield-quarter icon'></i>
                            <span class="text nav-text">Complain</span>
                        </a>
                    </li>
                    <li class="nav-link" style="display:block">
                        <a href="#" class="appointment-link">
                        <i class='bx bx-cog icon'></i>
                            <span class="text nav-text">System</span>
                            <i class='bx bxs-down-arrow arrow first icon'></i>
                        </a>
                        <!-- Sub-menu should be inside the parent li -->

                        <ul class="sub-menu" >
                            <li class="nav-link <?= $current_page == 'salonSystem.php' ? 'active' : '' ?>">
                                <a href="salonSystem.php">
                                <i class='bx bx-home-heart icon'></i>
                                    <span class="text nav-text" style="font-size:14px;">Salon System</span>
                                </a>
                            </li>
                            <li class="nav-link <?= $current_page == 'DoctorSystem.php' ? 'active' : '' ?>">
                                <a href="DoctorSystem.php">
                                <i class='bx bx-plus-medical icon'></i>
                                    <span class="text nav-text" style="font-size:14px;">Doctor System</span>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <div style="display:none;" id="hiddenListItems-Appointment">
                        <li style="display:block"></li>
                        <li style="display:block"></li>
                    </div>
                </ul>
            </div>
            
            <div class="bottom-content">
                <li class="nav-link <?= $current_page == 'profile.php' ? 'active' : '' ?>">
                    <a href="profile.php">
                        <!--<i class='bx bx-log-out icon'></i>-->
                        <div class="profile">
                             <img src="../../../assets/images/user.png" alt="">
                        </div>
                        <span class="text nav-text"> Profile</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <script src="../../assets/jsFIles/Admin/navbar.js"></script>
