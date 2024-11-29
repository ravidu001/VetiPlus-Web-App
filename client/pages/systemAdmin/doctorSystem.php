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
    <link rel="stylesheet" href="../../assets/cssFiles/Admin/doctorSystem.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Include navbar -->
    <?php include '../../components/common/admin/navbar.php'; ?>

    <section class="home">
        <div class="doctor_system">
            <div class="doctor_system_down">
                <table>
                    <thead>
                        <tr>
                            <th>Doctor Email</th>
                            <th>Doctor Name</th>
                            <th>Date</th>
                            <th> &nbsp; &nbsp;Doctor ID</th>
                            <th>Download <br> Document</th>
                            <th> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>liyosalno@gmail.com</td>
                            <td>Ramesh Peshala</td>
                            <td>2022/02/05</td>
                            <td>225689</td>
                            <td><a href=""><img src="../../assets/images/image_10.png" alt=""></a></td>
                            <td>
                                <button class="accept-btn" onclick="openModal('accept')">Accept</button>
                                <button class="decline-btn" onclick="openModal('decline')">Decline</button>
                            </td>
                        </tr>
                        <tr>
                            <td>liyosalno@gmail.com</td>
                            <td>Ramesh Peshala</td>
                            <td>2022/02/05</td>
                            <td>225689</td>
                            <td><a href=""><img src="../../assets/images/image_10.png" alt=""></a></td>
                            <td>
                                <button class="accept-btn" onclick="openModal('accept')">Accept</button>
                                <button class="decline-btn" onclick="openModal('decline')">Decline</button>
                            </td>
                        </tr>
                        <tr>
                            <td>liyosalno@gmail.com</td>
                            <td>Ramesh Peshala</td>
                            <td>2022/02/05</td>
                            <td>225689</td>
                            <td><a href=""><img src="../../assets/images/image_10.png" alt=""></a></td>
                            <td>
                                <button class="accept-btn" onclick="openModal('accept')">Accept</button>
                                <button class="decline-btn" onclick="openModal('decline')">Decline</button>
                            </td>
                        </tr>
                        <tr>
                            <td>liyosalno@gmail.com</td>
                            <td>Ramesh Peshala</td>
                            <td>2022/02/05</td>
                            <td>225689</td>
                            <td><a href=""><img src="../../assets/images/image_10.png" alt=""></a></td>
                            <td>
                                <button class="accept-btn" onclick="openModal('accept')">Accept</button>
                                <button class="decline-btn" onclick="openModal('decline')">Decline</button>
                            </td>
                        </tr>
                        <tr>
                            <td>liyosalno@gmail.com</td>
                            <td>Ramesh Peshala</td>
                            <td>2022/02/05</td>
                            <td>225689</td>
                            <td><a href=""><img src="../../assets/images/image_10.png" alt=""></a></td>
                            <td>
                                <button class="accept-btn" onclick="openModal('accept')">Accept</button>
                                <button class="decline-btn" onclick="openModal('decline')">Decline</button>
                            </td>
                        </tr>
                        <tr>
                            <td>liyosalno@gmail.com</td>
                            <td>Ramesh Peshala</td>
                            <td>2022/02/05</td>
                            <td>225689</td>
                            <td><a href=""><img src="../../assets/images/image_10.png" alt=""></a></td>
                            <td>
                                <button class="accept-btn" onclick="openModal('accept')">Accept</button>
                                <button class="decline-btn" onclick="openModal('decline')">Decline</button>
                            </td>
                        </tr>
                        <tr>
                            <td>liyosalno@gmail.com</td>
                            <td>Ramesh Peshala</td>
                            <td>2022/02/05</td>
                            <td>225689</td>
                            <td><a href=""><img src="../../assets/images/image_10.png" alt=""></a></td>
                            <td>
                                <button class="accept-btn" onclick="openModal('accept')">Accept</button>
                                <button class="decline-btn" onclick="openModal('decline')">Decline</button>
                            </td>
                        </tr>
                        <tr>
                            <td>liyosalno@gmail.com</td>
                            <td>Ramesh Peshala</td>
                            <td>2022/02/05</td>
                            <td>225689</td>
                            <td><a href=""><img src="../../assets/images/image_10.png" alt=""></a></td>
                            <td>
                                <button class="accept-btn" onclick="openModal('accept')">Accept</button>
                                <button class="decline-btn" onclick="openModal('decline')">Decline</button>
                            </td>
                        </tr>
                        <tr>
                            <td>liyosalno@gmail.com</td>
                            <td>Ramesh Peshala</td>
                            <td>2022/02/05</td>
                            <td>225689</td>
                            <td><a href=""><img src="../../assets/images/image_10.png" alt=""></a></td>
                            <td>
                                <button class="accept-btn" onclick="openModal('accept')">Accept</button>
                                <button class="decline-btn" onclick="openModal('decline')">Decline</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal" id="systemModal">
            <div class="modal-content">
                <h3 id="modal-message">Do you want to proceed?</h3>
                <button onclick="confirmAction()">Yes</button>
                <button onclick="closeModal()">No</button>
            </div>
        </div>
    </section>

    <script src="../../assets/jsFIles/Admin/systemAccept.js"></script>

</body>

</html>