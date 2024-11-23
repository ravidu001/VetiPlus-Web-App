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
  <link rel="stylesheet" href="../../assets/cssFiles/Admin/navbar.css" type="text/css">4
  <link rel="stylesheet" href="../../assets/cssFiles/Admin/appointment_list.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <!-- Include navbar -->
  <?php include '../../components/common/admin/navbar.php'; ?>

  <section class="home">
    <div class="appointment-list">
      <div class="container">
        <table>
          <thead>
            <tr>
              <th>Appointment ID</th>
              <th>Pet Name</th>
              <th>Date</th>
              <th>Time</th>
              <th>Doctor Name</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>220022</td>
              <td>Jemy</td>
              <td>2024/04/07</td>
              <td>3.00pm</td>
              <td>Ravindu Piris</td>
              <td><button class="accept">Accept</button></td>
            </tr>
            <tr>
              <td>220022</td>
              <td>Jemy</td>
              <td>2024/04/07</td>
              <td>3.00pm</td>
              <td>Ravindu Piris</td>
              <td><button class="accept">Accept</button></td>
            </tr>
            <tr>
              <td>220022</td>
              <td>Jemy</td>
              <td>2024/04/07</td>
              <td>3.00pm</td>
              <td>Ravindu Piris</td>
              <td><button class="accept">Accept</button></td>
            </tr>
            <tr>
              <td>220022</td>
              <td>Jemy</td>
              <td>2024/04/07</td>
              <td>3.00pm</td>
              <td>Ravindu Piris</td>
              <td><button class="accept">Accept</button></td>
            </tr>
            <tr>
              <td>220022</td>
              <td>Jemy</td>
              <td>2024/04/07</td>
              <td>3.00pm</td>
              <td>Ravindu Piris</td>
              <td><button class="cancel">Cancel</button></td>
            </tr>
            <tr>
              <td>220022</td>
              <td>Jemy</td>
              <td>2024/04/07</td>
              <td>3.00pm</td>
              <td>Ravindu Piris</td>
              <td><button class="accept">Accept</button></td>
            </tr>
            <tr>
              <td>220022</td>
              <td>Jemy</td>
              <td>2024/04/07</td>
              <td>3.00pm</td>
              <td>Ravindu Piris</td>
              <td><button class="cancel">Cancel</button></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="appointment-btn">
        <button>Report generator</button>
      </div>
    </div>
  </section>
</body>

</html>