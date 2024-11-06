<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Service Details</title>
    <link rel="stylesheet" href="../../../assets/cssFiles/salon/ServiceDetails.css">
    <link rel="stylesheet" href="../../../assets/cssFiles/salon/PageClose.css">
    <link rel="stylesheet" href="../../../assets/cssFiles/salon/ToolContentMainTopic.css">
</head>
<body>
    <div class="Service-details">
    <a class="pageclose" href="../../salon/Tool.php">&CircleTimes;</a>
        <h2 class="header-name">Service Details</h2>
        <div class="content-1">
            <button class="add" id="service-add">Add</button>
                <?php
                    require_once("../../../components/common/serchbar.php")
                ?>
        </div>
    <table>
        <thead>
            <tr>
                <th>Service Name</th>
                <th>Charge</th>
                <th>Time Duration(for one service)</th>
                <th>Photo</th>
                <th>Discription</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pet Bathing</td>
                <td>5 $</td>
                <td>30 min</td>
                <td>
                    <img src="../../../assets/images/salon/groomer.jpg" class="service-photo">
                </td>
                <td>
                    Good pet Service
                </td>
                <td>
                    <button class="delete" id="delete">Delete</button>
                    <button class="edit" id="edit">Edit</button>
                </td>
            </tr>
        </tbody>
    </table>

    </div>
    
</body>
</html>
