<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/cssFiles/salon/sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/cssFiles/salon/Dashboard.css"> 
    <link rel="stylesheet" href="../../assets/cssFiles/salon/Home.css">
     <link rel="stylesheet" href="../../assets/cssFiles/common/userFooter.css">  

    <title>Document</title>
</head>
<body>
    <div class="homecontent">
        <div class="sideanddashbord">
            <div>
                <?php
                    require "../../components/salon/sidebar.php";
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
                require "../../components/common/userFooter.php";
            ?>
        </div> 
    </div>
    

   
    
</body>
</html>