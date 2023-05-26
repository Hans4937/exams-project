<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indkøbskurv</title>
</head>
<body>


<!-- Header -->
<div class="Headerb2b">
  <!-- Div inside header -->
  <div class="InnerHeaderb2b">
    <!-- Logo in InnerHeader --> 
    <div class="LogoContainerb2b">
      <a href="index.php"><img class="Logo" src="./img/Logo.png" alt="sa"> <h1>Nordic <span>Greens</span></h1></a>
    </div>
    <!-- Search bar -->
    <div class="SearchBar">
      <input type="text" placeholder="Search..." />
      <button type="submit">Search</button>
    </div>
    <!-- Navigation inside InnerHeader -->
      <ul class="Navigationb2b">
      <a href="produkter.php"><li>Produkter</li></a>
      <a href="brands.php"><li>Brands</li></a>  
      <a href="logout.php"><li>Log ud</li></a>
      <a href="kontaktOs.php"><li><button class="KontaktOsb2b">Kontakt  os</button></li></a>
      <button class="CartButton" onclick="redirectToPage('/shoppingCart.php')">
      <img src="./img/Shoppingcart.png" alt="Shopping Cart"> 
      </button>
    </ul>
  </div>
</div>

<h1>Indkøbskurv</h1>
<p>Indkøbskurven er i øjeblikket ude af drift. Vi bekalger ulejligheden.</p>

<?php include "./footer.php"?>


</body>
</html>