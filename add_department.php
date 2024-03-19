<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Add Department</title>
</head>
<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
    <div class="container"><button onclick="window.location.href = 'index.php';">Home</button></div>
</nav>
<br><br>
<body>
    <div class="container">
        <h1>Add Department</h1>
        <form action="update_staff.php" method="POST">
            <label for="HospitalID">HospitalID:</label>
            <input type="number" id="HospitalID" name="HospitalID"><br><br>

            <label for="DepartmentName">DepartmentName:</label>
            <input type="text" id="DepartmentName" name="DepartmentName"><br><br>
            
        
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
