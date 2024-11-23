<?php

$current_page = basename($_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/images/logo.png" type="image/png">
    <title>Profile </title>
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/navbar.css" type="text/css">4
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/complain_profile.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Include navbar -->
    <?php include '../../components/common/admin/navbar.php'; ?>

    <section class="home">
        <div class="complain_profile">
            <div class="complain_profile_top">
                <div class="complain_profile_top_left">
                    <img src="../../assets/images/image_8.jpg" alt="">
                </div>
                <div class="complain_profile_top_right">
                    <div class="complain_profile_top_right_inner">
                        <h3>Name : </h3>
                        <h3>Email : </h3>
                        <h3>Contact Number : </h3>
                        <h3>Date : </h3>
                    </div>
                    <div class="complain_profile_top_right_inner">
                        <h3>Ramesh Peshala</h3>
                        <h3>rameshpeshala84@gmail.com</h3>
                        <h3>0762163506</h3>
                        <h3>2022/05/06</h3>
                    </div>
                </div>
            </div>
            <div class="complain_profile_down">
                <div class="complain_profile_down_inner">
                    <h1>Complain Message</h1>
                    &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam numquam perspiciatis quam dignissimos quas sint architecto consectetur, ducimus repudiandae quos corrupti deserunt libero delectus culpa consequatur nobis earum quod esse!
                        Quod illum iusto excepturi, doloribus aliquam unde illo quae facere fugiat eius esse aut perspiciatis distinctio officiis modi delectus, nobis aspernatur repellat amet fuga quas iste adipisci vero earum? Voluptatem.</h4>
                </div>
                <div class="complain_profile_down_inner">
                    <h1>Complain <br> Image</h1>
                    <img src="../../assets/images/image_8.jpg" alt="">
                    <img src="../../assets/images/image_8.jpg" alt="">
                    <img src="../../assets/images/image_8.jpg" alt="">
                    <img src="../../assets/images/image_8.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
</body>

</html>