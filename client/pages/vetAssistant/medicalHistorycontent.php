<div class="main-container">
    <div class="heading">
        <h2>Medical History</h2>
    </div>

    <img src="../../../client/assets/images/dog.jpg" alt="dog profile picture" class="dog-profile" onclick="showPopup()">

    <div class="profile-details">
        <h4> #id_10011 </h4>
        <h2> Roky </h2>
        <h4> 2yr 6mon</h4>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="medicalHistory">
        <table class="table-format">
            <tr>
                <td style="width:200px"> Breed </td>
                <td>
                    <div class="data-container">
                        German Shepherd
                    </div>
                </td>
            </tr>
            <tr>
                <td> Weight </td>
                <td>
                    <div class="data-container">
                        20kg
                    </div>
                </td>
            </tr>
            <tr>
                <td> Sex </td>
                <td>
                    <div class="data-container">
                        Male
                    </div>
                </td>
            </tr>
            <tr>
                <td> Vaccination </td>
                <td>
                    <div class="data-box">
                        <table>
                            <tr>
                                <td> Rabies </td>
                                <td> 1mon ago </td>
                            </tr>
                            <tr>
                                <td> DHPP/DAPP </td>
                                <td> 1mon ago </td>
                            </tr>
                            <tr>
                                <td> Bordetella </td>
                                <td> 3mon ago </td>
                            </tr>
                            <tr>
                                <td> Leptospirosis </td>
                                <td> 3mon ago </td>
                            </tr>
                            <tr>
                                <td> Lyme Disease </td>
                                <td> 6mon ago </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td> Previous medical conditions </td>
                <td>
                    <div class="data-box">
                        <table>
                            <tr>
                                <td> Skin Allergy </td>
                                <td> 1yr ago </td>
                            </tr>
                            <tr>
                                <td> Ear Infection </td>
                                <td> 1yr ago </td>
                            </tr>
                            <tr>
                                <td> Eye Infection </td>
                                <td> 1yr ago </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td> Surgery history </td>
                <td>
                    <div class="data-box">
                        <table>
                            <tr>
                                <td> Neutering </td>
                                <td> 1yr ago </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td> Allergies </td>
                <td>
                    <div class="data-box">
                        <table>
                            <tr>
                                <td> Food Allergy </td>
                                <td> 1yr ago </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td> Other notes </td>
                <td>
                    <div class="data-container">
                        No other notes
                    </div>
                </td>
            </tr>
        </table>
</div>


<div id="popup-container" class="popup-container" onclick="hidePopup()">
    <img src="../../../client/assets/images/dog.jpg" alt="dog profile picture" class="popup-image">
</div>


<script>
    function showPopup() {
        document.getElementById('popup-container').style.display = 'flex';
    }

    function hidePopup() {
        document.getElementById('popup-container').style.display = 'none';
    }
</script>
