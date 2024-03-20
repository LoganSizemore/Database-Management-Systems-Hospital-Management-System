<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Add Patient</title>
</head>
<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><button onclick="window.location.href = '../index.php';">Home</button></div>
</nav>
<br><br>
<body>
    
    <div class="container">
        <h1>Add Appointment</h1>
        <form action="insert_appointment.php" method="POST">
            <label for="PatientID">PatientID:</label>
            <input type="text" id="PatientID" name="PatientID"><br><br>

            <label for="DoctorID">DoctorID:</label>
            <input type="text" id="DoctorID" name="DoctorID"><br><br>

            <label for="Date">Date:</label>
            <input type="date" id="Date" name="Date"><br><br>

            <label for="Time">Time:</label>
            <input type="time" id="Time" name="Time"><br><br>
        
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>





