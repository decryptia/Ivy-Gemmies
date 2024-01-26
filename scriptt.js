'use strict';

document.addEventListener("DOMContentLoaded", function () {
  let totalPrice = 0;
  let totalItems = 0;

  function addToCart(productName, imageSrc, price) {
    // Create a new cart item element
    const cartItem = document.createElement("li");
    const removeBtn = document.createElement("button");
    removeBtn.innerText = "Remove Product";
    removeBtn.classList.add("remove-btn");
    removeBtn.addEventListener("click", function () {
      removeFromCart(cartItem, price);
    });

    cartItem.innerHTML = `
      <img src="${imageSrc}" alt="${productName}">
      <p>${productName} - &pound;${price.toFixed(2)}</p>
      <button class="buy-now-btn" onclick="window.location.href='buynow.html'">Buy Now</button>
    `;
    cartItem.appendChild(removeBtn);

    // Append the item to the cart
    const cartItemsContainer = document.getElementById("cart-items");
    if (cartItemsContainer) {
      cartItemsContainer.appendChild(cartItem);
      // Update the total price and total items
      totalPrice += price;
      totalItems += 1;
      updateCartDisplay();
    } else {
      console.error("Cart items container not found");
    }
  }

  function removeFromCart(cartItem, price) {
    // Remove the item from the cart
    const cartItemsContainer = document.getElementById("cart-items");
    if (cartItemsContainer) {
      cartItemsContainer.removeChild(cartItem);
      // Update the total price and total items
      totalPrice -= price;
      totalItems -= 1;
      updateCartDisplay();

      // If all items are removed, hide the cart section
      if (totalItems === 0) {
        document.getElementById("cart-section").style.right = "-300px";
      }
    } else {
      console.error("Cart items container not found");
    }
  }

  function updateCartDisplay() {
    // Update the total price and total items display
    const totalPriceElement = document.getElementById("total-price");
    const cartBadgeElement = document.getElementById("cart-badge");

    if (totalPriceElement && cartBadgeElement) {
      totalPriceElement.innerText = `Total: &pound;${totalPrice.toFixed(2)}`;
      cartBadgeElement.innerText = totalItems;

      // Show the cart section with a slide-in effect
      document.getElementById("cart-section").style.right = "0";
    } else {
      console.error("Total price or cart badge element not found");
    }
  }

  // Other functions (openCart, closeCart, buyNow, openWishlist) go here...

  const addToCartButtons = document.querySelectorAll(".cart-btn");
  addToCartButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const productCard = button.closest(".product-card");
      const productName = productCard.querySelector(".card-title a").innerText;
      const imageSrc = productCard.querySelector(".card-banner img").src;
      const price = parseFloat(productCard.querySelector(".card-price data").getAttribute("value"));
      addToCart(productName, imageSrc, price);
    });
  });

  // Other event listeners go here...
});
