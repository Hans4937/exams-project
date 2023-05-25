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
      <button class="CartButton">
      <img src="./img/Shoppingcart.png" alt="Shopping Cart">
      </button>
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

<!-- Code for ShopEco-->
<h1 id="ShopAllProduct">Shop Økologi</h1>
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
    <img src="./img/product/cherrytomaterpåstilkeco.jpeg" alt="Cherry Tomater på stilk">
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
    <img src="./img/product/katrineogalfredsagurkereco.jpeg" alt="Katrine og Alfreds Agurker">
    <h2>Katrine og Alfreds Agurker</h2>
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

