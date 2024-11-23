<div class="frame">
    <div class="header">
        <h2>View Appointments</h2>
    </div>    
    
    <div class="calendar-container">
            <div class="calendar-header">
                <h2 id="current-month">August 2024</h2>
                <div>
                    <button onclick="previousMonth()">←</button>
                    <button onclick="nextMonth()">→</button>
                </div>
            </div>
            <div class="status-indicators">
                <div class="status-indicator">
                    <div class="status-dot dot-available"></div>
                    <span>Available</span>
                </div>
                <div class="status-indicator">
                    <div class="status-dot dot-blocked"></div>
                    <span>Blocked</span>
                </div>
                <div class="status-indicator">
                    <div class="status-dot dot-closed"></div>
                    <span>Closed</span>
                </div>
            </div>
            <div class="calendar-grid" id="calendar"></div>
            <div class="time-slots" id="time-slots"></div>
        </div>



    <h2 style="margin-top:40px;">My next Appointments</h2>
    <table>
        <thead>
            <th> No.</th>
            <th>Starting Time</th>
            <th>Closing Time</th>
            <th>Assistance </th>
            <th>Location</th>
            <th>No. of Appointments </th>
            <th> Button</th>
        </thead>
        <tr>
            <td>1</td>
            <td>2024/08/15 15:00</td>
            <td>2024/08/15 17:00</td>
            <td>Kasun Perera</td>
            <td>147, Galthude, Panadura</td>
            <td>10</td>
            <td>
                <a href="./view.php">
                    <div class="viewbutton">
                        <i class='bx bx-right-arrow-circle' ></i>
                    </div>
                </a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>2024/08/16 15:00</td>
            <td>2024/08/16 17:00</td>
            <td>Kasun Perera</td>
            <td>147, Galthude, Panadura</td>
            <td>10</td>
            <td>
                <a href="./view.php">
                    <div class="viewbutton">
                        <i class='bx bx-right-arrow-circle' ></i>
                    </div>
                </a>
            </td>
        </tr>
    </table>
</div>


<script src="../../assets/jsFIles/vetDocotor/calendar.js"></script>
<script src="../../assets/jsFIles/vetDocotor/viewAppointment.js"></script> 