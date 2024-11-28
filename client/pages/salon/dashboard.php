<header>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="../../assets/cssFiles/salon/Dashboard.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

</header>
<div class="pagecontent">
    <div class="dashbardheader">
        <h3>Dashboard</h3>
        <div class="icon">
            <i class="fa-solid fa-magnifying-glass icon"></i>
            <i class="fa-regular fa-bell icon"></i>
        </div>
        <div class="profile">
            <p>Owner :</p>
            <p class="name">Pabodya Nethsarani</p>
            <img class="profile" src="../../assets/images/salon/girl.jpg" alt="profile.php">
        </div>
    </div>

    <div class="dashcontent">
        <div class="part1">
            <div class="overview">
            </div>
            <div class="calendar">
                <!-- <div class="calandercolor">
                    <div class="colorone">
                        <i class="fa-solid fa-circle coloricon1"></i>
                        <p class="colordetail">Upcoming Appointments</p>
                    </div>
                    <div class="colortwo">
                        <i class="fa-solid fa-circle coloricon1"></i>
                        <p class="colordetail">Cancel Appointments</p>
                    </div>
                    <div class="colorthree">
                        <i class="fa-solid fa-circle coloricon1"></i>
                        <p class="colordetail">Complete Appointments</p>
                    </div>
                </div> -->
                <?php
                    require "../../components/salon/Calendar.php";
                ?> 
            </div>
        </div>
        <div class="part2">
            <div class="part2header">
                <p>
                    Upcoming Appointments
                </p>
            </div>
            
            <!-- <div class="upcominappointments">
                <div class="appointmentbox">
                    <img class="image" src="../../assets/images/salon/boy.jpg" alt="boy">
                    <div class="userdetails">
                        <p class="username">Abdul Rahim</p>
                        <p class="servicename">Pet Bathing</p>
                        <p class="time">077-5369984</p>
                    </div>
                    <div>
                        10.30 a.m <br>
                         <b> - </b><br>
                        11.00 a.m                        
                    </div>
                </div>
            </div> -->
        </div>
        <div class="part2">
            <div class="part2header">
                <p>
                    Complete Appointments
                </p>
            </div>
            
            <div class="upcominappointments">
                <p class="realtime">10.30 a.m </p>
                    <div class="appointmentbox">
                        <div class="image">
                            <img class="image" src="../../assets/images/salon/boy.jpg" alt="boy">
                            <img class="petimage" src="../../assets/images/White Playful Pet Shop Logo.png">
                        </div>
                        <div class="userdetails">
                            <p class=" username">Abdul Rahim</p><br>
                            <i class="fa-solid fa-paw icon" ><p class="servicename">Pet Bathing</p></i><br>
                            <p class="number">077-5369984</p><br>
                            <p class="time"><b>10.30a.m - 11.00p.m</b></p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>