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
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/accountDashbord.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Include navbar -->
    <?php include '../../components/common/admin/navbar.php'; ?>

    <section class="home">
        <div class="account">
            <div class="account-inside">
                <h1>Welcome to Edit Page</h1>
            </div>
            <div class="account-inside-upper">
                <div class="account-inside-upper-1">
                    <h3>Users Accounts</h3>
                </div>
                <div class="account-inside-upper-1">
                    <h3>Pets Accounts</h3>
                </div>
            </div>
            <div class="account-inside-lower">
                <div class="account-inside-lower-left">
                    <form action="">
                        <label for="searchInput"></label>
                        <input type="text" id="searchInput" title="Search Input" placeholder="Enter User ID">
                        <label for="searchInput"></label>
                        <input type="password" id="searchInput" title="search Input" placeholder="Enter Admin Password">
                        <button type="button" title="Click me" onclick="window.location.href='UserAccount.php'">Search</button>
                    </form>
                </div>
                <div class="account-inside-lower-right">
                    <form action="">
                        <label for="searchInput"></label>
                        <input type="text" id="searchInput" title="Search Input" placeholder="Enter User ID">
                        <label for="searchInput"></label>
                        <input type="password" id="searchInput" title="search Input" placeholder="Enter Admin Password">
                        <button type="button" title="Click me" onclick="window.location.href='petAccount.php'">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>