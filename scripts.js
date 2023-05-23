  // Hent alle knapperne
  const productButtons = document.querySelectorAll('.GridContainerProduct .GridItem');

  // Hent alle produkter
  const allProducts = document.querySelectorAll('.GridContainerAllProduct .GridItem');

  // Tilføj klikbegivenhedslyttere til hver knap
  productButtons.forEach(button => {
    button.addEventListener('click', () => {
      const productName = button.querySelector('h2').innerText;

      // Skjul alle produkter
      allProducts.forEach(product => {
        product.style.display = 'none';
      });

      // Vis kun de produkter, der matcher det valgte produkt
      allProducts.forEach(product => {
        const productTitle = product.querySelector('h2').innerText;
        if (productTitle.toLowerCase().includes(productName.toLowerCase())) {
          product.style.display = 'block';
        }
      });
    });
  });