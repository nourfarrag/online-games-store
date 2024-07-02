
function updateTotalPrice() {
   
    var cartItemsContainer = document.getElementById('cart-items');
  
    
    var priceElements = cartItemsContainer.getElementsByClassName('price');
  
  
    var totalPrice = 0;
  
    
    for (var i = 0; i < priceElements.length; i++) {
      
      var priceText = priceElements[i].innerText.replace('EGP', '').trim();
      var priceValue = parseFloat(priceText);
  
      
      totalPrice += priceValue;
    }
  
    
    var totalItemsElement = document.getElementById('total-items');
    var totalPriceElement = document.getElementById('total-price');
  
    totalItemsElement.innerText = priceElements.length;
    totalPriceElement.innerText = totalPrice.toFixed(2);
  }
  
  
  
  
  function goBack() {
    window.history.back();
  }
  
  
  document.getElementById('cart-items').addEventListener('click', function (event) {
    if (event.target.classList.contains('remove-item')) {
      event.target.parentElement.remove();
      // Update the total price after removing an item
      updateTotalPrice();
    }
  });
  