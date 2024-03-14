// Event delegation for removing items from cart
$(document).on('click', 'a.remove', function(event) {
  event.preventDefault();
  $(this).closest('li.items').hide(400, function() {
    // After hiding the item, recalculate the total
    calculateTotal();
  });
});

// Function to calculate total values
function calculateTotal() {
  var subtotal = 0;

  // Loop through each visible item and calculate subtotal
  $('li.items:visible').each(function() {
    var quantityInput = $(this).find('.qty');
    var quantity = parseInt(quantityInput.val());
    if (!isNaN(quantity)) {
      var priceText = $(this).find('.prodTotal p').text().replace('$', '');
      var price = parseFloat(priceText);
      if (!isNaN(price)) {
        subtotal += quantity * price;
      } else {
        console.error('Invalid price:', priceText);
      }
    } else {
      console.error('Invalid quantity:', quantityInput.val());
    }
  });

  // Update subtotal
  $('.subtotal .value').text('$' + subtotal.toFixed(2));

  // Calculate shipping, tax, and total
  var shipping = 5.00; // Example shipping cost
  var taxRate = 0.10; // Example tax rate (10%)
  var tax = subtotal * taxRate; // Calculate tax
  var total = subtotal + shipping + tax; // Calculate total

  // Update shipping, tax, and total values in the HTML
  $('.shipping .value').text('$' + shipping.toFixed(2));
  $('.tax .value').text('$' + tax.toFixed(2));
  $('.total .value').text('$' + total.toFixed(2));
}


document.addEventListener('DOMContentLoaded', function() {
  const cartIcon = document.getElementById('cart-btn');
  const cartContainer = document.querySelector('.cart-container');
  const closeCartBtn = document.getElementById('close-cart-btn'); // Update to use getElementById

  cartIcon.addEventListener('click', function() {
      cartContainer.classList.toggle('active');
  });

  closeCartBtn.addEventListener('click', function() {
      cartContainer.classList.remove('active');
  });
});
