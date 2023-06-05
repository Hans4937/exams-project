<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database connection</title>
</head>
<body>

<!-- Test af shoppingkurv pt. 1-->

<?php
/*
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
*/
?>


<!-- Test af shoppingkurv-->
 <?php
/* $server = "localhost";
$user = "root";
$pw = "root";
$db = "nordicgreens";
$conn;


// Create connection
$conn = new mysqli($server, $user, $pw, $db);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

echo "Connected successfully";

	function __construct() {
		$this->$conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->$conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->$conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
 */
?>


<?php
    //Set the database variables
    $server = "localhost";
    $user = "root";
    $password = "root";
    $database = "nordicgreens";

    // Connect to the database
    $conn = mysqli_connect($server, $user, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //Get the products from the database
    function runQuery($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
        $resultset = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        return $resultset;
    }

    //Get products from the database
    function numRows($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
?>






</body>
</html>