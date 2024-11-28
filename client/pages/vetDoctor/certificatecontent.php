<div class="certificate-container">
    <div class="heading">
        <h3> Certificate generator </h3>
    </div>
    <div class="structure">
        <div id="certificate-form">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return handleFormSubmit(event, 'certificate-form')">
                <table class="certificate-table">
                    <tbody>
                        <tr>
                            <td colspan="2" class="sub-heading">Pet details</td>
                        </tr>
                        <tr>
                            <td style="width:200px;">Pet ID</td>
                            <td style="width:300px;">
                                <input type="text" name="petID" placeholder="Enter your pet id" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Pet Name</td>
                            <td>
                                <input type="text" name="petName" placeholder="autofill">
                            </td>
                        </tr>
                        <!--breed, species, age, gender, Weight-->
                        <tr>
                            <td> Breed </td>
                            <td>
                                <input type="text" name="breed" placeholder="autofill">
                            </td>
                        </tr>
                        <tr>
                            <td> Species </td>
                            <td>
                                <input type="text" name="species" placeholder="autofill">
                            </td>
                        </tr>
                        <tr>
                            <td> Age </td>
                            <td>
                                <input type="text" name="age" placeholder="autofill">
                            </td>
                        </tr>
                        <tr>
                            <td> Gender </td>
                            <td>
                                <input type="text" name="gender" placeholder="autofill">
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="2" class="sub-heading">Owner's details</td>
                        </tr>
                        <!--owner name, address, phone-->
                        <tr>
                            <td> Owner Name </td>
                            <td>
                                <input type="text" name="ownerName" placeholder="autofill">
                            </td>
                        </tr>
                        <tr>
                            <td> Address </td>
                            <td>
                                <input type="text" name="address" placeholder="autofill">
                            </td>
                        </tr>
                        <tr>
                            <td> Phone </td>
                            <td>
                                <input type="text" name="phone" placeholder="autofill">
                            </td>
                        </tr>
                        <tr>
                            <th> <input type="reset"  id="cancelBtn" value="Clear" class="allbutton"> </th>
                            <th> <input type="submit" name="next" id="nextBtn" value="Next" class="allbutton"> </th>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    

        <div id="recomendation-content">
            <div class="recomendarion-form">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onreset="return handleFormSubmit(event, 'recomendation-content')">
                    <table class="recomendarion-table">
                        <tbody>
                            <tr>
                                <td colspan="2" class="sub-heading"> Veterinary Doctor's recommendation </td>
                            </tr>
                            <tr>
                                <td style="width:300px;"> Date of examination </td>
                                <td style="width:300px;">
                                    <input type="date" name="dateOfExamination" required>
                                </td>
                            </tr>
                            <tr>
                                <td> Health rate </td>
                                <td>
                                    <select name="healthRate" required>
                                        <option value="excellent"> Excellent </option>
                                        <option value="good"> Good </option>
                                        <option value="average"> Average </option>
                                        <option value="poor"> Poor </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td> Weight </td>
                                <td>
                                    <input type="text" name="weight" placeholder="autofill">
                                </td>
                            </tr>
                            <tr>
                                <td> Vaccination Status </td>
                                <td>
                                    <select name="vaccination-status" required>
                                        <option value="excellent"> Excellent </option>
                                        <option value="good"> Good </option>
                                        <option value="average"> Average </option>
                                        <option value="poor"> Poor </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td> Follow-up appointment dates </td>
                                <td>
                                    <select name="follow-up" required>
                                        <option value="excellent"> Excellent </option>
                                        <option value="good"> Good </option>
                                        <option value="average"> Average </option>
                                        <option value="poor"> Poor </option>
                                    </select>
                                </td>
                            </tr>
                            <tr> 
                                <td> Recommendation </td>
                                <td>
                                    <textarea name="recommendation" required></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th> <input type="reset" id="cancelRequest" value="Cancel" class="allbutton"> </th>
                                <th> 
                                    <a href="./certificateview.php">
                                        <button type="button" name="generate" id="generate" value="Generate" class="allbutton"> Generate</button>
                                    </a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    <div>
</div>
        
        

<script src="../../assets/jsFIles/vetDocotor/certificate.js"></script> 