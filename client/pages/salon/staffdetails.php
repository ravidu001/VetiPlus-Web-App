<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Details</title>
    <link rel="stylesheet" href="../../assets/cssFiles/salon/StaffDetail.css">
    <link rel="stylesheet" href="../../assets/cssFiles/salon/ToolContentMainTopic.css">
</head>
<body>

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
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>NIC Number</th>
                    <th>Address</th>
                    <th>Work Status</th>
                    <th>Action</th>
                </thead>

                <tbody>
                    <td>
                        <img src="../../assets/images/boy.jpg" class="staff-picture">
                    </td>
                    <td>J.W.D.Kapila</td>
                    <td>07785663324</td>
                    <td>200178996325</td>
                    <td>EMbilipitiya ,Udagampola</td>
                    <td>nail polishing</td>
                    <td>
                        <button class="edit">Delete</button>
                        <button class="edit">Edit</button>
                    </td>
                </tbody>

            </table>


        </div>
    </div>
    

</body>
</html>