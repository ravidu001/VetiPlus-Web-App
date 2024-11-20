<?php
// Include the ServiceModel file
require_once '../../../server/controllers/ViewSalonService.php';
session_start();

$salon_id = 1; // Replace with dynamic salon ID when available

// Get all services for the salon
$services = getAllServices($salon_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Service Details</title>
    <link rel="stylesheet" href="../../assets/cssFiles/salon/ServiceDetails.css">
    <link rel="stylesheet" href="../../assets/cssFiles/salon/ToolContentMainTopic.css">
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
                                <th><th>Discription</th></th>
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
                                    <table>
                                        <tbody>
                                            <tr><td>Name:</td><td>{$service['ServiceName']}</td></tr>
                                            <tr><td>Charge:</td><td>\${$service['ServiceCharge']}</td></tr>
                                        </tbody>
                                    </table>
                                  </td>";

                            // Photo Column
                            echo "<td><img src='../../assets/images/{$service['photo1']}' class='service-photo' alt='Service Image'></td>";

                            // Description Column
                            echo "<td>{$service['description']}</td>";

                            // Action Column
                            echo "<td>
                                <button class='edit'>
                                     <a href='EditService.php?service_id={$service['serviceId']}'>Edit</a>  
                                </button>
                                <button class='delete'>
                                <a href='DeleteService.php?service_id={$service['serviceId']}' class='delete'>Delete</a>  
                                </button>  
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No services found</td></tr>";
                    }
                    ?>
                    
                        </tbody>
                    </table>

            </div>
    </div>
    
    
</body>
</html>
