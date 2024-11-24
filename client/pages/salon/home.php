<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/cssFiles/salon/sidebar.css">
    <script type="text/javascript" src="../../assets/jsFiles/salon/sidebar.js" defer></script>
    <link rel="text/image" href="../../assets/images/vetiplus-logo.png">
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
                    require "../../components/common/salon/sidebar.php";
                ?>
            </div>
            <div class="dash">
                <?php
                    require "./dashboard.php";
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
</html>