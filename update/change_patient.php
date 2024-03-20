<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Update Patient</title>
</head>
<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
    <div class="container"><button onclick="window.location.href = '../index.php';">Home</button></div>
</nav>
<br><br>
<body>
    <div class="container">
        <h1>Update Patient</h1>
        <form action="update_patient.php" method="POST">
            <!-- can be used to create a dropdown pulling rooms from room table -->
            <label name="PatientID">Patient ID: </label>
            <select name="PatientID">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "HealthCare";
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    
                    $sql = "select * from Patient";

                    $patients = $conn->query($sql);
                    while($patient = mysqli_fetch_array($patients, MYSQLI_ASSOC)):;
                ?>
                <option value="<?php echo $patient["PatientID"]; ?>">
                    <?php echo $patient["PatientID"]; ?>
                </option>
                <?php endwhile; ?>
            </select>
            <br><br>
            
            <label for="LastName">LastName:</label>
            <input type="text" id="LastName" name="LastName"><br><br>

            <label for="Address">Address:</label>
            <input type="text" id="Address" name="Address"><br><br>
            
            <label for="PhoneNumber">Phone Number:</label>
            <input type="text" id="PhoneNumber" name="PhoneNumber"><br><br>

            <label for="insurance">Insurance:</label>
            <input type="checkbox" id="insurance" name="insurance"><br><br>

            <label for="PharmacyID">PharmacyID:</label>
            <select name="PharmacyID">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "HealthCare";
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    
                    $sql = "select * from Pharmacy";

                    $Pharmacys = $conn->query($sql);
                    while($Pharmacy = mysqli_fetch_array($Pharmacys, MYSQLI_ASSOC)):;
                ?>
                <option value="<?php echo $Pharmacy["PharmacyID"]; ?>">
                    <?php echo $Pharmacy["PharmacyID"]; ?>
                </option>
                <?php endwhile; ?>
            </select>
            <br><br>

            <label for="Admitted">Admitted:</label>
            <input type="datetime-local" id="Admitted" name="Admitted"><br><br>

            <label for="Released">Released:</label>
            <input type="datetime-local" id="Released" name="Released"><br><br>
        
            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>


