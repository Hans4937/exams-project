<!--  DETTE ER EN TEST -->

<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['CustomerEmail'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a class=Logout href="logout.php">Log ud</a>
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>
