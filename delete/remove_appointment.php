<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Remove Appointment</title>
</head>
<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
    <div class="container"><button onclick="window.location.href = '../index.php';">Home</button></div>
</nav>
<br><br>
<body>
    <div class="container">
        <h1>Remove Appointment</h1>
        <form action="delete_appointment.php" method="POST">
            <!-- can be used to create a dropdown pulling rooms from room table -->
            <label name="AppointmentID">Appointment ID: </label>
            <select name="AppointmentID">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "HealthCare";
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    
                    $sql = "select * from Appointment";

                    $appointments = $conn->query($sql);
                    while($appointment = mysqli_fetch_array($appointments, MYSQLI_ASSOC)):;
                ?>
                <option value="<?php echo $appointment["AppointmentID"]; ?>">
                    <?php echo $appointment["AppointmentID"]; ?>
                </option>
                <?php endwhile; ?>
            </select>
            <br><br>
        
        
            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>


