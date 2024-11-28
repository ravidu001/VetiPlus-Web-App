<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/images/logo.png" type="image/png">
    <title>Profile </title>
    <link rel="stylesheet" href="../../assets/cssFiles/salon/sidebar.css" type="text/css">
    <link rel="stylesheet" href="../../../client/assets/cssFiles/vetDoctor/contactus.css" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <div class="pagecontent">
        <!-- Include navbar -->
            <?php include '../../components/salon/sidebar.php'; ?>

            <section class="home">
                    
                <div class="container">
                    <div class="box1">
                        <h1>Contact Us</h1>
                        <table>
                            <tr>
                                <td>
                                    <i class='bx bxs-envelope'></i>
                                </td>
                                <td> Email:</td>
                                <td> support@vetiplus.com </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class='bx bxs-phone-call'></i>
                                </td>
                                <td>Phone Number:</td>
                                <td>+94 77 987 6543</td>
                            </tr>
                            <tr>
                                <td>
                                    <i class='bx bxl-twitter' ></i>
                                </td>
                                <td>Twitter</td>
                                <td><a href="www.twitter.com">@VetiPlus</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <i class='bx bxl-facebook-circle' ></i>
                                </td>
                                <td>Facebook</td>
                                <td><a href="www.facebook.com">Veti Plus</a></td>
                            </tr>
                        </table>            
                        

                    </div>
                    <div class="box2">
                        <h1>Feedback / Inquiry</h1>
                        <form action="contactus.php" method="post">
                            <div class="text-feild">
                                Name
                                <input type="text" name="name" required>
                                Email Address
                                <input type="email" name="email" required>
                                Contact Number
                                <input type="text" name="contact" required>
                            </div>

                            Type of Message
                            <select name="type" id="messageType" required>
                                <option value="Feedback">Feedback</option>
                                <option value="Inquiry">Inquiry</option>
                            </select>
                            <div id="messageContainer">
                                Message
                                <textarea name="message" placeholder="Write here..." required></textarea>
                            </div>
                            <div id="ratingContainer">
                                Rating
                            
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
                            </div>
                            <div id="uploadContainer">
                                Upload Image
                                <input type="file" name="image" accept="image/*">
                                <br />
                            </div>
                            <input type="reset" name="reset">
                            <input type="submit" name="contactSubmit" value="Submit">
                        </form>

                        <script src="../../assets/jsFIles/vetDocotor/contactus.js"></script>
                    </div>
                </div>

            </section>
    </div>

</body>
 <script src="../../assets/jsFIles/salon/sidebar.js"></script>
</html>