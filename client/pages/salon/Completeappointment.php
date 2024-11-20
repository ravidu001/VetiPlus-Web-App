<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Appointments</title>
    <link rel="stylesheet" href="../../assets/cssFiles/salon/Completeappointment.css">
    <link rel="stylesheet" href="../../assets/cssFiles/salon/sidebar.css">
    <link rel="stylesheet" href="../../assets/cssFiles/salon/Enterdatebox.css">
    <link rel="stylesheet" href="../../assets/images/vetiplus-logo.png">
</head>
<body>
    <div class="sidebarandappointmentcontent">
        <div>
            <?php
                require "../../components/salon/sidebar.php";
            ?>
        </div>
        <div class="appointmentcontent">
        <div class="calendarpart">
            <div class="selectdate">
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
            </div>

            <div class="calendar">
                <?php
                    require "../../components/salon/Calendar.php";
                ?>
            </div>
        </div>
        <div class="appointmentdetailpart">
            <div class="upcomingappointmentdetails">
                <h3>Complete Appointments</h3>
                    <div class="userdetail">
                        <table>
                            <thead>
                                <tr>
                                    <th>Time Slot</th>
                                    <th>User</th>
                                    <th>Service</th>
                                    <th>Contact Number</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>6.00 a.m - 6.30 a.m</td>
                                    <td>
                                        <div class="user">
                                            <img src="../../assets/images/boy.jpg" alt="userimage">
                                            Abdual Rahim Vijepala
                                        </div>
                                    </td>
                                    <td>Pet Bathing</td>
                                    <td>0776533229</td>
                                    <td>
                                        <button class="ok">Done</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.00 a.m - 6.30 a.m</td>
                                    <td>
                                        <div class="user">
                                            <img src="../../assets/images/boy.jpg" alt="userimage">
                                            Abdual Rahim Vijepala
                                        </div>
                                    </td>
                                    <td>Pet Bathing</td>
                                    <td>0776533229</td>
                                    <td>
                                        <button class="ok">Done</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
    </div>
    
</body>
<script src="../../assets/jsFIles/salon/sidebar.js"></script>
</html>