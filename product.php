<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produkter</title>
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
<h1 id="ShopByBrand">Brands</h1>
<div class="GridContainerBrand">
  <button class="GridItem" onclick="redirectToPage('/katrineOgAlfreds.php')">
  </button>
  <button class="GridItem" onclick="redirectToPage('/pedersensUdvalgte.php')">
  </button>
</div>

<!-- Code for ShopByProduct-->
<h1 id="ShopByProduct">Produkter</h1>
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
<h1 id="ShopAllProduct">Alle Produkter</h1>
<!-- Defining the GridContainerAllProduct for ShopAllProducts-->
<div class="GridContainerAllProduct">
  
  <!-- Defining the GridItemAllProduct for ShopAllProducts-->
<div class="GridItemAllProduct">
  <!-- Adding the picture for Anna Tomater-->
  <img src="./img/product/annatomatereco.jpeg" alt="Anna Tomater">
    <!-- description and header of Anna Tomater-->
    <h2>Anna Tomater</h2>
    <p>Description of Anna Tomater.</p>
    <!-- quantity function in Anna Tomater-->
  <input type="number" min="1" placeholder="Quantity">
  <!-- Add to cart for Anna Tomater-->
  <button class="AddToCart">Add to Cart</button>
</div>
  <div class="GridItemAllProduct">
    <img src="./img/product/tomataugust.jpeg" alt="August Tomater">
    <h2>August Tomater</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/satmmeagurkeco.jpeg" alt="Stammeagurk">
    <h2>Stammeagurk</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/rundetomater.jpeg" alt="Runde Tomater">
    <h2>Runde Tomater</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/sanmarzanoeco.jpeg" alt="San Marzano Tomater">
    <h2>San Marzano</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/cherrytomaterstilkeco.jpeg" alt="Cherry Tomater på stilk">
    <h2>Cherry Tomater på stilk</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/cherrytomaterloseeco.jpeg" alt="Cherry Tomater løse">
    <h2>Cherry Tomater løse</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/intensitytomatereco.jpeg" alt="Intensity Tomater">
    <h2>Intensity Tomater</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/fravalgtetomatereco.jpeg" alt="Fravalgte Tomater Øko">
    <h2>Fravalgte Tomater Øko</h2>
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
    <img src="./img/product/idatomater.jpeg" alt="Ida Tomater">
    <h2>Ida Tomater</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/rundetomater.jpeg" alt="Runde Tomater">
    <h2>Runde Tomater</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/blommetomater.jpeg" alt="Blomme Tomater">
    <h2>Blomme Tomater</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/sanmarzanotomater.jpeg" alt="San Marzano Tomater">
    <h2>San Marzano Tomater</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/peberfrugtproduct.jpeg" alt="Peberfrugt">
    <h2>Peberfrugt</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div> 
  <div class="GridItemAllProduct">
    <img src="./img/product/palermosnackpeber.jpeg" alt="Palermo Snack Peber">
    <h2>Palermo Snack Tomater</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/ketchup.jpeg" alt="Ketchup">
    <h2>Ketchup</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/pastasauce.jpeg" alt="Pastasauce">
    <h2>Pastasauce</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/snackmix.jpeg" alt="Snack Mix">
    <h2>Snack Mix</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/fravalgtetomater.jpeg" alt="Fravalgte Tomater">
    <h2>Fravalgte Tomater</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
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
    <img src="./img/product/katrineogalfredsagurkereco.jpeg" alt="Katriene og Alfreds Agurker">
    <h2>Katriene og Alfreds Agurker</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/katrineogalfredsclassictomater.jpeg" alt="Katriene og Alfreds Classic Tomater">
    <h2>Katriene og Alfreds Classic Tomater</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
  <div class="GridItemAllProduct">
    <img src="./img/product/katrineogalfredspeberfrugter.jpeg" alt="Katriene og Alfreds Peberfrugt">
    <h2>Katriene og Alfreds Peberfrugt</h2>
    <p>Description of Anna Tomater.</p>
    <input type="number" min="1" placeholder="Quantity">
    <button class="AddToCart">Add to Cart</button>
  </div>
</div>

<?php include "./footer.php"?>

</body>
</html>

