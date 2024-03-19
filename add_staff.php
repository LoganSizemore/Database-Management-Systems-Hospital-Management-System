<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Add Staff</title>
    </head>
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><button onclick="window.location.href = 'index.php';">Home</button></div>
    </nav>
    <br><br>
    <body>
        <div class="container">
            <h1>Add Staff</h1>
            <form action="insert_staff.php" method="POST">
                <label for="FirstName">FirstName:</label>
                <input type="text" id="FirstName" name="FirstName"><br><br>

                <label for="LastName">LastName:</label>
                <input type="text" id="LastName" name="LastName"><br><br>
                
                <label for="ssn">SSN:</label>
                <input type="text" id="ssn" name="ssn"><br><br>

                <label for="Address">Address:</label>
                <input type="text" id="Address" name="Address"><br><br>

                <label for="PhoneNumber">Phone Number:</label>
                <input type="text" id="PhoneNumber" name="PhoneNumber"><br><br>

                <label for="DepartmentID">DepartmentID:</label>
                <input type="text" id="DepartmentID" name="DepartmentID"><br><br>
            
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>

