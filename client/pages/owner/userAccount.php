
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
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/userAccount.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
    <?php include_once "../../components/common/admin/message.php" ?>

    <!-- Include navbar -->
    <?php include '../../components/common/owner/navbar.php'; ?>

    <section class="home">
    <div class="user-account">
            <div class="user-account-inside">
                <div class="user-account-inside-left">
                    <img src="../../assets/images/user.png" alt="">
                </div>
                <div class="user-account-inside-right">
                    <h2>Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; Ramesh Peshala</h2>
                    <h2>Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; rameshpeshala84@gmail.com</h2>
                    <h2>Address &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:- &nbsp; 419,gangasirigama,Thissamaharama</h2>
                    <h2>Contact Number &nbsp; &nbsp;:- &nbsp; 0762163506</h2>
                    <h2>ID Number &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; 200212702901</h2>
                    <h2>User ID &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :- &nbsp; 22001557</h2>
                </div>
            </div>
            <div class="user-account-outside">
                <div class="user-account-outside-left" id="main-content">
                    <a href="./petAccount.php">Pet Data</a>
                </div>
                <div class="user-account-outside-right">
                    <h2>Total Appointment &nbsp; &nbsp; :- &nbsp; &nbsp; &nbsp; 456</h2>
                    <h2>Cancel Appointment &nbsp; :- &nbsp; &nbsp; &nbsp; 23</h2>
                </div>
            </div>
        </div>
    </section>
</body>
</html>