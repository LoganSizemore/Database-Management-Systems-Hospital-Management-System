<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Add Prescription</title>
</head>
<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
    <div class="container"><button onclick="window.location.href = 'index.php';">Home</button></div>
</nav>
<br><br>
<body>
    <div class="container">
        <h1>Add Prescription</h1>
        <form action="insert_prescription.php" method="POST">
            <label for="HospitalID">Medication Name:</label>
            <input type="text" id="MedicationName" name="MedicationName"><br><br>

            <label for="PrescriptionDate">Prescription Date:</label>
            <input type="datetime-local" id="PrescriptionDate" name="PrescriptionDate"><br><br>

            <label for="PatientID">PatientID:</label>
            <input type="text" id="PatientID" name="PatientID"><br><br>

            <label for="PrescriptionCost">Prescription Cost:</label>
            <input type="text" name="PrescriptionCost" id="PrescriptionCost" data-type="currency"><br><br>
            
        
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
