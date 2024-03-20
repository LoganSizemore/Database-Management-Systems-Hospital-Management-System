<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Remove Patient</title>
</head>
<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
    <div class="container"><button onclick="window.location.href = '../index.php';">Home</button></div>
</nav>
<br><br>
<body>
    <div class="container">
        <h1>Remove Patient</h1>
        <h5 id="warning">Make sure the patient is not in any rooms, appointments, invoices, or prescriptions before deleting.</h5>
        <form action="delete_patient.php" method="POST">
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
        
        
            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>


