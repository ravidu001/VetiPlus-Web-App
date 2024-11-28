<?php $current_pg = basename($_SERVER['PHP_SELF']); ?>

<nav class="navBar">

    <img src="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" alt="VetiPlus logo" id="navBar-logo">

    <div class="links">
        <a href="<?= BASE_PATH ?>/client/pages/petOwner/dashboard.php"
        class="<?= ($current_pg == 'dashboard.php') ? 'active' : ''; ?>">
            <i class="bx bxs-dashboard bx-sm" id="dashboardIcon"></i>
            <label for="dashboardIcon" class="collapsable">Dashboard</label>
        </a>

        <a href="#" id="appointmentIcon"
        class="<?= ($current_pg == 'vetAppointments.php' || $current_pg == 'salonAppointments.php') ? 'active' : ''; ?>">
            <i class="bx bxs-calendar-event bx-sm" ></i>
            <label for="appointmentIcon" class="collapsable">Appointments</label>
        </a>
        <div id="appointmentTypes">
            <a href="<?= BASE_PATH ?>/client/pages/petOwner/vetAppointments.php">
                <i class="bx bxs-injection bx-sm" id="vetAppointmentIcon"></i>
                <label for="vetAppointmentIcon" class="collapsable">Vet Appointments</label>
            </a>
            <a href="<?= BASE_PATH ?>/client/pages/petOwner/salonAppointments.php">
                <i class="bx bxs-brush bx-sm" id="salonAppointmentIcon"></i>
                <label for="salonAppointmentIcon" class="collapsable">Salon Appointments</label>
            </a>
        </div>

        <a href="<?= BASE_PATH ?>/client/pages/petOwner/otherServices.php"
        class="<?= ($current_pg == 'otherServices.php') ? 'active' : ''; ?>">
            <i class="bx bxs-heart bx-sm" id="otherServiceIcon"></i>
            <label for="otherServiceIcon" class="collapsable">Other Services</label>
        </a>
        
        <a href="<?= BASE_PATH ?>/client/pages/petOwner/about.php"
        class="<?= ($current_pg == 'about.php') ? 'active' : ''; ?>">
            <i class="bx bxs-group bx-sm" id="aboutIcon"></i>
            <label for="aboutIcon" class="collapsable">About Us</label>
        </a>

        <a href="<?= BASE_PATH ?>/client/pages/petOwner/contact.php"
        class="<?= ($current_pg == 'contact.php') ? 'active' : ''; ?>">
            <i class="bx bxs-phone-call bx-sm" id="contactIcon"></i>
            <label for="contactIcon" class="collapsable">Contact Us</label>
        </a>
    </div>
    <a href="<?= BASE_PATH ?>/client/pages/petOwner/petOwnerProfile.php"
    class="<?= ($current_pg == 'profilePage.php') ? 'active' : ''; ?>">
        <i class="bx bxs-user-circle bx-sm" id="profileIcon"></i>
        <label for="profileIcon">Profile</label>
    </a>

</nav>
