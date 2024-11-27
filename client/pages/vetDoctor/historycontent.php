<div class="view-container">
    <!--
    <form action="#" method="post">
        <div class="form-group">
            <label for="startDateTime">Start Date and Time</label>
            <input type="datetime-local" class="form-control" id="startDateTime" name="startDateTime" value="2024-08-10, 15:00" readonly>

            <label for="endDateTime">End Date and Time</label>
            <input type="datetime-local" class="form-control" id="endDateTime" name="endDateTime" required>
</div>
-->
    <div class="field-container">
        <div class="field-name">Start Date and Time</div>
        <div class="field-value">2024-08-14, 15:00</div>  

        <div class="field-name">End Date and Time</div>
        <div class="field-value">2024-08-14, 17:00</div>
    </div>

    <div class="field-name">Address</div>
    <div class="field-value">147, Galthude, Panadura</div>

    <div class="field-name">Assistant Details</div>
    <table class="assistant-details">
        <tr>
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
        </tr>
    </table>

    <div class="button-container">
        <button type="submit" class="completeBtn" >Completed</button>
        <button type="submit" class="cancelBtn">Cancelled</button>
    </div>


    <table class="appoinment-table" id="rescheduled">
        <tr>
            <th> </th>
            <th> Owner's Profile </th>
            <th> Owner's Name </th>
            <th> Pet's Profile </th>
            <th> Pet's Detail </th>
            <th> Contact Number </th>
            <th> Session</th>
        </tr>
        <tr>
            <td> 1 </td>
            <td> <div class="owner-profile"><img src="../../assets/images/dog.jpg" alt="owner1" class="owner-pic"> </div></td>
            <td>  John  </td>
            <td> <div class="pet-profile"><img src="../../assets/images/vetDoctor/profile/defaultProfile.png" alt="pet1" class="pet-pic"> </div></td>
            <td>  
                <p> Tommy </p>
                <p> Labrador </p>
                <p> 2 years </p>
             </td>
            <td>  0771234567 </td>
            <td>  16:00 </td>
        </tr>
        <tr>
            <td> 2 </td>
            <td> <div class="owner-profile"><img src="../../assets/images/dogProfileimage.jpg" alt="owner2" class="owner-pic"> </div></td>
            <td>  Jane Doe </td>
            <td> <div class="pet-profile"><img src="../../assets/images/vetDoctor/profile/defaultProfile.png" alt="pet2" class="pet-pic"> </div></td>
            <td>  
                <p> Tom </p>
                <p> Persian </p>
                <p> 1 year </p>
             </td>
            <td>  0777654321 </td>
            <td>  16:15 </td>
        </tr>
    </table>

    <!-- Cancelled Appointments details history -->
    <table class="appoinment-table" id="cancelled">
        <tr>
            <th> </th>
            <th> Owner's Profile </th>
            <th> Owner's Name </th>
            <th> Pet's Profile </th>
            <th> Pet's Detail </th>
            <th> Contact Number </th>
            <th> Session</th>
        </tr>
        <tr>
            <td> 1 </td>
            <td> <div class="owner-profile"><img src="../../assets/images/dog.jpg" alt="owner1" class="owner-pic"> </div></td>
            <td>   Doe </td>
            <td> <div class="pet-profile"><img src="../../assets/images/vetDoctor/profile/defaultProfile.png" alt="pet1" class="pet-pic"> </div></td>
            <td>  
                <p> Puppy </p>
                <p> Labrador </p>
                <p> 2 years </p>
             </td>
            <td>  0771234567 </td>
            <td>  15:30 </td>
        </tr>
        <tr>
            <td> 2 </td>
            <td> <div class="owner-profile"><img src="../../assets/images/dogProfileimage.jpg" alt="owner2" class="owner-pic"> </div></td>
            <td>  Jane Doe </td>
            <td> <div class="pet-profile"><img src="../../assets/images/vetDoctor/profile/defaultProfile.png" alt="pet2" class="pet-pic"> </div></td>
            <td>  
                <p> Tom </p>
                <p> Persian </p>
                <p> 1 year </p>
             </td>
            <td>  0777654321 </td>
            <td>  17:00 </td>
        </tr>
    </table>

</div>

<script src="../../assets/jsFIles/vetDocotor/history.js"></script>