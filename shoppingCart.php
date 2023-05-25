<HTML>
<HEAD>
<TITLE>Shopping Cart</TITLE>
<link rel="stylesheet" href="./styleTest.css"></link>
</HEAD>
<BODY>

<?php
session_start();
include ("dbConnection.php");

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM product WHERE ProductID='" . $_GET["ProductID"] . "'");
    $itemArray = array($productByCode[0]["ProductID"]=>array('ProductName'=>$productByCode[0]["ProductName"], 'ProductID'=>$productByCode[0]["ProductID"], 'quantity'=>$_POST["quantity"], 'ProductPrice'=>$productByCode[0]["ProductPrice"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["ProductID"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["ProductID"] == $k) {
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
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["ProductName"]; ?></td>
				<td><?php echo $item["ProductID"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["ProductID"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
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
        $productID = $product_array[$key]["ProductID"];
        $name = $product_array[$key]["ProductName"];
        $price = $product_array[$key]["ProductPrice"];
        // ... other fields as needed

        ?>
<div class="product-item">
    <form method="post" action="index.php?action=add&code=<?php echo $productID; ?>">
        <div class="product-tile-footer">
            <div class="product-title"><?php echo isset($name) ? $name : 'N/A'; ?></div>
            <div class="product-price"><?php echo isset($price) ? "$" . $price : 'N/A'; ?></div>
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


</BODY>
</HTML>