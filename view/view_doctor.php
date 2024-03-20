<!DOCTYPE html>
<html lang="en">
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><button onclick="window.location.href = '../index.php';">Home</button></div>
    </nav>
</html>

<?php
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

$sql = "SELECT DoctorID, FirstName, LastName, ssn, DepartmentID, PhoneNumber FROM doctor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["DoctorID"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. " - ssn: " . $row["ssn"]. " - DepartmentID: ". $row["DepartmentID"]. " - Phone Number: ". $row["PhoneNumber"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
