<?php

include __DIR__ . '/../../../server/config/phpConfig.php';

if (isset($_GET['service_id'])) {
    $service_id = $_GET['service_id'];

    $sql = "DELETE FROM salonservice WHERE serviceID='$service_id'";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../../../client/pages/salon/ServiceDetails.php?status=success');
    } else {
        header('Location: ../../../client/pages/salon/ServiceDetails.php?status=error');
    }
    exit();
}
?>
