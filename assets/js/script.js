'use strict';

/**
 * navbar toggle
 */

const overlay = document.querySelector("[data-overlay]");
const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navbar = document.querySelector("[data-navbar]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");

const navElemArr = [overlay, navOpenBtn, navCloseBtn];

for (let i = 0; i < navElemArr.length; i++) {
  navElemArr[i].addEventListener("click", function () {
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
  });
}

document.getElementById('instagram-link').addEventListener('click', function() {
  window.open('https://www.instagram.com/ivy.gemmies/', '_blank');
});

/**
 * add active class on header when scrolled 200px from top
 */

const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function () {
  window.scrollY >= 200 ? header.classList.add("active")
    : header.classList.remove("active");
})
//  <script>
document.addEventListener("DOMContentLoaded", function () {
  let totalPrice = 0;
  let totalItems = 0;

  function addToCart(productName, id, imageSrc, price) {
    // Create a new cart item element
    const cartItem = document.createElement("li");
    const removeBtn = document.createElement("button");
    removeBtn.innerText = "Remove Product";
    removeBtn.classList.add("remove-btn");
    removeBtn.addEventListener("click", function () {
      removeFromCart(cartItem, price);
    });

    cartItem.innerHTML = `
      <img src="${imageSrc}" alt="${productName}" id="${id}">
      <p>${productName} - &pound;${price.toFixed(2)}</p>
      <button class="buy-now-btn">Buy Now</button>
    `;
    cartItem.appendChild(removeBtn);

    // Append the item to the cart
    document.getElementById("cart-items").appendChild(cartItem);

    // Update the total price and total items
    totalPrice += price;
    totalItems += 1;
    document.getElementById("total-price").innerText = `Total: &pound;${totalPrice.toFixed(2)}`;
    document.getElementById("cart-badge").innerText = totalItems;

    // Show the cart section with a slide-in effect
    document.getElementById("cart-section").style.right = "0";

    // Add event listener for the "Buy Now" button in the cart
    const buyNowButtons = document.querySelectorAll(".buy-now-btn");
    buyNowButtons.forEach((button) => {
      button.addEventListener("click", function () {
        buyNow(productName, id, imageSrc, price);
      });
    });
  }

  function removeFromCart(cartItem, price) {
    // Remove the item from the cart
    document.getElementById("cart-items").removeChild(cartItem);

    // Update the total price and total items
    totalPrice -= price;
    totalItems -= 1;
    document.getElementById("total-price").innerText = `Total: &pound;${totalPrice.toFixed(2)}`;
    document.getElementById("cart-badge").innerText = totalItems;

    // If all items are removed, hide the cart section
    if (totalItems === 0) {
      document.getElementById("cart-section").style.right = "-300px";
    }
  }

  function closeCart() {
    // Hide the cart section with a slide-out effect
    document.getElementById("cart-section").style.right = "-300px";
  }

  // Function to open the cart
  function openCart() {
    // Show the cart section with a slide-in effect
    document.getElementById("cart-section").style.right = "0";
  }

  // Function to handle the "Buy Now" button
  function buyNow(productName,id, imageSrc, price) {
    // Construct the URL with query parameters
    const url = `buynow.php?productName=${encodeURIComponent(productName)}&productid=${id}&imageSrc=${encodeURIComponent(imageSrc)}&price=${encodeURIComponent(price)}`;
  
    // Redirect to buynow.php with the product details as query parameters
    window.location.href = url;
  }

  document.getElementById("close-btn").addEventListener("click", closeCart);
  document.querySelector(".header-action-btn ion-icon[name='cart-outline']").closest('.header-action-btn').addEventListener("click", openCart);
  

function openWishlist() {
  // Show the wishlist section with a slide-in effect
  document.getElementById("wishlist-bar").style.right = "0";
}

const addToCartButtons = document.querySelectorAll(".cart-btn");
addToCartButtons.forEach((button) => {
  button.addEventListener("click", function () {
    const productCard = button.closest(".product-card");
    const productName = productCard.querySelector(".card-title a").innerText;
    const id= productCard.querySelector(".card-banner img").getAttribute("id");
    const imageSrc = productCard.querySelector(".card-banner img").src;
    const price = parseFloat(productCard.querySelector(".card-price data").getAttribute("value"));
    addToCart(productName, id, imageSrc, price);
  });
});

document.getElementById("close-btn").addEventListener("click", closeCart);
document.querySelector(".header-action-btn ion-icon[name='cart-outline']").closest('.header-action-btn').addEventListener("click", openCart);
document.querySelector(".header-action-btn ion-icon[name='heart-outline']").closest('.header-action-btn').addEventListener("click", openWishlist);

  document.addEventListener('addToCart', function (event) {
    const productName = event.detail.productName;
    const id=event.detail.id;
    const imageSrc = event.detail.imageSrc;
    const price = event.detail.price;
    addToCart(productName,id, imageSrc, price);
  });
});



document.addEventListener('DOMContentLoaded', function () {
  const wishlistBar = document.getElementById('wishlist-bar');
  const closeWishlistBtn = document.getElementById('close-wishlist');

  const addToWishlistButtons = document.querySelectorAll('.card-action-btn[aria-label="Add to Whishlist"]');
  addToWishlistButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      // Get product details from the clicked card
      const card = button.closest('.product-card');
      const productName = card.querySelector('.card-title a').textContent;
      const productImage = card.querySelector('.card-banner img').getAttribute('src'); // Use getAttribute to get the absolute URL
      const productPriceString = card.querySelector('.card-price data:last-child').textContent;

      // Extract the numerical value from the formatted price string
      const productPrice = parseFloat(productPriceString.replace(/[^\d.]/g, ''));

      // Create a new wishlist item
      const wishlistItem = document.createElement('div');
      wishlistItem.classList.add('wishlist-item');
      wishlistItem.innerHTML = `
        <img src="${productImage}" alt="${productName}" width="50" height="50">
        <div>
          <p>${productName}</p>
          <p>Price: ${productPriceString}</p>
        </div>
        <button class="add-to-cart-btn">Add to Cart</button>
        <button class="remove-from-wishlist-btn">Remove</button>
      `;

      // Add the item to the wishlist bar
      wishlistBar.querySelector('.wishlist-content').appendChild(wishlistItem);

      // Show the wishlist bar
      wishlistBar.style.right = '0';

      // Attach event listener to the remove button
      const removeButton = wishlistItem.querySelector('.remove-from-wishlist-btn');
      removeButton.addEventListener('click', function () {
        wishlistItem.remove();
      });

      const addToCartButton = wishlistItem.querySelector('.add-to-cart-btn');
      addToCartButton.addEventListener('click', function () {
        // Dispatch a custom event with product details
        const addToCartEvent = new CustomEvent('addToCart', {
          detail: {
            productName: productName,
            imageSrc: productImage,
            price: productPrice
          }
        });
        document.dispatchEvent(addToCartEvent);
      });
    });
  });

  // Close wishlist bar
  closeWishlistBtn.addEventListener('click', function () {
    wishlistBar.style.right = '-300px';
  });
});
