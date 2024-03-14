<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the input data
    $FirstName = htmlspecialchars($_POST["FirstName"]);
    $LastName = htmlspecialchars($_POST["LastName"]);
    $age = intval($_POST["age"]);
    $Address = htmlspecialchars($_POST["Address"]);
    $ssn = htmlspecialchars($_POST["ssn"]);
    $PhoneNumber = htmlspecialchars($_POST["PhoneNumber"]);
    $insurance = isset($_POST["insurance"]); 

   

    // Validate the input data further if needed

    // Connect to the database (replace with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "HealthCare";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update the Patient table with the submitted data
    $sql = "INSERT INTO Patient (FirstName, LastName, age, address, ssn, PhoneNumber, insurance) VALUES ('$FirstName', '$LastName', '$age', '$Address', '$ssn', '$PhoneNumber', '$insurance')";

    if ($conn->query($sql) === TRUE) {
        echo "Patient record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>