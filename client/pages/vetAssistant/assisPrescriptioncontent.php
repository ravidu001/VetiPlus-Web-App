<div class="main-container">
    <div class="heading">
        <h2>Prescription</h2>
    </div>

    <img src="../../../client/assets/images/dog.jpg" alt="dog profile picture" class="dog-profile" onclick="showPopup()">

    <div class="profile-details">
        <h4> #id_10011 </h4>
        <h2> Roky </h2>
        <h4> 2yr 6mon</h4>
    </div>

    <form action="#" method="post">
        <table class="table-format">
            <tr>
                <td style="width:200px"> Weight </td>
                <td>
                    <div class="input-container">
                        <input type="text" name="weight" placeholder="Enter Weight">
                        <i class='bx bx-edit-alt'></i>
                    </div>
                </td>
            </tr>

            <tr>
                <td style="width:200px"> Symptoms </td>
                <td>
                    <div class="input-container">
                        <textarea name="symptoms" placeholder="Add Symptoms..." rows="4"></textarea>
                    </div>
                </td>
            </tr>

            <tr>
                <td style="width:200px"> Vaccinated </td>
                <td>
                    <div class="input-container">
                        <input type="text" name="vacine" placeholder="Add vacine names">
                        <i class='bx bx-edit-alt'></i>
                    </div>
                </td>
            </tr>

            <tr>
                <td style="width:200px"> Surgical </td>
                <td>
                    <div class="radio-container">
                        <input type="radio" name="surgical" value="no" id="surgical-no" checked> No
                        <input type="radio" name="surgical" value="yes" id="surgical-yes" > Yes
                    </div>    
                    <div class="input-container" id="surgicalname-container">
                        <input type="text" name="surgicalname" placeholder="Add Surgy did">
                        <i class='bx bx-edit-alt' style="margin-top:10px"></i>
                    
                    </div>
                </td>
            </tr>

            <tr>
                <td style="width:200px"> Allergies </td>
                <td>
                    <div class="radio-container">
                        <input type="radio" name="allergies" value="no" id="allergies-no" checked> No
                        <input type="radio" name="allergies" value="yes" id="allergies-yes" > Yes
                    </div>    
                    <div class="input-container" id="allergyname-container">
                        <input type="text" name="allergyname" placeholder="Add allergy details">
                        <i class='bx bx-edit-alt' style="margin-top:10px"></i>
                    
                    </div>
                </td>
            </tr>

            <tr>
                <td style="width:200px"> Prescription </td>
                <td>
                    <div class="input-container">
                        <!--<input type="text" name="prescription" placeholder="Enter prescriptions">-->
                        <textarea name="prescription" placeholder="Enter prescriptions..." rows="4"></textarea>
                        <!--<i class='bx bx-edit-alt'></i>-->
                    </div>
                </td>
            </tr>

            <tr>
                <td style="width:200px"> Next Vaccination <br /> details </td>
                <td>
                    <div class="input-container">
                        <input type="text" name="vaccineName" placeholder="Enter vaccine name">
                        <i class='bx bx-edit-alt'></i>
                    </div>
                    <div class="input-container">
                        <input type="date" name="vaccineDate" id="vaccineDate" placeholder="Enter vaccine date">
                        <i class='bx bx-edit-alt' style="margin-top:10px"></i>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="reset" value="Reset" class="btn btn-reset">
                </td>
                <td>
                    <input type="button" value="Submit" class="btn btn-submit" onclick="moveto()">
                </td>
        </table>
    </form>
</div>





<div id="popup-container" class="popup-container" onclick="hidePopup()">
    <img src="../../../client/assets/images/dog.jpg" alt="dog profile picture" class="popup-image">
</div>



<script>
    function moveto() {
        alert("Prescription added successfully");
        window.location.href = '/VetiPlus/VetiPlus-Web-App/client/pages/vetAssistant/acceptview.php';
    }

    function showPopup() {
        document.getElementById('popup-container').style.display = 'flex';
    }

    function hidePopup() {
        document.getElementById('popup-container').style.display = 'none';
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Set min date for vaccineDate input
        const vaccineDateInput = document.getElementById('vaccineDate');
        const today = new Date();
        const tomorrow = new Date(today);
        tomorrow.setDate(tomorrow.getDate() + 1);
        const yyyy = tomorrow.getFullYear();
        const mm = String(tomorrow.getMonth() + 1).padStart(2, '0'); // Months are zero-based
        const dd = String(tomorrow.getDate()).padStart(2, '0');
        const minDate = `${yyyy}-${mm}-${dd}`;
        vaccineDateInput.setAttribute('min', minDate);

        // Existing code for showing/hiding surgicalname input
        const surgicalYes = document.getElementById('surgical-yes');
        const surgicalNo = document.getElementById('surgical-no');
        const surgicalNameContainer = document.getElementById('surgicalname-container');

        surgicalYes.addEventListener('change', function() {
            if (surgicalYes.checked) {
                surgicalNameContainer.style.display = 'block';
            }
        });

        surgicalNo.addEventListener('change', function() {
            if (surgicalNo.checked) {
                surgicalNameContainer.style.display = 'none';
            }
        });

        // Existing code for showing/hiding allergyname input
        const allergiesYes = document.getElementById('allergies-yes');
        const allergiesNo = document.getElementById('allergies-no');
        const allergyNameContainer = document.getElementById('allergyname-container');

        allergiesYes.addEventListener('change', function() {
            if (allergiesYes.checked) {
                allergyNameContainer.style.display = 'block';
            }
        });

        allergiesNo.addEventListener('change', function() {
            if (allergiesNo.checked) {
                allergyNameContainer.style.display = 'none';
            }
        });
    });
</script>