<div class="appointment-container">
    <div id="appointment-content">
        <div class="appointment-header">
            <h2>Create a session</h2>
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

        <div class="sub-heading">
            <h3> Create a new session</h3>
        </div>  

        <div class="appointment-form" >
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="newAppointment">
                <table class="form-group">
                    <tr>
                        <td>
                            <label for="date">Start time</label>
                        </td>
                        <td>
                            <input type="time" id="startTime" name="startTime">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="date">End time</label>
                        </td>
                        <td>
                            <input type="time" id="endTime" name="endTime">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="clinicLocation">Clinic Location</label>
                        </td>
                        <td>
                            <input type="text" id="clinicLocation" name="clinicLocation">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="note">Note</label>
                        </td>
                        <td>
                            <textarea id="note" name="note"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="needAssistant">Do you need an assistant?</label>
                        </td>
                        <td>
                            <input type="radio" id="no" name="needAssistant" value="No" checked> No
                            <input type="radio" id="yes" name="needAssistant" value="Yes" class="yes" onclick="addAssistant()"> Yes
                        </td>
                    </tr>
                    <tr id="assistant">
                        <td>
                            <label for="noOfAssistant">How many assistant</label>
                        </td>
                        <td>
                            <input type="number" id="noOfAssistant" name="noOfAssistant" min="1" max="5">
                        </td>
                    </tr>
                    <tr id="assistant1">
                        <td>
                            <label for="district">Nearest district</label>
                        </td>
                        <td>
                            <input type="text" id="district" name="district">
                        </td>
                    </tr>
                    <tr id="assistant2">
                        <td>
                            <input type="reset" value="Cancel" id="cancelBtn" onclick="resetAssistant()">
                        </td>
                        <td>
                            <input type="submit" value="Next" name="next" id="nextBtn" onclick="hide(); saveAppointmentData();">
                        </td>
                    </tr>
                    <tr id="submit">
                        <td>
                            <input type="reset" value="Cancel" id="cancel">
                        </td>
                        <td>
                            <input type="submit" value="Create" name="create" id="create">
                        </td>
                    </tr>
                </table>
            </form>
        </div>                  
                
    </div>

    <!-- send requenst to vet assistant -->
    <div id="assistant-select" >
        <div class="sub-heading">
            <h3>Send request to vet assitant</h3>
        </div>
        <div class="assistant-form">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="assistantRequest">               
                <label for="filterDistrict" > Filter by district</label>           
                <input type="text" id="filterDistrict" name="filterDistrict" class="filter">

                <table class="assistant-table">
                    <tr>
                        <th>Select </th>
                        <th> Profile Picture </th>
                        
                        <th colspan="2"> Details </th>
                        <th> Charge per hour </th>
                    </tr>
                    <tr>
                        <td> <input type="checkbox" id="select" name="select"> </td>
                        <td> <div class="assistant-profile"><img src="../../assets/images/doctorprofile.jpg" alt="assistant1" class="assistant-pic"> </div></td>
                        <td>
                            <p> Name: </p>
                            <p> Age: </p>
                            <p> Specialized: </p>
                            <p> Exp. years: </p>
                            <p> Rating: </p>

                        </td>
                        <td> 
                            <p>  John Doe </p>
                            <p> 27 </p>
                            <p>  None </p>
                            <p>  3 </p>
                            <p>  4.5 </p>
                        </td>
                        <td> <p> Rs. 500 </p> </td>
                    </tr>
                    <tr>
                        <td> <input type="checkbox" id="select" name="select"> </td>
                        <td> <div class="assistant-profile"><img src="../../assets/images/doctorprofile.jpg" alt="assistant1" class="assistant-pic"> </div></td>
                        <td>
                            <p> Name: </p>
                            <p> Age: </p>
                            <p> Specialized: </p>
                            <p> Exp. years: </p>
                            <p> Rating: </p>

                        </td>
                        <td> 
                            <p>  John Push </p>
                            <p> 40</p>
                            <p>  None </p>
                            <p>  13 </p>
                            <p>  4.0 </p>
                        </td>
                        <td> <p> Rs. 500 </p> </td>
                    </tr>
                    <tr>
                        <td style="border-bottom: none;"></td>
                        <td colspan="2" style="border-bottom: none;"> <button type="reset" id="cancelRequest" name="cancelRequest" onclick="show()"> Cancel </button> </td>
                        <td colspan="3" style="border-bottom: none;"> <button type="submit" id="sendRequest" name="sendRequest"> Create </button> </td>

                    </tr>
                </table>
            </form>
        </div>
    </div>            
                      
</div>


<script src="../../assets/jsFIles/vetDocotor/calendar.js"></script>
<script src="../../assets/jsFIles/vetDocotor/newAppointment.js"></script> 