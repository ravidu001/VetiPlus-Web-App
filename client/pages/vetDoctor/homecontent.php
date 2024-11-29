<!--add a container to diplay profile picture and user name-->
<div class="container">
    <div class="profilecontainer">
        
        <img src="../../../client/assets/images/doctorprofile.jpg" class="profile"  alt="profile" />
        <?php
            // Enable error reporting for debugging
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            // Use `user_id` to retrieve the logged-in user’s information
            $select = mysqli_query($conn, "SELECT * FROM `vetDoctor` WHERE doctorID = '$user_id'") or die('Query failed');
            
            if (mysqli_num_rows($select) > 0) {
                $fetch = mysqli_fetch_assoc($select);
                echo "<h1>Dr. " . htmlspecialchars($fetch['fullName']) . "</h1>"; // assuming the field 'name' exists in the User table
            } else {
                echo "<h1>User not found</h1>";
                echo "<p>Please complete your profile</p>";
            }
        ?>

    </div>
</div>

<!--add a container to display the table of feilds no., starting time, closing time, Assistance without borders-->
<div class="frame">
    <h2>Next Session</h2>
    <table>
        <thead>
            <th> No.</th>
            <th>Starting Time</th>
            <th>Closing Time</th>
            <th>Assistance </th>
            <th>Location</th>
            <th>No. of Appointments </th>
            <th> </th>
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
    </table>
</div>

<div class="frame1">
    <h2>Latest Review</h2>
    <table class="reviewTable">
    <thead class="reviewTableHead">
        <th>Content</th>
        <th>Reviewer</th>
        <th> Rating</th>
        <th>Review</th>
        <th>Action </th>
    </thead>
    
        <tr>
            <td>Appointment id: 7
                <br>
                <br>
                Created: 17/11/2024
            </td>
            <td>Kasun Perera</td>
            <td  >5</td>
            <td  >Good service</td>
            <td style="text-align:center"><button class="button button1 replyBtn">Reply</button></td>
        </tr>

        <tr>
            <td>Appointment id: 5
                <br>
                <br>
                Created: 14/11/2024
            </td>
            <td>Sadun Perera</td>
            <td  >5</td>
            <td  >Good service</td>
            <td style="text-align:center"><button class="button button1 replyBtn">Reply</button></td>
        </tr>

        <tr>
            <td>Appointment id: 2
                <br>
                <br>
                Created: 10/11/2024
            </td>
            <td>Chamara Perera</td>
            <td  >5</td>
            <td  >Good service</td>
            <td style="text-align:center"><button class="button button1 replyBtn">Reply</button></td>
        </tr>
    
    </table>
</div>

<script src="../../assets/jsFIles/vetDocotor/home.js"></script>
