<!DOCTYPE html>
<html lang="en">
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><button onclick="window.location.href = '../index.php';">Home</button></div>
    </nav>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "HealthCare";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $PatientID = $_REQUEST["PatientID"];
    $LastName = $_REQUEST["LastName"];
    $Address = $_REQUEST["Address"];
    $PhoneNumber = $_REQUEST["PhoneNumber"];
    $insurance = $_REQUEST["insurance"];
    $PharmacyID = $_REQUEST["PharmacyID"];
    $Admitted = $_REQUEST["Admitted"];
    $Released = $_REQUEST["Released"];

    $sql = "UPDATE Patient Set PatientID = '$PatientID', Address = '$Address', PhoneNumber = '$PhoneNumber', insurance = '$insurance', PharmacyID = '$PharmacyID', Admitted = '$Admitted', Released = '$Released' where PatientID = '$PatientID'";
    $result = $conn->query($sql);

    if ($conn->query($sql) === TRUE) {
        echo "Patient record updated successfully";
    } else {
        echo "Error: " . $sql->error;
    }
    $conn->close();
    }
?>