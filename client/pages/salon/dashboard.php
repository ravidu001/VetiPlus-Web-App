<header>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="../../assets/cssFiles/salon/Dashboard.css">
</header>
<div class="dashboardcontent">
    <div class="dashbardheader">
        <h3>Overview</h3>
        <div class="icon">
            <i class="fa-solid fa-magnifying-glass icon"></i>
            <i class="fa-regular fa-bell icon"></i>
        </div>
        <div class="profile">
            <p>Owner :</p>
            <p class="name">Pabodya Nethsarani</p>
            <img class="profile" src="../../assets/images/girl.jpg" alt="profile.php">
        </div>
    </div>

    <div class="dashcontent">
        <div class="part1">
            <div class="overview">
                <div class="appointmentCount">
                    <div class="namewithicon">
                        <i class="fa-regular fa-calendar-check icon"></i>
                        <h3 class="appointmentname">Appointments</h3>
                        <h3 class="appointmentno">6000</h3>
                    </div>
                        
                </div>
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
                    require "../../components/salon/booking-calendar-compact.php";
                ?> 
            </div>
        </div>
        <div class="part2">
            <div class="part2header">
                <h2>
                    Upcoming Appointments
                </h2>
            </div>
            <div class="selectdatebox">
                <div class="selectdateboxname">
                    Enter Date
                    <i class="fa-solid fa-calendar-days icon"></i>
                </div>
                <div class="enterdate">
                    <input type="date" class="selectdate">
                </div>
                <button class="cancel">Cancel</button>
                <button class="ok">Ok</button>
            </div>

            <div class="upcominappointments">
                <div class="appointmentbox">
                    <img class="image" src="../../assets/images/boy.jpg" alt="">
                    <div class="userdetails">
                        <h4 class="username">Abdul Rahim</h4>
                        <p class="servicename">Pet Bathing</p>
                        <p class="time">10.30 a.m - 11.30 a.m</p>
                    </div>
                    <button>
                        View 
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </button>
                </div>
                <div class="appointmentbox">
                    <div class="userdetails">
                        <h4 class="username">Abdul Rahim</h4>
                        <p class="servicename">Pet Bathing</p>
                        <p class="time">10.30 a.m - 11.30 a.m</p>
                    </div>
                    <div class="imageandview">
                    <img class="image" src="../../assets/images/boy.jpg" alt="">
                    <button>
                        View 
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </button>
                    </div>
                </div>
                <div class="appointmentbox">
                    <img class="image" src="../../assets/images/boy.jpg" alt="">
                    <div class="userdetails">
                        <h4 class="username">Abdul Rahim</h4>
                        <p class="servicename">Pet Bathing</p>
                        <p class="time">10.30 a.m - 11.30 a.m</p>
                    </div>
                    <button>
                        View 
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </button>
                </div>
                <div class="appointmentbox">
                    <img class="image" src="../../assets/images/boy.jpg" alt="">
                    <div class="userdetails">
                        <h4 class="username">Abdul Rahim</h4>
                        <p class="servicename">Pet Bathing</p>
                        <p class="time">10.30 a.m - 11.30 a.m</p>
                    </div>
                    <button>
                        View 
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </button>
                </div> 
            </div>
        </div>
        <div class="part2">
            <div class="part2header">
                <h2>
                    Complete Appointments
                </h2>
            </div>
            <div class="selectdatebox">
                <div class="selectdateboxname">
                    Enter Date
                    <i class="fa-solid fa-calendar-days icon"></i>
                </div>
                <div class="enterdate">
                    <input type="date" class="selectdate">
                </div>
                <button class="cancel">Cancel</button>
                <button class="ok">Ok</button>
            </div>

            <div class="upcominappointments">
                <div class="appointmentbox">
                    <img class="image" src="../../assets/images/boy.jpg" alt="">
                    <div class="userdetails">
                        <h4 class="username">Abdul Rahim</h4>
                        <p class="servicename">Pet Bathing</p>
                        <p class="time">10.30 a.m - 11.30 a.m</p>
                    </div>
                    <button>
                        View 
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </button>
                </div>
                <div class="appointmentbox">
                    <img class="image" src="../../assets/images/boy.jpg" alt="">
                    <div class="userdetails">
                        <h4 class="username">Abdul Rahim</h4>
                        <p class="servicename">Pet Bathing</p>
                        <p class="time">10.30 a.m - 11.30 a.m</p>
                    </div>
                    <button>
                        View 
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </button>
                </div>
                <div class="appointmentbox">
                    <img class="image" src="../../assets/images/boy.jpg" alt="">
                    <div class="userdetails">
                        <h4 class="username">Abdul Rahim</h4>
                        <p class="servicename">Pet Bathing</p>
                        <p class="time">10.30 a.m - 11.30 a.m</p>
                    </div>
                    <button>
                        View 
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </button>
                </div>
                <div class="appointmentbox">
                    <img class="image" src="../../assets/images/boy.jpg" alt="">
                    <div class="userdetails">
                        <h4 class="username">Abdul Rahim</h4>
                        <p class="servicename">Pet Bathing</p>
                        <p class="time">10.30 a.m - 11.30 a.m</p>
                    </div>
                    <button>
                        View 
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </button>
                </div> 
            </div>
        </div>
    </div>
</div>