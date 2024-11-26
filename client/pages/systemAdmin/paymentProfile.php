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
  <link rel="stylesheet" href="../../assets/cssFiles/Admin/navbar.css" type="text/css">
  <link rel="stylesheet" href="../../assets/cssFiles/Admin/paymentProfile.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <!-- Include navbar -->
  <?php include '../../components/common/admin/navbar.php'; ?>

  <section class="home">
    <div class="payment-profile">
      <div class="payment-profile-inside">
        <div class="payment-profile-inside-left">
          <img src="../../assets/images/user.png" alt="">
        </div>
        <div class="payment-profile-inside-right">
          <div class="payment-profile-inside-right-top">
            <h2>Holder's Name &nbsp; &nbsp; &nbsp; &nbsp; -:&nbsp; Ramesh Peshala </h2>
            <h2>Account Number &nbsp; &nbsp; -:&nbsp; 061200140007057 </h2>
            <h2>Exprie date &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -:&nbsp; 25/28</h2>
            <h2>CVV &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-:&nbsp; 199 </h2>
          </div>
        </div>

      </div>
      <div class="payment-profile-outside">
        <div class="container">
          <table>
            <thead>
              <tr>
                <th>Payment ID</th>
                <th>Appoinment ID</th>
                <th>Date</th>
                <th>Doctor Name</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>220022</td>
                <td>22001557</td>
                <td>2024/04/07</td>
                <td>Ravindu Piris</td>

              </tr>
              <tr>
                <td>220022</td>
                <td>22001557</td>
                <td>2024/04/07</td>
                <td>Ravindu Piris</td>
              </tr>
              <tr>
                <td>220022</td>
                <td>22001557</td>
                <td>2024/04/07</td>
                <td>Ravindu Piris</td>
              </tr>
              <tr>
                <td>220022</td>
                <td>22001557</td>
                <td>2024/04/07</td>
                <td>Ravindu Piris</td>
              </tr>
              <tr>
                <td>220022</td>
                <td>22001557</td>
                <td>2024/04/07</td>
                <td>Ravindu Piris</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="payment-btn">
        <button>Report generator</button>
      </div>
    </div>
  </section>
</body>

</html>