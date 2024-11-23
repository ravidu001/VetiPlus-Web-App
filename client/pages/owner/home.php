
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
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/navbar.css" type="text/css">4
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/home.css" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <!-- Include navbar -->
    <?php include '../../components/common/owner/navbar.php'; ?>

    <section class="home">
        
    <div class="home-1">
            <div class="home-inside-inner">
                <div class="home-inside-left">
                    <img src="../../assets/images/image_8.jpg" alt="">
                    <div class="home-inside-left-top">
                        <h1>Welcome Back</h1>
                        <h3>Ramesh Peshala</h3>
                    </div>
                </div>
                <div class="home-inside-right">
                    <img src="../../assets/images/image_9.png" alt="">
                </div>
            </div>
            <div class="home-inside">
                <div class="home-inside-middle">
                    <h2>Active Account</h2>
                    <h3>1.2K</h3>
                </div>
                <div class="home-inside-middle">
                    <h2>Active Users</h2>
                    <h3>1.2K</h3>
                </div>
                <div class="home-inside-middle">
                    <h2>Total Users</h2>
                    <h3>10.2K</h3>
                </div>
            </div>
            <div class="home-inside-outer">
                <div class="home-inside-down">
                <h1>Monthly Appointment Data</h1>
                <canvas id="barChart"></canvas>
                </div>
                <div class="home-inside-top">
                <h1>Number Of Users</h1>
                <canvas id="pieChart"></canvas>
                </div>
            </div>
            <script src="../../assets/jsFIles/Owner/pieChart.js"></script>
            <script src="../../assets/jsFIles/Admin/barchart.js"></script>
    </section>
</body>
</html>