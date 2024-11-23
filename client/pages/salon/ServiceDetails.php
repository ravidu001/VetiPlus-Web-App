<?php
include  ( __DIR__ . '/../../../server/controllers/salon/ViewSalonService.php');
// include  ( __DIR__ . '/../../../server/controllers/salon/DeleteSalonService.php');
// include ( __DIR__ . '/../../../server/config/phpConfig.php');



$salon_id = 1; // Replace with dynamic salon ID when available

// Get all services for the salon
//$services = getAllServices($salon_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Service Details</title>
    <link rel="stylesheet" href="../../assets/cssFiles/salon/ServiceDetails.css">
    <link rel="stylesheet" href="../../assets/cssFiles/salon/ToolContentMainTopic.css">
    <link rel="stylesheet" href="../../assets/cssFiles/salon/PopUp.css">
</head>
<body>
    <div class="sidebarandsevice">
            <div>
                <?php
                    require "../../components/salon/sidebar.php";
                ?>
            </div>
            <div class="Service-details">
                <h2 class="header-name">Service Details</h2>
                    <div class="content-1">
                        <button class="add" id="service-add">
                            <a href="./AddService.php">Add</a>
                        </button>
                            <?php
                                require_once("../../components/common/serchbar.php")
                            ?>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Service Details</th>
                                <th>Photo</th>
                                <th>Discription</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <td>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                      Name  
                                                    </td>
                                                    <td>
                                                    Pet Bathing
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                      Charge  
                                                    </td>
                                                    <td>
                                                       3 $ 
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                </td>
                                <td>
                                    <img src="../../assets/images/salonwomen.jpg" class="service-photo">
                                </td>
                                <td><td>
                                        Pet bathing is an essential salon service that keeps pets clean, healthy, 
                                        and comfortable. During a bath, a pet care professional carefully washes 
                                        the pet using pet-safe shampoos and conditioners to remove dirt, allergens, 
                                        and odors. The process includes gentle brushing to detangle fur and remove
                                        loose hair, ensuring the pet’s coat stays soft and shiny. For added comfort,
                                        the bathing service may also include ear cleaning and nail trimming, creating
                                        a refreshing and complete grooming experience for pets.
                                </td></td>
                                <td>
                                    <button class="delete" id="delete">Delete</button>
                                    <button class="edit" id="edit">
                                        <a href="./EditService.php">Edit</a>
                                    </button>
                                </td>
                            </tr> -->
                            <?php
                    // Loop through the fetched services
                                if (!empty($services)) {
                                    foreach ($services as $service) {
                                        echo "<tr>";
                                        // Service Details Column
                                        echo "<td>
                                                <h4 class= 'ServiceName'>{$service['serviceName']}</h4><br>
                                                <h3 class= 'ServicePrice'></h3>Service Charge : <br> <p class= 'charge'>Rs .{$service['serviceCharge']}</p>
                                            </td>";

                                        // Photo Column
                                        echo "<td><img src='../../assets/images/{$service['photo1']}' class='service-photo' alt='Service Image'>";

                                        echo "<img src='../../assets/images/{$service['photo2']}' class='service-photo' alt='Service Image'></td>";

                                        // Description Column
                                        echo "<td>
                                                <p class='ServiceDescription'>
                                                    {$service['serviceDescription']}
                                                </p>
                                            </td>";

                                        // Action Column
                                        echo "<td>
                                            <button class='edit'>
                                                <a href='EditService.php?service_id={$service['serviceID']}'>Edit</a>  
                                            </button>
                                            <button class='delete'>
                                            <a href='../../../server/controllers/salon/DeleteSalonService.php?service_id={$service['serviceID']}' class='delete'
                                                onclick=\"return confirm('Are you sure you want to delete this?')\" >
                                                Delete
                                            </a>  
                                            </button>  
                                            </td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>No services found</td></tr>";
                                }

                                // require('../../../server/controllers/salon/DeleteSalonService.php');
                    ?>
                    
                        </tbody>
                    </table>

            </div>
    </div>
    
    
</body>
    <script src= "../../assets/jsFIles/salon/SearchService.js"></script>
    <script src= "../../assets/jsFIles/salon/PopUp.js"></script>
</html>
