<?php 

session_start(); 
include "dbConnection.php";

if (isset($_POST['CustomerEmail']) && isset($_POST['CusPassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['CustomerEmail']);
	$pass = validate($_POST['CusPassword']);

	if (empty($uname)) {
		header("Location: login.php?error= Email er påkrævet");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error= Kodeord er påkrævet");
	    exit();
	}else{
		$sql = "SELECT * FROM customer WHERE CustomerEmail='$uname' AND CusPassword='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['CustomerEmail'] === $uname && $row['CusPassword'] === $pass) {
/*             	$_SESSION['CustomerEmail'] = $row['CustomerEmail'];
            	$_SESSION['CustomerID'] = $row['CustomerID']; */
            	header("Location: product.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: loginErrormessage.php");
	exit();
}

?>