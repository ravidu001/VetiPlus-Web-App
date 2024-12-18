<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Offers</title>
    <link rel="stylesheet" href="../../assets/cssFiles/salon/SpecialOffers.css">
</head>
<body>
    <div class="pagecontent">
        <div class="SidebarandSpecialOffers">
            <div>
                <?php
                    require "../../components/salon/sidebar.php";
                ?>
            </div>
            <div class="SpecialOffers">
                <div class="SpecialContent">
                    <h2> Special Offers</h2>
                    <div class="content-1">
                            <button class="add" id="specialservice-add">
                                <a href="./AddSpecialOffer.php">Add</a>
                            </button>
                                <?php
                                    require_once("../../components/common/serchbar.php")
                                ?>
                        </div>
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    Details 
                                </th>
                                <th>Picture</th>
                                <th>Description</th>
                                <th>Dates</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>

                                    <h2 class="name">Service Name </h2>
                                    <h3>Pet Bathing</h3>

                                    <h2 class="discount">Discount </h2>
                                    <h3>20%</h3>
                                        <!-- 
                                            <tr>
                                                <td>Service Name </td>
                                                <td>Pet Bathing</td>
                                            </tr>
                                            <tr>
                                                <td>Discount</td>
                                                <td>20%</td>
                                            </tr>
                                            <tr>
                                                <td>Open Date</td>
                                                <td>2024-10-08</td>
                                            </tr>
                                            <tr>
                                                <td>Close Date</td>
                                                <td>2024-12-08</td>
                                            </tr> -->
                                </td>
                            
                                <td>
                                    <div class="images" style="display: flex;">
                                        <img class="OfferImage" src="../../assets/images/salonwomen.jpg" alt="OfferImage">
                                        <img class="OfferImage" src="../../assets/images/salonwomen.jpg" alt="OfferImage">
                                    </div>
                                </td>
                                

                                <td>
                                <p class="ServiceDescription">  
                                    reat your pet to a refreshing experience with our special pet bathing offer! This service 
                                    includes a gentle, deep-clean bath using pet-safe, hypoallergenic shampoos to leave your 
                                    pet's coat soft, shiny, and smelling fresh. Our team ensures a stress-free, pampering 
                                    session for your pet, with attention to every detail, from a soothing bath massage to 
                                    a complete towel dry and optional blowout. Book today and enjoy a discounted rate, plus
                                    complimentary ear cleaning and brushing to make your pet look and feel fantastic. Perfect
                                    for pets who need a little extra care and comfort during bath time!
                                </p> 
                                </td>
                                <td>
                                    <h2 class="date">Open Date </h2>
                                    <h3>2024-10-08</h3>

                                    <h2 class="date">Close Date </h2>
                                    <h3>2024-10-20</h3>
                                </td>
                                <td>
                                        <button class="delete" id="delete">Delete</button>
                                        <button class="edit" id="edit">
                                            <a href="./EditSpecialOffer.php">Edit</a>
                                        </button>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <h2 class="name">Service Name </h2>
                                    <h3>Pet Bathing</h3>

                                    <h2 class="discount">Discount </h2>
                                    <h3>20%</h3>
                                        <!-- 
                                            <tr>
                                                <td>Service Name </td>
                                                <td>Pet Bathing</td>
                                            </tr>
                                            <tr>
                                                <td>Discount</td>
                                                <td>20%</td>
                                            </tr>
                                            <tr>
                                                <td>Open Date</td>
                                                <td>2024-10-08</td>
                                            </tr>
                                            <tr>
                                                <td>Close Date</td>
                                                <td>2024-12-08</td>
                                            </tr> -->
                                </td>
                            
                                <td>
                                    <div class="images" style="display: flex;">
                                        <img class="OfferImage" src="../../assets/images/salonwomen.jpg" alt="OfferImage">
                                        <img class="OfferImage" src="../../assets/images/salonwomen.jpg" alt="OfferImage">
                                    </div>
                                </td>
                                

                                <td>
                                <p class="ServiceDescription">  
                                    reat your pet to a refreshing experience with our special pet bathing offer! This service 
                                    includes a gentle, deep-clean bath using pet-safe, hypoallergenic shampoos to leave your 
                                    pet's coat soft, shiny, and smelling fresh. Our team ensures a stress-free, pampering 
                                    session for your pet, with attention to every detail, from a soothing bath massage to 
                                    a complete towel dry and optional blowout. Book today and enjoy a discounted rate, plus
                                    complimentary ear cleaning and brushing to make your pet look and feel fantastic. Perfect
                                    for pets who need a little extra care and comfort during bath time!
                                </p> 
                                </td>
                                <td>
                                    <h2 class="date">Open Date </h2>
                                    <h3>2024-10-08</h3>

                                    <h2 class="date">Close Date </h2>
                                    <h3>2024-10-20</h3>
                                </td>
                                <td>
                                        <button class="delete" id="delete">Delete</button>
                                        <button class="edit" id="edit">
                                            <a href="./EditSpecialOffer.php">Edit</a>
                                        </button>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <h2 class="name">Service Name </h2>
                                    <h3>Pet Bathing</h3>

                                    <h2 class="discount">Discount </h2>
                                    <h3>20%</h3>
                                        <!-- 
                                            <tr>
                                                <td>Service Name </td>
                                                <td>Pet Bathing</td>
                                            </tr>
                                            <tr>
                                                <td>Discount</td>
                                                <td>20%</td>
                                            </tr>
                                            <tr>
                                                <td>Open Date</td>
                                                <td>2024-10-08</td>
                                            </tr>
                                            <tr>
                                                <td>Close Date</td>
                                                <td>2024-12-08</td>
                                            </tr> -->
                                </td>
                            
                                <td>
                                    <div class="images" style="display: flex;">
                                        <img class="OfferImage" src="../../assets/images/salonwomen.jpg" alt="OfferImage">
                                        <img class="OfferImage" src="../../assets/images/salonwomen.jpg" alt="OfferImage">
                                    </div>
                                </td>
                                

                                <td>
                                <p class="ServiceDescription">  
                                    reat your pet to a refreshing experience with our special pet bathing offer! This service 
                                    includes a gentle, deep-clean bath using pet-safe, hypoallergenic shampoos to leave your 
                                    pet's coat soft, shiny, and smelling fresh. Our team ensures a stress-free, pampering 
                                    session for your pet, with attention to every detail, from a soothing bath massage to 
                                    a complete towel dry and optional blowout. Book today and enjoy a discounted rate, plus
                                    complimentary ear cleaning and brushing to make your pet look and feel fantastic. Perfect
                                    for pets who need a little extra care and comfort during bath time!
                                </p> 
                                </td>
                                <td>
                                    <h2 class="date">Open Date </h2>
                                    <h3>2024-10-08</h3>

                                    <h2 class="date">Close Date </h2>
                                    <h3>2024-10-20</h3>
                                </td>
                                <td>
                                        <button class="delete" id="delete">Delete</button>
                                        <button class="edit" id="edit">
                                            <a href="./EditSpecialOffer.php">Edit</a>
                                        </button>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <h2 class="name">Service Name </h2>
                                    <h3>Pet Bathing</h3>

                                    <h2 class="discount">Discount </h2>
                                    <h3>20%</h3>
                                        <!-- 
                                            <tr>
                                                <td>Service Name </td>
                                                <td>Pet Bathing</td>
                                            </tr>
                                            <tr>
                                                <td>Discount</td>
                                                <td>20%</td>
                                            </tr>
                                            <tr>
                                                <td>Open Date</td>
                                                <td>2024-10-08</td>
                                            </tr>
                                            <tr>
                                                <td>Close Date</td>
                                                <td>2024-12-08</td>
                                            </tr> -->
                                </td>
                            
                                <td>
                                    <div class="images" style="display: flex;">
                                        <img class="OfferImage" src="../../assets/images/salonwomen.jpg" alt="OfferImage">
                                        <img class="OfferImage" src="../../assets/images/salonwomen.jpg" alt="OfferImage">
                                    </div>
                                </td>
                                

                                <td>
                                <p class="ServiceDescription">  
                                    reat your pet to a refreshing experience with our special pet bathing offer! This service 
                                    includes a gentle, deep-clean bath using pet-safe, hypoallergenic shampoos to leave your 
                                    pet's coat soft, shiny, and smelling fresh. Our team ensures a stress-free, pampering 
                                    session for your pet, with attention to every detail, from a soothing bath massage to 
                                    a complete towel dry and optional blowout. Book today and enjoy a discounted rate, plus
                                    complimentary ear cleaning and brushing to make your pet look and feel fantastic. Perfect
                                    for pets who need a little extra care and comfort during bath time!
                                </p> 
                                </td>
                                <td>
                                    <h2 class="date">Open Date </h2>
                                    <h3>2024-10-08</h3>

                                    <h2 class="date">Close Date </h2>
                                    <h3>2024-10-20</h3>
                                </td>
                                <td>
                                        <button class="delete" id="delete">Delete</button>
                                        <button class="edit" id="edit">
                                            <a href="./EditSpecialOffer.php">Edit</a>
                                        </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
            </div>
        </div>
    </div>
</body>
</html>