<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback And Reviews</title>
    <link rel="stylesheet" href="../../../assets/cssFiles/salon/feedback.css">
    <link rel="stylesheet" href="../../../assets/cssFiles/salon/PageClose.css">
    <link rel="stylesheet" href="../../../assets/cssFiles/salon/ToolContentMainTopic.css">

</head>

<body>
    <div class="feedback-review-content">
        <a class="pageclose" href="../../salon/Tool.php" >&CircleTimes;</a>
        <h2 class="header-name">Feedback and Reviews</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Content</th>
                    <th>Rating</th>
                    <th>Service</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="img">
                        <img src="../../../assets/images/vetiplus-logo.png" class="prof_image" alt="Profile">
                        Pabodya [Customer Name]
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <h3>Main Review:</h3>
                        <p>Today .............</p>
                        <h4>Created: 11 Jan 2024</h4>
                        <h4>Modified: 11 Jan 2024</h4>
                    </td>
                    <td>
                        <!-- rating stars can be added here -->
                        ⭐⭐⭐⭐☆
                    </td>
                    <td>
                        Pet Bathing
                    </td>
                    <td>
                        <button class="button" id="button">Reply</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modal for Send Message Form -->
    <div id="photoModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>

            <form id="addPhotoForm">
                <h2 class="message-topic">Send Message</h2>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea><br>
                <button type="submit">Send</button>
            </form>

        </div>
    </div>
</body>
<script src="../../../assets/jsFIles/salon/Feedback.js"></script>
</html>
