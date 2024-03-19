<!DOCTYPE html>
<html lang="en">
    
<head>
    <!-- https://www.w3schools.com/php -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Healthcare Management System</h1> <!-- Title line -->
        <div class="row">
            <div class="col text-center">Add</div> 
            <div class="col text-center">Update</div>
            <div class="col text-center">View</div> 
            <div class="col text-center">Delete</div> 
        </div>

        <hr>
        
        <div class="row">
            <div class="col text-center">
                <button class="button" onclick="window.location.href = 'add_patient.php';">Add Patient</button><br>
            </div> 
            <div class="col text-center"> 
                <button class="button" onclick="window.location.href = 'change_patient.php';">Update Patient</button><br>
            </div>
            <div class="col text-center">
                <button class="button" onclick="window.location.href = 'view_patient.php';">View Patients</button><br>
            </div> 
            <div class="col text-center">
                <button class="button" onclick="window.location.href = 'remove_patient.php';">Remove Patient</button><br>
            </div> 
        </div>

        <div class="row">
            <div class="col text-center">
                <button class="button" onclick="window.location.href = 'add_staff.php';">Add Staff</button><br>
            </div> 
            <div class="col text-center"> 
                <button class="button" onclick="window.location.href = 'change_room.php';">Update Room</button><br>
            </div>
            <div class="col text-center">
                <button class="button" onclick="window.location.href = 'view_room.php';">View Rooms</button><br>
            </div> 
            <div class="col text-center">
                <button class="button" onclick="window.location.href = 'remove_room.php';">Remove room</button><br>
            </div> 
        </div>

        <div class="row">
            <div class="col text-center">
                <button class="button" onclick="window.location.href = 'add_appointment.php';">Add Appointment</button><br>
            </div> 
            <div class="col text-center"> 
                <!-- <button class="button" onclick="window.location.href = 'update_patient.php';">Update Staff</button><br> -->
            </div>
            <div class="col text-center">
                <button class="button" onclick="window.location.href = 'view_dotcor.php';">View Doctors</button><br>
            </div> 
            <div class="col text-center">
                <button class="button" onclick="window.location.href = 'remove_patient.php';">Remove Patient</button><br>
            </div> 
        </div>

        <div class="row">
            <div class="col text-center">
                <button class="button" onclick="window.location.href = 'add_prescription.php';">Add Prescription</button><br>
            </div> 
            <div class="col text-center"> 
                <!-- <button class="button" onclick="window.location.href = 'update_patient.php';">Update Staff</button><br> -->
            </div>
            <div class="col text-center">
                <button class="button" onclick="window.location.href = 'view_pharmacies.php';">View Pharmacies</button><br>
            </div> 
            <div class="col text-center">
                <button class="button" onclick="window.location.href = 'remove_prescription.php';">Remove Prescription</button><br>
            </div> 
        </div>

    </div>
    <div id="content"></div>
    <script src="script.js"></script>
</body>

<hr>

<footer>
    <div class="sitemap">
        <div class="row">
            <div class="col section ">
                <h5 class="text-center">Add</h5>
                <ul class="">
                    <li><a href = "add_patient.php">Add patient</a></li>
                    <li><a href = "add_staff.php">Add staff</a></li>
                    <li><a href = "add_appointment.php">Add Appointment</a></li>
                    <li><a href = "add_prescription.php">Add prescription</a></li>
                </ul>
            </div>
            <div class="col section">
                <h5 class="text-center">Update</h5>
                <ul>
                    <li><a href="change_patient.php">Update Patient</a></li>
                    <li><a href="change_room.php">Update Room</a></li>
                </ul>
            </div>
            <div class="col section">
                <h5 class="text-center">View</h5>
                <ul>
                    <li><a href="view_patient.php">View Patients</a></li>
                    <li><a href="view_room.php">View Rooms</a></li>
                    <li><a href="view_doctor.php">View Doctors</a></li>
                    <li><a href="view_pharmacies.php">View Pharmacies</a></li>
                </ul>
            </div>
            <div class="col section">
                <h5 class="text-center">Delete</h5>
                <ul>
                    <li><a href="remove_patient.php">Remove Patient</a></li>
                    <li><a href="remove_room.php">Remove Room</a></li>
                    <li><a href="remove_appointment.php">Remove Appointment</a></li>
                    <li><a href="remove_prescription.php">Remove Prescription</a></li>
                </ul>
            </div>
        </div>
        
    </div>
</footer>
</html>