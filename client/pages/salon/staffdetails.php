<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Details</title>
    <link rel="stylesheet" href="../../assets/cssFiles/salon/StaffDetail.css">
    <link rel="stylesheet" href="../../assets/cssFiles/salon/ToolContentMainTopic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>

    <div class="pagecontent">
            
        <div class="StaffandSidebar">
            <div>
                <?php
                    require "../../components/salon/sidebar.php";
                ?>
            </div>
            <div class="staff-content">
                <h2 class="header-name">Staff Details</h2>
                
                <div class="content-0">
                    <button class="add" id="service-add">
                        <a href="./AddStaff.php">Add</a>
                    </button>
                        <?php
                            require "../../components/common/serchbar.php";
                        ?>
                </div>

                <table class="table">

                    <thead>
                        <th>Name</th>
                        <th>Picture</th>
                        <th>Phone Number</th>
                        <th>NIC Number</th>
                        <th>Address</th>
                        <th>Position</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                        <tr>
                            <td>J.W.D.Kapila</td>
                            <td>
                                <img src="../../assets/images/salon/boy.jpg" class="staff-picture">
                            </td>
                            <td>07785663324</td>
                            <td>200178996325</td>
                            <td>Embilipitiya ,Udagampola</td>
                            <td>Nail polishing</td>
                            <td>
                                <button class="edit">Delete</button>
                                <button class="edit">
                                    <a href="./EditStaff.php">
                                    Edit
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>J.W.D.Kapila</td>
                            <td>
                                <img src="../../assets/images/salon/boy.jpg" class="staff-picture">
                            </td>
                            <td>07785663324</td>
                            <td>200178996325</td>
                            <td>Embilipitiya ,Udagampola</td>
                            <td>Nail polishing</td>
                            <td>
                                <button class="edit">Delete</button>
                                <button class="edit">
                                    <a href="./EditStaff.php">
                                    Edit
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>J.W.D.Kapila</td>
                            <td>
                                <img src="../../assets/images/salon/boy.jpg" class="staff-picture">
                            </td>
                            <td>07785663324</td>
                            <td>200178996325</td>
                            <td>Embilipitiya ,Udagampola</td>
                            <td>Nail polishing</td>
                            <td>
                                <button class="edit">Delete</button>
                                <button class="edit">
                                    <a href="./EditStaff.php">
                                    Edit
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>J.W.D.Kapila</td>
                            <td>
                                <img src="../../assets/images/salon/boy.jpg" class="staff-picture">
                            </td>
                            <td>07785663324</td>
                            <td>200178996325</td>
                            <td>Embilipitiya ,Udagampola</td>
                            <td>Nail polishing</td>
                            <td>
                                <button class="edit">Delete</button>
                                <button class="edit">
                                    <a href="./EditStaff.php">
                                    Edit
                                </button>
                            </td>
                        </tr>
                    </tbody>

                </table>


            </div>
        </div>
    </div>
    

</body>
<script src="../../assets/jsFIles/salon/sidebar.js"></script>
</html>