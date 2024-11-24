
<?php
 
  $current_page = basename($_SERVER['PHP_SELF']);
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/images/logo.png" type="image/png">
    <title>VetiPlus</title>
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/navbar.css" type="text/css">
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/payment.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    
    <?php include_once "../../components/common/admin/message.php" ?>

    <!-- Include navbar -->
    <?php include '../../components/common/owner/navbar.php'; ?>

    <section class="home">
    <div class="payment">
        <div class="payment-inside">
            <div class="payment-inside-top">
             <div>
             <i class='bx bx-trending-up icon'></i>
             </div>
             <div>
             <h2>Daily Income</h2>
             <h3>Rs.15 000</h3>
             </div>
            </div>
            <div class="payment-inside-top">
             <div>
             <i class='bx bx-trending-up icon'></i>
             </div>
             <div>
             <h2>Total Income</h2>
             <h3>Rs.1 000 000</h3>
             </div>
            </div>
            <div class="payment-inside-top">
             <div>
             <i class='bx bx-trending-down icon' ></i>
             </div>
             <div>
             <h2>Monthly Expenses</h2>
             <h3>Rs.9 000</h3>
             </div>
            </div>
            <div class="payment-inside-top">
             <div>
             <i class='bx bx-trending-down icon' ></i>
             </div>
             <div>
             <h2>Total Expenses</h2>
             <h3>Rs.100 000</h3>
             </div>
            </div>
        </div>
        <div class="Payment-outside">
            <form action="">
                <div class="Payment-outside-top">
                        <input type="text" placeholder="Enter User ID">
                        
                        <input type="text" placeholder="Enter Pet ID">
                               
                        <input type="date" placeholder="Enter Date">
                </div>
                <div class="Payment-outside-down">
                        <a href="./payment_list.php">Search</a>
                </div>      
            </form>
        </div>
        <div class="payment-chart">
        <h1>Monthly Income and Outcome Statistics</h1>
        <canvas id="paymentChart"></canvas>
        </div>
    </div>
    <script src="../../assets/jsFIles/Owner/paymentChart.js"></script>
    </section>
</body>
</html>