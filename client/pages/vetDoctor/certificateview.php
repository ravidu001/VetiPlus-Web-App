<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificate Template</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../../../client/assets/cssFiles/common/navbarHorizontal.css" type="text/css">

<style>
    .certificate {
    width: 1200px;
    height: auto;
    border: 10px solid var(--text-primary);
    text-align: center;
    padding: 50px 80px 50px 80px;
    background-image: url('../../../client/assets/images/certificateborder.png');
    background-size: cover;
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
    padding-right:10px;
}

.certificate h1 {
    color: var(--text-primary);
}

.recipient-name {
    font-size: 36px;
    margin: 30px 0;
    font-weight: bold;
}

.details {
    padding-right:40px;
}

.course-name {
    font-size: 24px;
    color: #0066cc;
}

.data {
    display:flex;
    justify-content: center;
}

.pet, .profile, .recommendation {
    flex-direction:column;
    margin: 10px;
    border:2px solid purple;
    width:30%;
    height: auto;
    border-radius: 10px;
    background: var(--background-white);
}



.profile {
    display:flex;
    justify-content: center;
    align-items: center;
    margin: 10px;
    border:2px solid purple;
    width:30%;
    height: auto;
    border-radius: 10px;
    background: white;
}

table {
    border: none;
    width:100%;
    border-collapse: collapse;
    
}

td {
    text-align: left;
    padding:10px;
}

th {
    padding:10px;
}

.recom {
    text-align:justify;
    
}

.recom h4 {
    margin: 20px 0 20px 0;
}

.verify {
    display:flex;
    justify-content: space-between;
}

.date{
    padding-top:50px;
    padding-left:100px;
}

.signature {
    padding-top:50px;
    padding-right:100px;
}


</style>
</head>
<body>
    <div class="certificate">
        <h1>Pet Health Certificate</h1>
        <!--<div class="recipient-name" id="recipientName"></div>-->
        <div class="details">
            <p>This is to certify that the pet described below has been examined and found to be in good health. The pet is up-to-date on vaccinations and has no detectable signs of illness at the time of certification.</p>
            <div class="data">
                <div class="pet">
                    <table>
                        <tr>
                            <th colspan="2">Pet details</th>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>Roky</td>
                        </tr>
                        <tr>
                            <td>Breed</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Species</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>Male</td>
                        </tr>
                    </table>
                </div>
                <!-- <div class="profile">
             
                </div> -->
                <div class="recommendation">
                    <table>
                        <tr>
                            <th colspan="2">Recommendation</th>
                        </tr>
                        <tr>
                            <td>Health rate</td>
                            <td>Execellent</td>
                        </tr>
                        <tr>
                            <td>Vaccination Status</td>
                            <td>Execellent</td>
                        </tr>
                        <tr>
                            <td>Follow-up appointment dates</td>
                            <td>Execellent</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="recom">
                <h4>
                    Certification Statement
                </h4>
                    
                <p style="padding-left:40px;">
                    I, Dr. Emily Johnson, hereby certify that the above-described pet is in good health and vaccinated as per veterinary standards.
                </p>
                
            </div>
        </div>
        <div class="verify">
            <div class="date">
                <span id="certDate"></span><br />
                <br />
                <p>Date</p>
            </div>
            
            <div class="signature">
                <br />
                <br />
                Authorized Signature
            </div>
        </div>
            
    </div>

    <script>document.addEventListener('DOMContentLoaded', function() {
    // Example of dynamically populating certificate details
    document.getElementById('certDate').textContent = new Date().toLocaleDateString();
});</script>
</body>
</html>