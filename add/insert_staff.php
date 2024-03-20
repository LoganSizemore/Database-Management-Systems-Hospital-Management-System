<!DOCTYPE html>
<html lang="en">
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><button onclick="window.location.href = '../index.php';">Home</button></div>
    </nav>
</html>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database (replace with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "HealthCare";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Validate and sanitize the input data
    $FirstName = $_REQUEST["FirstName"];
    $LastName = $_REQUEST["LastName"];
    $Address = $_REQUEST["Address"];
    $ssn = $_REQUEST["ssn"];
    $PhoneNumber = $_REQUEST["PhoneNumber"];
    $DepartmentID = $_REQUEST["DepartmentID"];


    // Update the Patient table with the submitted data
    $sql = "INSERT INTO Staff (StaffID, FirstName, LastName, ssn, Address, DepartmentID, PhoneNumber) 
                VALUES (NULL, '$FirstName', '$LastName', '$ssn', '$Address', '$DepartmentID', '$PhoneNumber')";

    // echo $sql;

    if ($conn->query($sql) === TRUE) {
        echo "Staff record added successfully";
    } else {
        echo "Error: " . $sql->error;
    }

    $conn->close();
}
?>
