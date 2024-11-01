<div class="maincontainer" id="blur" >
    <div class="heading">To Review</div>

    <table class="toReview">
        <thead class="toReviewHead">
            <th>No.</th>
            <th>Profile</th>
            <th>Name</th>
            <th>Starting time</th>
            <th>Closing time</th>
            <th>Location</th>
            <th></th>
        </thead>
        <tr>
            <td>1</td>
            <td><img src="../../../client/assets/images/doctorprofile.jpg" alt="profile" /></td>
            <td>Pabodya</td>
            <td>2024/08/17 15:00</td>
            <td>2024/08/17 17:00</td>
            <td>147, Galthude, Panadura</td>
            <td>
                <a href="#" onclick="togglePopup()">
                    <i class='bx bx-right-arrow-circle button' ></i>
                </a>
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td><img src="../../../client/assets/images/doctorprofile.jpg" alt="profile" /></td>
            <td>Kasun Mendis</td>
            <td>2024/08/19 15:00</td>
            <td>2024/08/19 17:00</td>
            <td>147, Galthude, Colombo</td>
            <td>
                <a href="#" onclick="togglePopup('Kasun Mendis')">
                    <i class='bx bx-right-arrow-circle button' ></i>
                </a>
            </td>
        </tr>

        <tr>
            <td>3</td>
            <td><img src="../../../client/assets/images/doctorprofile.jpg" alt="profile" /></td>
            <td>Sunil Mendis</td>
            <td>2024/08/20 15:00</td>
            <td>2024/08/20 17:00</td>
            <td>150, Galthude, Colombo</td>
            <td>
                <a href="#" onclick="togglePopup()">
                    <i class='bx bx-right-arrow-circle button' ></i>
                </a>
            </td>
        </tr>
    </table>
</div>

<div id="popup">
    <div class="popupframe">
        <div class="container1">
            <div class="profile">
                <img src="../../../client/assets/images/logo.png" alt="profile" class="profilepic" />
                <h1>Dr. Kasun Mendis</h1>
            </div>
        </div>

        <form action="feedback.php" method="post" class="form-style">
            <div class="formtext">
                Message <br />
            </div>
            <textarea name="message" id="message" cols="75" rows="10"></textarea>
            <br />
            <div class="formtext">
                Rating <br /> 
            </div>
            
            <div class="rating">
                <div class="star-widget"> 
                    <input type="radio" name="rate" id="rate-5">
                    <label for="rate-5" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-4">
                    <label for="rate-4" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-3">
                    <label for="rate-3" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-2">
                    <label for="rate-2" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-1">
                    <label for="rate-1" class="fas fa-star"></label>
                    
                    <header> </header>

                </div>
            </div>
            <div >
                <input type="button" class="buttoncontainer" value="Cancel" onclick="togglePopup()">

                <input type="submit" class="buttoncontainer">
            </div>
        </form>
    

    </div>
</div>

<!--
<script type="text/javascript">
    funtion toggle() {
        var blur = document.getElementById('blur');
        blur.classList.toggle('active');
        var popup = document.getElementById('popup');
        popup.classList.toggle('active');
    }
</script>
-->

<script>
    function togglePopup(name) {
    const popup = document.getElementById('popup');
    const doctorName = popup.querySelector('.container1 h1');
    doctorName.textContent = `Dr. ${name}`;
    popup.classList.toggle('active');

    const blur = document.getElementById('blur');
    blur.classList.toggle('active');
}
</script>




