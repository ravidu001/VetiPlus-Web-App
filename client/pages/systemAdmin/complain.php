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
  <link rel="stylesheet" href="../../assets/cssFiles/Admin/complain.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <!-- Include navbar -->
  <?php include '../../components/common/admin/navbar.php'; ?>

  <section class="home">
    <div class="complain">
      <table>
        <thead>
          <tr>
            <th>User's Name</th>
            <th>Complain Message</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr onclick="window.location.href='complain_profile.php'">
            <td>Ramesh Peshala</td>
            <td>It is a long established fact that a reader will be...</td>
            <td><a href="#"><img src="../../assets/images/mail.png" alt="View Message"></a></td>
          </tr>
          <tr>
            <td>Ramesh Peshala</td>
            <td>It is a long established fact that a reader will be...</td>
            <td><a href="#"><img src="../../assets/images/mail.png" alt="View Message"></a></td>
           
          </tr>
          <tr>
            <td>Ramesh Peshala</td>
            <td>It is a long established fact that a reader will be...</td>
            <td><a href="#"><img src="../../assets/images/mail.png" alt="View Message"></a></td>
          </tr>
          <tr>
            <td>Ramesh Peshala</td>
            <td>It is a long established fact that a reader will be...</td>
            <td><a href="#"><img src="../../assets/images/mail.png" alt="View Message"></a></td>
          </tr>
          <tr>
            <td>Ramesh Peshala</td>
            <td>It is a long established fact that a reader will be...</td>
            <td><a href="#"><img src="../../assets/images/mail.png" alt="View Message"></a></td>
          </tr>
          <tr>
            <td>Ramesh Peshala</td>
            <td>It is a long established fact that a reader will be...</td>
            <td><a href="#"><img src="../../assets/images/mail.png" alt="View Message"></a></td>
          </tr>
          <tr>
            <td>Ramesh Peshala</td>
            <td>It is a long established fact that a reader will be...</td>
            <td><a href="#"><img src="../../assets/images/mail.png" alt="View Message"></a></td>
          </tr>
          <tr>
            <td>Ramesh Peshala</td>
            <td>It is a long established fact that a reader will be...</td>
            <td><a href="#"><img src="../../assets/images/mail.png" alt="View Message"></a></td>
          </tr>
          <tr>
            <td>Ramesh Peshala</td>
            <td>It is a long established fact that a reader will be...</td>
            <td><a href="#"><img src="../../assets/images/mail.png" alt="View Message"></a></td>
          </tr>
         
        </tbody>
      </table>
    </div>
  </section>
</body>

</html>