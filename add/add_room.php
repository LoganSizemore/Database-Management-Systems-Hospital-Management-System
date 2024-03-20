<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Add Room</title>
</head>
<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><button onclick="window.location.href = '../index.php';">Home</button></div>
</nav>
<br><br>
<body>
    
    <div class="container">
        <h1>Add Room</h1>
        <form action="insert_room.php" method="POST">
            <label for="PatientID">PatientID:</label>
            <input type="text" id="PatientID" name="PatientID"><br><br>

            <label for="StaffID">StaffID:</label>
            <input type="text" id="StaffID" name="StaffID"><br><br>

            <label for="AdmissionDate">Admission Date:</label>
            <input type="date" id="AdmissionDate" name="AdmissionDate"><br><br>
        
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>





