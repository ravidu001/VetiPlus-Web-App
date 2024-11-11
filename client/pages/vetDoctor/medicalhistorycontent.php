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

    <table class="table-format">
        <tr>
            <td style="width:200px"> Breed </td>
            <td>
                <div class="data-container">
                    hellow
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
