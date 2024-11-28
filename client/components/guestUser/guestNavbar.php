<?php $current_pg = basename($_SERVER['PHP_SELF']); ?>

<nav class="navBar">

    <img src="<?= BASE_PATH ?>/client/assets/images/vetiplus-logo.png" alt="VetiPlus logo" id="navBar-logo">

    <div class="links">
        <a href="<?= BASE_PATH . '/index.php' ?>"
        class="<?= ($current_pg == 'index.php') ? 'active' : ''; ?>">
            <i class="bx bxs-home bx-sm" id="homeIcon"></i>
            <label for="homeIcon" class="collapsable">Home</label>
        </a>
        <a href="<?= BASE_PATH . '/client/pages/guestUser/services.php' ?>"
        class="<?= ($current_pg == 'services.php') ? 'active' : ''; ?>">
            <i class="bx bxs-heart bx-sm" id="servicesIcon"></i>
            <label for="servicesIcon" class="collapsable">Services</label>
        </a>
        <a href="<?= BASE_PATH . '/client/pages/guestUser/aboutUs.php' ?>"
        class="<?= ($current_pg == 'aboutUs.php') ? 'active' : ''; ?>">
            <i class="bx bxs-like bx-sm" id="aboutIcon"></i>
            <label for="aboutIcon" class="collapsable">About Us</label>
        </a>
        <a href="<?= BASE_PATH . '/client/pages/guestUser/contactUs.php' ?>"
        class="<?= ($current_pg == 'contactUs.php') ? 'active' : ''; ?>">
            <i class="bx bxs-phone-call bx-sm" id="contactIcon"></i>
            <label for="contactIcon" class="collapsable">Contact Us</label>
        </a>
    </div>
    <a href="<?= BASE_PATH . '/client/pages/login-singup/login.php' ?>" class="loginBtn">
        <i class="bx bxs-user-circle bx-sm" id="loginIcon"></i>
        <label for="loginIcon">Login</label>
    </a>
</nav>
