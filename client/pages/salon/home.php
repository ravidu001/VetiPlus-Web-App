<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../assets/cssFiles/salon/sidebar.css">
    <link rel="stylesheet" href="../../assets/cssFiles/salon/Dashboard.css"> 
    <link rel="stylesheet" href="../../assets/cssFiles/salon/Home.css">
    <link rel="stylesheet" href="../../assets/cssFiles/common/userFooter.css">
    <link rel="stylesheet" href="../../assets/cssFiles/salon/PopUp.css">

    <title>Document</title>
</head>
<body>
    <div class="homecontent">
        <div class="sideanddashbord">
            <div>
                <?php
                    include (__DIR__ . '../../../components/salon/sidebar.php') ;
                ?>
            </div>
            <div class="dash">
                <?php
                    include (__DIR__ . '/dashboard.php' );
                ?>
            </div>
        </div> 

        <div>
            <?php
                require "./userFooter.php";
            ?>
        </div> 
    </div> 
</body>
    <script src="../../assets/jsFIles/salon/PopUp.js"></script> 
    <script src="../../assets/jsFIles/salon/sidebar.js"></script>
</html>