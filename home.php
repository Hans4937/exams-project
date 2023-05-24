<!--  DETTE ER EN TEST -->

<?php 
session_start();

if (isset($_SESSION['CustomerID']) && isset($_SESSION['CustomerEmail'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['CustomerEmail']; ?></h1>
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>