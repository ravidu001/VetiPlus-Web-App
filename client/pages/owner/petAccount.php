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
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/navbar.css" type="text/css">4
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/petAccount.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
    <?php include_once "../../components/common/admin/message.php" ?>

    <!-- Include navbar -->
    <?php include '../../components/common/owner/navbar.php'; ?>

    <section class="home">
    <div class="pet-account">
    <div class="pet-account-inside">
            <div class="pet-account-inside-left">
                <img src="../../assets/images/pet.jpg" alt="">
           </div>
           <div class="pet-account-inside-right">
                <h2>Pet ID  &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;:-&nbsp; 22001557</h2>
                 <h2>Name &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-&nbsp; Rocky</h2>
                 <h2>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :-&nbsp; Male</h2>
                 <h2>Pet Owner &nbsp;&nbsp; :-&nbsp;Ramesh Peshala</h2>
           </div>
        </div> 
    </div>
 </section>
</body>
</html>