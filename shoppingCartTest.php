<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shopping Cart</title>
	<link rel="stylesheet" href="./styleTest.css"></link>
</head>
<body>

<!-- IKKE FUNCTIONEL -->
<?php
session_start();
include ("dbConnection.php");

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByID = $db_handle->runQuery("SELECT * FROM product WHERE ProductID='" . $_GET["ProductID"] . "'");
    $itemArray = array($productByID[0]["ProductID"]=>array('ProductName'=>$productByID[0]["ProductName"], 'ProductID'=>$productByID[0]["ProductID"], 'quantity'=>$_POST["quantity"], 'ProductPrice'=>$productByID[0]["ProductPrice"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByID[0]["ProductID"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByID[0]["ProductID"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>


<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a>

<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	

<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<td>Name</td>
<td>Code</td>
<td>Quantity</td>
<td>Unit Price</td>
<td>Price</td>
<td>Remove</td>
</tr>
</tbody>


<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["ProductPrice"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["ProductName"]; ?></td>
				<td><?php echo $item["ProductID"]; ?></td>
				<td><?php echo $item["quantity"]; ?></td>
				<td><?php echo "DKK ".$item["ProductPrice"]; ?></td>
				<td><?php echo "DKK ". number_format($item_price,2); ?></td>
				<td><a href="index.php?action=remove&code=<?php echo $item["ProductID"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["ProductPrice"]*$item["quantity"]);
		}
		?>

<tr>
<td>Total:</td>
<td><?php echo $total_quantity; ?></td>
<td><strong><?php echo "DKK ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php

} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>


<?php
// Usage example
$query = "SELECT * FROM product ORDER BY ProductID ASC";
$product_array = runQuery($query);

if (!empty($product_array)) {
    foreach ($product_array as $key => $value) {
        $ProductID = $product_array[$key]["ProductID"];
        $ProductName = $product_array[$key]["ProductName"];
        $ProductPrice = $product_array[$key]["ProductPrice"];
        // ... other fields as needed

        ?>
<div class="product-item">
    <form method="post" action="index.php?action=add&code=<?php echo $productID; ?>">
        <div class="product-tile-footer">
            <div class="product-title"><?php echo isset($ProductName) ? $ProductName : 'N/A'; ?></div>
            <div class="product-price"><?php echo isset($ProductPrice) ? "DKK " . $ProductPrice : 'N/A'; ?></div>
            <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
        </div>
    </form>
</div>


        <?php
    }
} else {
    // No products found
}

// Close the database connection
mysqli_close($conn);
?>

	
</body>
</html>