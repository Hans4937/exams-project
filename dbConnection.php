<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database connection</title>
</head>
<body>

<?php
//Set up variables
$server = "localhost";
$user = "root";
$pw = "root";
$db = "nordicgreens";

// Create connection
$conn = new mysqli($server, $user, $pw, $db);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>


</body>
</html>