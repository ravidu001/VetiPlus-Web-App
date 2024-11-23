<header>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="../../assets/cssFiles/salon/Dashboard.css">
<link rel="stylesheet" href="../../assets/cssFiles/salon/Enterdatebox.css">
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
                    require "../../components/salon/Calendar.php";
                ?> 
            </div>
        </div>
        <div class="part2">
            <div class="part2header">
                <h2>
                    Upcoming Appointments
                </h2>
            </div>
            
            <div class="upcominappointments">
                <div class="appointmentbox">
                    <img class="image" src="../../assets/images/boy.jpg" alt="boy">
                    <div class="userdetails">
                        <p class="username">Abdul Rahim</p>
                        <p class="servicename">Pet Bathing</p>
                        <p class="time">077-5369984</p>
                    </div>
                    <button>
                        10.30 a.m <br>
                         <b> - </b><br>
                        11.00 a.m                        
                    </button>
                </div>
                <div class="appointmentbox">
                    <img class="image" src="../../assets/images/boy.jpg" alt="boy">
                    <div class="userdetails">
                        <p class="username">Abdul Rahim</p>
                        <p class="servicename">Pet Bathing</p>
                        <p class="time">077-5369984</p>
                    </div>
                    <button>
                        10.30 a.m <br>
                         <b> - </b><br>
                        11.00 a.m                        
                    </button>
                </div>
                <div class="appointmentbox">
                    <img class="image" src="../../assets/images/boy.jpg" alt="boy">
                    <div class="userdetails">
                        <p class="username">Abdul Rahim</p>
                        <p class="servicename">Pet Bathing</p>
                        <p class="time">077-5369984</p>
                    </div>
                    <button>
                        10.30 a.m <br>
                         <b> - </b><br>
                        11.00 a.m                        
                    </button>
                </div>
                <div class="appointmentbox">
                    <img class="image" src="../../assets/images/boy.jpg" alt="boy">
                    <div class="userdetails">
                        <p class="username">Abdul Rahim</p>
                        <p class="servicename">Pet Bathing</p>
                        <p class="time">077-5369984</p>
                    </div>
                    <button>
                        10.30 a.m <br>
                         <b> - </b><br>
                        11.00 a.m                        
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
            
            <div class="upcominappointments">
                    <div class="appointmentbox">
                        <img class="image" src="../../assets/images/boy.jpg" alt="boy">
                        <div class="userdetails">
                            <p class="username">Abdul Rahim</p>
                            <p class="servicename">Pet Bathing</p>
                            <p class="time">077-5369984</p>
                        </div>
                        <button>
                            10.30 a.m <br>
                            <b> - </b><br>
                            11.00 a.m                        
                        </button>
                    </div>
                    <div class="appointmentbox">
                        <img class="image" src="../../assets/images/boy.jpg" alt="boy">
                        <div class="userdetails">
                            <p class="username">Abdul Rahim</p>
                            <p class="servicename">Pet Bathing</p>
                            <p class="time">077-5369984</p>
                        </div>
                        <button>
                            10.30 a.m <br>
                            <b> - </b><br>
                            11.00 a.m                        
                        </button>
                    </div>
                    <div class="appointmentbox">
                        <img class="image" src="../../assets/images/boy.jpg" alt="boy">
                        <div class="userdetails">
                            <p class="username">Abdul Rahim</p>
                            <p class="servicename">Pet Bathing</p>
                            <p class="time">077-5369984</p>
                        </div>
                        <button>
                            10.30 a.m <br>
                            <b> - </b><br>
                            11.00 a.m                        
                        </button>
                    </div>
            </div>
        </div>
    </div>
</div>