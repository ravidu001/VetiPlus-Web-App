
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    
    <?php include_once "../../components/common/admin/message.php" ?>

    <!-- Include navbar -->
    <?php include '../../components/common/owner/navbar.php'; ?>

    <section class="home">
    <div class="accounts">
        <div class="accounts-inside">
            <div class="accounts-inside-left"> 
            <div>
            <i class='bx bxs-user-circle icon'></i>
            </div>
            <div>
            <h2>User Accounts</h2>
            <h2>345</h2>
            </div>
            </div>
            <div class="accounts-inside-left">
                <div>
                <i class='bx bxs-dog icon'></i>
                </div>
                <div>
                <h2>Pet Accounts</h2>
                <h2>345</h2>
                </div>
            </div>
            <div class="accounts-inside-left">
                <div>
                <i class="fa-solid fa-user-doctor icon"></i>
                </div>
                <div>
                <h2>Doctor Accounts</h2>
                <h2>23</h2>
                </div>
            </div>
            <div class="accounts-inside-left">
                <div>
                <i class='bx bxs-store icon'></i>
                </div>
               <div>
               <h2>Salon Accounts</h2>
               <h2>23</h2>
               </div>
            </div>
            <div class="accounts-inside-left">
                <div>
                <i class='bx bxs-user-x icon'></i>
                </div>
               <div>
               <h2>Delete Accounts</h2>
               <h2>23</h2>
               </div>
            </div>
        </div>
       
            <div class="account-inside-upper" >
                <div class="account-inside-upper-1">
                <i class='bx bxs-user-circle icon'></i>
                    <h3>Users  Accounts</h3>
                </div>
                <div class="account-inside-upper-1">
                <i class="fa-solid fa-user-doctor icon"></i>
                    <h3>Doctor  Accounts</h3>
                </div>
                <div class="account-inside-upper-1">
                <i class='bx bxs-dog icon'></i>
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
                <div class="account-inside-lower-left">
                    <form action="">
                        <label for="searchInput"></label>
                        <input type="text" id="searchInput" title="Search Input" placeholder="Enter User ID">
                        <label for="searchInput"></label>
                        <a href="./doctorProfile.php">Search</a>
                    </form>   
                </div>
                <div class="account-inside-lower-left">
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