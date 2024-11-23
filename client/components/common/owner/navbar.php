<?php
// Get the current file name (without query parameters)
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="../../assets/images/admin_logo.png" alt="logo">
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
                <li class="nav-link <?= $current_page == 'home.php' ? 'active' : '' ?>">
                    <a href="home.php">
                        <i class='bx bx-home icon'></i>
                        <span class="text nav-text"> Dashbord</span>
                    </a>
                </li>
                <li class="nav-link <?= $current_page == 'appointment.php.php' ? 'active' : '' ?>">
                    <a href="appointment.php">
                        <i class='bx bx-calendar icon'></i>
                        <span class="text nav-text">Appointment</span>
                    </a>
                </li>
                <li class="nav-link <?= $current_page == 'account.php' ? 'active' : '' ?>">
                    <a href="account.php">
                        <i class='bx bx-group icon'></i>
                        <span class="text nav-text"> Account</span>
                    </a>
                </li>
                <li class="nav-link <?= $current_page == 'payment.php' ? 'active' : '' ?>">
                    <a href="payment.php">
                    <i class='bx bx-dollar icon'></i>
                    <span class="text nav-text"> Payment</span>
                    </a>
                </li>
                <li class="nav-link <?= $current_page == 'addAdmin.php' ? 'active' : '' ?>">
                    <a href="addAdmin.php">
                    <i class='bx bxs-user-plus icon' ></i>
                        <span class="text nav-text">Add Admin</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="bottom-content">
            <li class="nav-link <?= $current_page == 'profile.php' ? 'active' : '' ?>">
                <a href="profile.php">
                    <!--<i class='bx bx-log-out icon'></i>-->
                    <div class="profile">

                       <img src="../../assets/images/image_8.jpg" alt="">

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
<script src="../../assets/jsFIles/Owner/navbar.js"></script>