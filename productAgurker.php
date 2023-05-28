<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <!-- linking script and stylesheet -->
  <script src="./scripts.js"></script>
  <link rel="stylesheet" href="./styles.css"></link>
</head>
<body class="ProductPage">

<!-- Header -->
<div class="Header">
  <!-- Div inside header -->
  <div class="InnerHeader">
    <!-- Logo in InnerHeader --> 
    <div class="LogoContainer"> 
      <a href="index.php"><img class="Logo" src="./img/Logo.png" alt="sa"></a>
      <a href="index.php"><h1>Nordic Greens</h1></a>
    </div>

    <!-- Navigation inside InnerHeader -->
    <ul class="Navigation">
      <li class="SearchBar">
        <form>
          <input type="text" placeholder="Søg....">
          <button type="submit">Søg</button>
        </form>
      </li>
      <li class="LogOut"><a href="logout.php">Log Ud</a></li>
      <li class="KontaktOs"><a href="kontaktOs.php">Kontakt Os</a></li>
      <li class="ShoppingCart"><a href="ShoppingCart.php"><img src="./img/Shoppingcart.png" alt="Kurv"></a></li>
    </ul>
  </div>
</div>

<!-- Code for ShopByBrand-->
<h1 id="ShopByBrand">Shop by Brand</h1>
<div class="GridContainerBrand">
  <button class="GridItem" onclick="redirectToPage('/katrineOgAlfreds.php')">
  </button>
  <button class="GridItem" onclick="redirectToPage('/pedersensUdvalgte.php')">
  </button>
</div>

<!-- Code for ShopByProduct-->
<h1 id="ShopByProduct">Shop by Product</h1>
<div class="GridContainerProduct">
  <button class="GridItem" onclick="redirectToPage('/productAgurker.php')">
  <h2>Agurker</h2>
  </button>
  <button class="GridItem" onclick="redirectToPage('/productTomater.php')">
  <h2>Tomater</h2>
  </button>
  <button class="GridItem" onclick="redirectToPage('/productSalat.php')">
  <h2>Salat</h2>
  </button>
  <button class="GridItem" onclick="redirectToPage('/productPeberfrugt.php')">
  <h2>Peberfrugt</h2>
  </button>
  <button class="GridItem" onclick="redirectToPage('/productKonserves.php')">
  <h2>Konserves</h2>
  </button>
  <button class="GridItem" onclick="redirectToPage('/productEcology.php')">
  <h2>Økologi</h2>
  </button>
  <button class="GridItem" onclick="redirectToPage('/product.php')">
  <h2>Alle produkter</h2>
  </button>
</div>

<!-- Code for ShopAllProducts-->
<h1 id="ShopAllProduct">Shop Agurker</h1>
<!-- Defining the GridContainerAllProduct for ShopAllProducts-->
<div class="GridContainerAllProduct">
  <!-- Defining the GridItemAllProduct for ShopAllProducts-->
<div class="GridItemAllProduct">
  <!-- Adding the picture for Stammeagurk -->
  <img src="./img/product/satmmeagurkeco.jpeg" alt="Stammeagurk">    <!-- description and header of Anna Tomater-->
    <h2>Stammeagurk</h2>
    <p>Description of Anna Tomater.</p>
    <!-- quantity function in stammeagurk-->
  <input type="number" min="1" placeholder="Quantity">
  <!-- Add to cart for Stammeagurk-->
  <button class="AddToCart">Add to Cart</button>
</div>
<div class="GridItemAllProduct">
    <img src="./img/product/fravalgteagurker.jpeg" alt="Fravalgte Agurker">
    <h2>Fravalgte Agurker</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
<div class="GridItemAllProduct">
    <img src="./img/product/fravalgteagurkereco.jpeg" alt="Fravalgte Agurker Øko">
    <h2>Fravalgte Agurker Øko</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
</div>
  <div class="GridItemAllProduct">
    <img src="./img/product/katrineogalfredsagurkereco.jpeg" alt="Katriene og Alfreds Agurker">
    <h2>Katriene og Alfreds Agurker</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
</div>

<?php include "./footer.php"?>

</body>
</html>