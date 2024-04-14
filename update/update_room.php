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

    $RoomID = $_REQUEST["RoomID"];
    $PatientID = $_REQUEST["PatientID"];
    $StaffID = $_REQUEST["StaffID"];
    $AdmissionDate = $_REQUEST["AdmissionDate"];

    $sql = "UPDATE Room Set RoomId = '$RoomID', PatientID = '$PatientID', StaffID = '$StaffID', AdmissionDate = '$AdmissionDate' where RoomId = '$RoomID'";
    $result = $conn->query($sql);

    if ($conn->query($sql) === TRUE) {
        echo "Room record updated successfully";
    } else {
        echo "Error: " . $sql->error;
    }
    $conn->close();
    }
?>