<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../../../client/assets/cssFiles/common/navbar.css" type="text/css">
    <link rel="stylesheet" href="../../../client/assets/cssFiles/vetDoctor/Home.css" type="text/css">
   
</head>
<body>
    <nav>
        <img src="../../../client/assets/images/logo.png" alt="logo" class="logo" />
        <label class="logoname">   
            VetiPlus 
        </label>
        <ul>
            <li> <a href="#" class="active">Home</a> </li>
            <li> <a href="#">Appointments</a> </li>
            <li> <a href="#">Medical</a> </li>
            <li> <a href="#">Feedback</a> </li>
            <li> <a href="#">Contact us</a> </li>
            <li> 
                <a href="#">
                    <img src="../../../client/assets/images/doctorprofile.jpg" style="border-radius:30px" alt="profile" />
                </a>
            </li>
        </ul>
    </nav>

    <!--add a container to diplay profile picture and user name-->
    <div class="container">
        <div class="profile">
            <img src="../../../client/assets/images/logo.png" alt="profile" class="profilepic" />
            <h1>Dr. Kasun Mendis</h1>
        </div>
    </div>

    <!--add a container to display the table of feilds no., starting time, closing time, Assistance without borders-->
    <div class="frame">
        <h2>My latst Appointments</h2>
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
                <td><button>View</button></td>
            </tr>
        </table>
    </div>

    <div class="frame1">
        <h2>My latest Review</h2>
        <table class="reviewTable">
            <thead class="reviewTableHead">
                <th>Content</th>
                <th> Rating</th>
                <th>Review</th>
                <th>Action </th>
            </thead>
            <tr>
                <td colspan="4" style="border-right: none;">   
                    <img src="../../../client/assets/images/logo.png" alt="profile" />
                    <h3>Pabodya</h3>
                </td>
            </tr>
            
            <tr>
                <td style="border-bottom:none; background-color: white;">Session:</td>
                <td rowspan="2" style="background-color: white;" >5</td>
                <td rowspan="2" style="background-color: white;">Good service</td>
                <td rowspan="2" style="background-color: white; text-align:center"><button class="button button1">Reply</button></td>
            </tr>
            <tr>
                <td style="background-color: white;">Created:</td>
            </tr>

            <tr>
                <td colspan="4" style="border-right: none;">   
                    <img src="../../../client/assets/images/logo.png" alt="profile" />
                    <h3>Chamara</h3>
                </td>
            </tr>

            <tr>
                <td style="border-bottom:none; background-color: white;">Session:</td>
                <td rowspan="2" style="background-color: white;" >5</td>
                <td rowspan="2" style="background-color: white;">Good service</td>
                <td rowspan="2" style="background-color: white; text-align:center"><button class="button button1">Reply</button></td>
            </tr>
            <tr>
                <td style="background-color: white;">Created:</td>
            </tr>

            <tr></tr>
                <td colspan="4" style="border-right: none;">   
                    <img src="../../../client/assets/images/logo.png" alt="profile" />
                    <h3>Kasun</h3>
                </td>
            </tr>

            <tr>
                <td style="border-bottom:none; background-color: white;">Session:</td>
                <td rowspan="2" style="background-color: white;" >5</td>
                <td rowspan="2" style="background-color: white;">Good service</td>
                <td rowspan="2" style="background-color: white; text-align:center"><button class="button button1">Reply</button></td>
            </tr>
            <tr>
                <td style="background-color: white;">Created:</td>
            </tr>
        </table>
    </div>
</body>
</html>