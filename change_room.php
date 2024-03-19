<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Update Room</title>
</head>
<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
    <div class="container"><button onclick="window.location.href = 'index.php';">Home</button></div>
</nav>
<br><br>
<body>
    <div class="container">
        <h1>Update Room</h1>
        <form action="update_room.php" method="POST">
            <!-- can be used to create a dropdown pulling rooms from room table -->
            <label name="RoomID">RoomID: </label>
            <select name="RoomID">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "HealthCare";
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    
                    $sql = "select * from Room";

                    $rooms = $conn->query($sql);
                    while($room = mysqli_fetch_array($rooms, MYSQLI_ASSOC)):;
                ?>
                <option value="<?php echo $room["RoomID"]; ?>">
                    <?php echo $room["RoomID"]; ?>
                </option>
                <?php endwhile; ?>
            </select>
            <br><br>
            

            <label for="PatientID">PatientID:</label>
            <input type="text" id="PatientID" name="PatientID"><br><br>
            
            <label for="StaffID">StaffID:</label>
            <input type="text" id="StaffID" name="StaffID"><br><br>

            <label for="AdmissionDate">Admission Date:</label>
            <input type="datetime-local" id="AdmissionDate" name="AdmissionDate"><br><br>
        
            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>


