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
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/home.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <!-- Include navbar -->
    <?php include '../../components/common/admin/navbar.php'; ?>

    <section class="home">
        <div class="home-before">
            <div class="home-1">
                <div class="home-inside">
                    <img src="../../assets/images/image_8.jpg" alt="">
                    <div>
                        <h1>Ramesh Peshala</h1>
                        <h2>System Admin</h2>
                    </div>

                </div>
                <div class="home-inside-right">
                    <img src="../../assets/images/image_9.png" alt="">
                </div>
            </div>
            <div class="home-after">
                <div class="home-after-inside">
                    <h3>Total Account</h3>
                    <h4>2345</h4>
                </div>
                <div class="home-after-outer">
                    <h3>Total Appointment</h3>
                    <h4>4561</h4>
                </div>

                <div class="home-below-inside">
                    <h3>Total Transactions</h3>
                    <h4>234</h4>
                </div>
                <div class="home-below-inside">
                    <h3>Total Salon </h3>
                    <h4>102</h4>
                </div>
            </div>
            <div class="home-down">
                <div class="home-chart">
                    <canvas id="barChart"></canvas>
                    <script src="../../assets/jsFIles/Admin/barchart.js"></script>
                </div>
                <div class="home-down-message">
                    <table>
                        <thead>
                            <tr>
                                <th>User's Name</th>
                                <th>Complain Message</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr onclick="window.location.href='complain_profile.php'">
                                <td>Ramesh Peshala</td>
                                <td>It is a long established fact that a reader will be...</td>
                                <td>2022/05/15</td>
                            </tr>
                            <tr>
                                <td>Ramesh Peshala</td>
                                <td>It is a long established fact that a reader will be...</td>
                                <td>2022/05/15</td>
                            </tr>
                            <tr>
                                <td>Ramesh Peshala</td>
                                <td>It is a long established fact that a reader will be...</td>
                                <td>2022/05/15</td>
                            </tr>
                            <tr>
                                <td>Ramesh Peshala</td>
                                <td>It is a long established fact that a reader will be...</td>
                                <td>2022/05/15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>