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
<body>

  <!--
  <style>
    .product {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .product-image {
      width: 150px;
      height: 150px;
      margin-right: 20px;
    }
    
    .product-details {
      flex-grow: 1;
    }
    
    .product-title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    
    .product-description {
      font-size: 14px;
      margin-bottom: 10px;
    }
    
    .product-price {
      font-size: 16px;
      font-weight: bold;
    }
  </style>
</head>
<body>
-->
<h1>Shop by product</h1>

<div class="row1">
<div class="ColumnProduct" style="background-color:#aaa;">
    <h2> Agurk </h2>
    <p>Some text..</p>
  </div>
  <div class="ColumnProduct" style="background-color:#bbb;">
    <h2>Salat </h2>
    <p>Some text..</p>
  </div>
  <div class="ColumnProduct" style="background-color:#ccc;">
    <h2> Tomat </h2>
    <p>Some text..</p>
  </div>
  <div class="ColumnProduct" style="background-color:#ddd;">
    <h2> Peberfrugt </h2>
    <p>Some text..</p>
  </div>
  <div class="ColumnProduct" style="background-color:#ddd;">
    <h2> Konserves </h2>
    <p>Some text..</p>
</div>

<h1>Shop by Brand</h1>

<div class="row2">
<div class="ColumnBrands" style="background-color:#aaa;">
    <h2> Katrine & Alfreds </h2>
    <p>Some text..</p>
  </div>
  <div class="ColumnBrands" style="background-color:#bbb;">
    <h2>Pedersens udvalgte </h2>
    <p>Some text..</p>
  </div>
</div>

<!--
<h1>Shop by</h1>
  
  <div id="products-container"></div>
  
  <script>
    // Sample product data (you can replace it with your own data)
    var products = [
      {
        title: "Product 1",
        description: "This is the description of product 1.",
        price: 9.99,
        imageUrl: "https://example.com/product1.jpg"
      },
      {
        title: "Product 2",
        description: "This is the description of product 2.",
        price: 19.99,
        imageUrl: "https://example.com/product2.jpg"
      },
      // Add more product objects as needed
    ];
    
    // Function to create a product card element
    function createProductCard(product) {
      var productCard = document.createElement("div");
      productCard.className = "product";
      
      var productImage = document.createElement("img");
      productImage.className = "product-image";
      productImage.src = product.imageUrl;
      productCard.appendChild(productImage);
      
      var productDetails = document.createElement("div");
      productDetails.className = "product-details";
      
      var productTitle = document.createElement("div");
      productTitle.className = "product-title";
      productTitle.textContent = product.title;
      productDetails.appendChild(productTitle);
      
      var productDescription = document.createElement("div");
      productDescription.className = "product-description";
      productDescription.textContent = product.description;
      productDetails.appendChild(productDescription);
      
      var productPrice = document.createElement("div");
      productPrice.className = "product-price";
      productPrice.textContent = "$" + product.price.toFixed(2);
      productDetails.appendChild(productPrice);
      
      productCard.appendChild(productDetails);
      
      return productCard;
    }
    
    // Function to display products on the page
    function displayProducts() {
      var productsContainer = document.getElementById("products-container");
      
      // Clear the container
      productsContainer.innerHTML = "";
      
      // Create and append product cards
      for (var i = 0; i < products.length; i++) {
        var productCard = createProductCard(products[i]);
        productsContainer.appendChild(productCard);
      }
    }
    
    // Display the products initially
    displayProducts();
  </script>
-->
    
</body>
</html>