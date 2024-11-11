<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Salon Scheduler</title>
    <link rel="stylesheet" href="../../assets/cssFiles/salon/TimeSlot.css">
    <link rel="stylesheet" href="../../assets/cssFiles/salon/Enterdatebox.css">
</head>
<body>
        <div class="TimeSLotAndSideBar">
            <div>
                <?php
                    require "../../components/salon/sidebar.php";
                ?>
            </div>
            <div class="SelectDateAndSlot">
                <h1>Pet Salon Schedule</h1>
                <div class="DateAndScedule">
                    <div class="SelectDate">
                        <?php
                            require "../../components/salon/Enterdatebox.php";
                        ?>

                        <div class="legend">
                                <div class="legend-item">
                                    <div class="color-box available"></div>
                                    <span>Available</span>
                                </div>
                                <div class="legend-item">
                                    <div class="color-box booked"></div>
                                    <span>Booked</span>
                                </div>
                                <div class="legend-item">
                                    <div class="color-box blocked"></div>
                                    <span>Blocked</span>
                                </div>
                            </div>
                        </div>
                        
                    <div class="TimeSlotShedule">
                        <div class="container">
                                
                            <div class="time-slots">
                                <!-- Morning slots -->
                                <div class="time-slot available">
                                    <div class="time-slot-time">9:00 AM</div>
                                    <div class="time-slot-status">
                                        <span class="status-icon available"></span>
                                        Available
                                    </div>
                                </div>

                                <div class="time-slot available">
                                    <div class="time-slot-time">9:30 AM</div>
                                    <div class="time-slot-status">
                                        <span class="status-icon available"></span>
                                        Available
                                    </div>
                                </div>

                                <div class="time-slot booked">
                                    <div class="time-slot-time">10:00 AM</div>
                                    <div class="time-slot-status">
                                        <span class="status-icon booked"></span>
                                        Booked
                                    </div>
                                </div>

                                <div class="time-slot blocked">
                                    <div class="time-slot-time">10:30 AM</div>
                                    <div class="time-slot-status">
                                        <span class="status-icon blocked"></span>
                                        Blocked
                                    </div>
                                </div>

                                <div class="time-slot available locked">
                                    <div class="time-slot-time">11:00 AM</div>
                                    <div class="time-slot-status">
                                        <span class="status-icon available"></span>
                                        Available
                                    </div>
                                    <div class="locked-message">Locked (within 2 hours)</div>
                                </div>

                                <!-- Add more time slots as needed -->
                                <div class="time-slot available">
                                    <div class="time-slot-time">11:30 AM</div>
                                    <div class="time-slot-status">
                                        <span class="status-icon available"></span>
                                        Available
                                    </div>
                                </div>

                                <div class="time-slot booked">
                                    <div class="time-slot-time">12:00 PM</div>
                                    <div class="time-slot-status">
                                        <span class="status-icon booked"></span>
                                        Booked
                                    </div>
                                </div>

                                <div class="time-slot blocked">
                                    <div class="time-slot-time">12:30 PM</div>
                                    <div class="time-slot-status">
                                        <span class="status-icon blocked"></span>
                                        Blocked
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
</body>
</html>