<!-- Log ud -->

<?php 
session_start();

session_unset();
session_destroy();

header("Location: login.php");
?>

<!-- Log ud -->
<?php 
session_start();

if (isset($_SESSION['Password']) && isset($_SESSION['CustomerEmail'])) {

}else{
     header("Location: index.php");
     exit();
}
 ?>