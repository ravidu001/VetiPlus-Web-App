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
    <a class="pageclose" href="../Home.php">&CircleTimes;</a>
        <h2 class="header-name">Service Details</h2>
        <div class="content-1">
            <button class="add" id="service-add">
                <a href="./AddService.html">
                    Add
                </a> 
            </button>
                <?php
                    require_once("../../../components/common/serchbar.php")
                ?>
        </div>
    <table>
        <thead>
            <tr>
                <th>Photoes</th>
                <th>Details</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div>
                        <img src="../../../assets/images/salon/groomer.jpg" class="service-photo">
                        <p>Photo - 01</p>
                    
                    
                        <img src="../../../assets/images/salon/groomer.jpg" class="service-photo">
                        <p>Photo - 02</p>
                    </div>
                </td>
                <td>
                    <div class="details">
                        <table>
                            <tbody>
                                <tr>
                                    <td><b>Name</b></td>
                                    <td>Pet Bathing</td>
                                </tr>
                                <tr>
                                    <td><b>Charge </b></td>
                                    <td>30 $</td>
                                </tr>
                                <tr>
                                    <td><b>Time Duration </b></td>
                                    <td>30 min</td>
                                </tr>
                                <tr>
                                    <td><b>Description</b></td>
                                    <td>Pet bathing is a grooming process that keeps pets clean and healthy. 
                                        It involves using pet-safe shampoo and water to remove dirt, odors, 
                                        and excess oils from their coat and skin. Bathing starts with a lukewarm 
                                        rinse, followed by gentle shampooing, thorough rinsing, and optional conditioning. 
                                        After the bath, pets are towel- or blow-dried on a low-heat setting.The frequency of 
                                        baths varies by breed and lifestyle, but most pets benefit from a bath every few weeks.
                                         Bathing supports hygiene, reduces shedding, and helps prevent skin issues, making it 
                                         an essential part of pet care.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
                <td>
                    <button class="delete" id="delete">Delete</button>
                    <button class="edit" id="edit">
                        <a href="./EditService.html">
                            Edit
                        </a>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>

    </div>
    
</body>
</html>
