<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style1.css"></link>
</head>
<body>
    
<!-- Dette er en test på shopping kurven pt. 2 -->


<?php 
session_start();
include('db.php');
$status="";
if (isset($_POST['ProductID']) && $_POST['ProductID']!=""){
$ProductID = $_POST['ProductID'];
$result = mysqli_query(
$con,
"SELECT * FROM `product` WHERE `ProductID`='$ProductID'"
);
$row = mysqli_fetch_assoc($result);
$ProductName = $row['ProductName'];
$ProductID = $row['ProductID'];
$ProductPrice = $row['ProductPrice'];
$image = $row['image'];

$cartArray = array(
	$ProductID=>array(
	'ProductName'=>$ProductName,
	'ProductID'=>$ProductID,
	'ProductPrice'=>$ProductPrice,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($ProductID,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>


<?php
    if(!empty($_SESSION["shopping_cart"])) {
    $cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
    <a href="cart.php"><img src="cart-icon.png" /> Cart<span>
<?php echo $cart_count; ?></span></a>
</div>
<?php
    }
?>


<?php
$result = mysqli_query($con,"SELECT * FROM `product`");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='product_wrapper'>
    <form method='post' action=''>
    <input type='hidden' name='ProductID' value=".$row['ProductID']." />
    <div class='image'><img src='".$row['image']."' /></div>
    <div class='name'>".$row['ProductName']."</div>
    <div class='price'>$".$row['ProductPrice']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
        }
mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

</body>
</html>