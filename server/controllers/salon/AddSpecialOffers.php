<?php

/*add config to connect db */
include __DIR__ . "../../../config/phpConfig.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    /*Send the message id userid is not set correctly*/
    if(!isset($_SESSION['user_id'])){
        die('Salon ID is missing.Try Again');
    }


    $salon_id = $_SESSION['user_id'];
    $ServiceName = $_POST['serviceName'];
    $Discount = $_POST['discount'];
    $Opendate = $_POST['offerStartDate'];
    $Closedate = $_POST['offerClosetDate'];
    $Discription = $_POST['description'];
    $CurrentDate = date("m/d/Y");

    $image = $_FILES['image1']['name'];
    $image_size = $_FILES['image1']['size'];
    $image_tmp_name = $_FILES['image1']['tmp_name'];
    $image_folder = '../../../client/assets/images/salon/specialoffers/' .$image;


    /*if came the image post*/ 
    // if(isset($image)) {
    //     move_uploaded_file($image_tmp_name, $image_folder);
    // }


    if($Opendate > $CurrentDate  && $Closedate > $CurrentDate){
        if(isset($image)) {
             move_uploaded_file($image_tmp_name, $image_folder);
        }

        $insert_query = $conn->prepare("INSERT INTO specialoffers (specialOfferID, description, discount, createDate, startDate, closeDate, serviceID) 
        VALUES ('','[value-2]', $Discription  , $Discount,$Opendate,$Closedate ,'[value-7]')");
    }
    

    if($image_size < 1000000 ) {

    }



}






?>