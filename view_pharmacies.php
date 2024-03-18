<!DOCTYPE html>
<html lang="en">
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><button onclick="window.location.href = 'index.php';">Home</button></div>
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

$sql = "SELECT PharmacyID, PharmacyName, PharmacyAddress, PharmacyPhoneNumber FROM pharmacy";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["PharmacyID"]. " - Pharmacy Name: " . $row["PharmacyName"]. " - Pharmacy Address: " . $row["PharmacyAddress"]. " - Pharmacy Phone Number: ". $row["PharmacyPhoneNumber"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
