<?php

$current_page = basename($_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/images/logo.png" type="image/png">
    <title>VetiPlus</title>
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/navbar.css" type="text/css">
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/doctorProfile.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Include navbar -->
    <?php include '../../components/common/owner/navbar.php'; ?>

    <section class="home">
    <div class="doctor_profile">
        <div class="doctor_profile_top">
            <div class="doctor_profile_top_left">
                <img src="../../assets/images/user.png" alt="">
            </div>
            <div class="doctor_profile_top_right">
                <h2>Full Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :- &nbsp;&nbsp; Ramesh Peshala</h2>
                <h2>Date of Birth &nbsp;&nbsp;&nbsp; :- &nbsp;&nbsp;2002/05/09</h2>
                <h2>Gender &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :- &nbsp;&nbsp; Male</h2>
                <h2>Email &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-&nbsp;&nbsp; rameshpeshala84@gmail.com</h2>
                <h2>Phone Number &nbsp;:-&nbsp;&nbsp;&nbsp; 0762163506</h2>
                <h2>NIC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:- &nbsp;&nbsp;200212702901</h2>
            </div>
        </div>
    </div>
</section>
</body>

</html>