
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
    <link rel="stylesheet" href="../../assets/cssFiles/Owner/account.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
    <?php include_once "../../components/common/admin/message.php" ?>

    <!-- Include navbar -->
    <?php include '../../components/common/owner/navbar.php'; ?>

    <section class="home">
    <div class="accounts">
        <div class="accounts-inside">
            <div class="accounts-inside-left">
                <h2>Total Accounts</h2>
                <h2>345</h2>
            </div>
            <div class="accounts-inside-left">
                <h2>Active Accounts</h2>
                <h2>345</h2>
            </div>
            <div class="accounts-inside-left">
                <h2>Delete Accounts</h2>
                <h2>23</h2>
            </div>
        </div>
       
            <div class="account-inside-upper" >
                <div class="account-inside-upper-1">
                    <h3>Users  Accounts</h3>
                </div>
                <div class="account-inside-upper-1">
                    <h3>Pets  Accounts</h3>
                </div>
            </div>
            <div class="account-inside-lower">
                <div class="account-inside-lower-left">
                    <form action="">
                        <label for="searchInput"></label>
                        <input type="text" id="searchInput" title="Search Input" placeholder="Enter User ID">
                        <label for="searchInput"></label>
                        <a href="./userAccount.php">Search</a>
                    </form>   
                </div>
                <div class="account-inside-lower-right">
                    <form action="">
                        <label for="searchInput"></label>
                        <input type="text" id="searchInput" title="Search Input" placeholder="Enter User ID">
                        <label for="searchInput"></label>
                        <a href="./petAccount.php">Search</a> 
                    </form>
                </div>
            </div>
    </section>
</body>
</html>