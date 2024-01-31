<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ivy Gemmies</title>


  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
 
  
  
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <div class="header-search">
          <input type="search" name="search" id="searchInput" placeholder="Search Product..." class="input-field">
            <button class="search-btn" aria-label="Search" onclick="searchProduct()">
              <ion-icon name="search-outline"></ion-icon>
            </button>
      </div>

      <a href="#" class="logo">
        <img src="./assets/images/logo-no-background.png" alt="IvyGemmies" width="130" height="31">
      </a>

      <div class="header-actions">
          <?php
        session_start();
         if (isset($_SESSION['user_id'])) {
          echo '<a href="" class="header-action-btn">';
          echo '<button><ion-icon name="person-outline" aria-hidden="true"></ion-icon>';
          echo '<p class="header-action-label">' . $_SESSION['username'] . '</p></button></a>';
          
      } else {
        echo '<a href="./signup/login.html" class="header-action-btn">';
        echo '<button><ion-icon name="person-outline" aria-hidden="true"></ion-icon>';
        echo '<p class="header-action-label">Sign in</p></button></a>';
      }
          ?>
      

        <button class="header-action-btn">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>

          <p class="header-action-label">Search</p>
        </button>

      <button class="header-action-btn">
          <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>
          <p class="header-action-label">Cart</p>
          <div id="cart-badge" class="btn-badge green" aria-hidden="true">0</div>
      </button>
      
      

        <button class="header-action-btn">
          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>

          <p class="header-action-label">Wishlisht</p>

          <div class="btn-badge" aria-hidden="true">2</div>
        </button>

      </div>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="#" class="logo">
            <img src="./assets/images/logo-no-background.png" alt="IvyGemmies logo" width="130" height="31">
          </a>

          <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="index.php" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="about.html" class="navbar-link">About</a>
          </li>


          <li class="contact-tooltip">
            <a href="#" class="navbar-link">Contact</a>
            <span class="tooltip-text">Phone: (+977) 9765445317<br>Address: Lazimpat, Kathmandu</span>
          </li>

        </ul>

      </nav>

    </div>
  </header>





  <main>
    <article>






      <!-- 
        - #PRODUCT
      -->

      <section class="section product">
        <div class="container">

          <h2 id="diya" class="h2 section-title">All Products</h2>

          <ul class="filter-list">

           

            
          </ul>

          <ul class="product-list">
          <?php
// Assuming you have a database connection
require_once "./signup/db_connect.php"; // Include your database connection file
 
// Fetch data from the products table
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
 
// Check if there are any products
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Replace the static image URLs with the actual path to your product images
        $imageSrc = "./admin/uploaded_img/{$row['image']}";
 
        // Calculate the discount percentage (replace with your actual discount logic)
        $discount = 25; // Example discount percentage
 
        // Check if the product is new (replace with your actual logic)
        $isNew = true; // Example: consider all products as new
        
 
        // Display product in the specified format
        echo '<li>';
        echo '<div class="product-card">';
        echo '<figure class="card-banner">';
        echo '<a href="#">';
        echo '<img src="' . $imageSrc . '" alt="' . $row['name'] . '" id="'.$row['id'].'" loading="lazy" width="800" height="1034" class="w-100">';
        echo '</a>';

        // if ($discount > 0) {
        //     echo '<div class="card-badge red"> -' . $discount . '%</div>';
        // } elseif ($isNew) {
            // echo '<div class="card-badge green"> New</div>';
        // }

        echo '<div class="card-actions">';
        echo '<button class="card-action-btn" aria-label="Quick view">';
        echo '<ion-icon name="eye-outline"></ion-icon>';
        echo '</button>';
        echo '<button class="card-action-btn cart-btn">';
        echo '<ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>';
        echo '<p>Add to Cart</p>';
        echo '</button>';
        echo '<button class="card-action-btn" aria-label="Add to Wishlist">';
        echo '<ion-icon name="heart-outline"></ion-icon>';
        echo '</button>';
        echo '</div>';
        echo '</figure>';
        echo '<div class="card-content">';
        echo '<h3 class="h4 card-title">';
        echo '<a href="#">' . $row['name'] . '</a>';
        echo '</h3>';
        echo '<div class="card-price">';
        echo '<data value="' . $row['price'] . '">&pound;' . $row['price'] . '</data>';

        // Optionally, you can display the original price if there is a discount
        // if ($discount > 0) {
        //     $originalPrice = $row['price'] + ($row['price'] * $discount / 100);
        //     echo '<data value="' . $originalPrice . '">&pound;' . $originalPrice . '</data>';
        // }

        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</li>';
    }
} else {
    echo '<li>No products available.</li>';
}
 
// Close the database connection
mysqli_close($conn);
?>

          </ul>

          

        </div>
      </section>





      <!-- 
        - #BLOG
     

  
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

         

          <p class="footer-text">
            <h1>IvyGemmies</h1>
            Explore our curated collection of exquisite rings, captivating necklaces,
            and timeless jewels, meticulously crafted to adorn your moments 
                           with Grace and Sophistication.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link" id="instagram-link">
                  <ion-icon name="logo-instagram"></ion-icon>
              </a>
          </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Information</p>
          </li>

          <li>
            <a href="about.html" class="footer-link">About Company</a>
          </li>

          <li>
            <a href="#" class="footer-link">Payment Type</a>
          </li>

          <li>
            <a href="#" class="footer-link">Location</a>
            <!-- Map container -->
            <div id="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.879581770831!2d85.31720187405365!3d27.721004024891613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191bd68fc8d9%3A0xfda255aaad347a3d!2sLazimpat%20Rd%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1704436459662!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </li>

          <li>
            <a href="#" class="footer-link">World Media Partner</a>
          </li>

          <li>
            <a href="#" class="footer-link">Become an Agent</a>
          </li>

          <li>
            <a href="#" class="footer-link">Refund Policy</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Category</p>
          </li>

          <li>
            <a href="#" class="footer-link">Rings</a>
          </li>

          <li>
            <a href="#" class="footer-link">Necklaces</a>
          </li>

          <li>
            <a href="#" class="footer-link">Bracelets</a>
          </li>

          <li>
            <a href="#" class="footer-link">Earrings</a>
          </li>

          <li>
            <a href="#" class="footer-link">Hoops</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Help & Support</p>
          </li>

          <li>
            <a href="#" class="footer-link">Dealers & Agents</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ Information</a>
          </li>

          <li>
            <a href="#" class="footer-link">Return Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Shipping & Delivery</a>
          </li>

          <li>
            <a href="#" class="footer-link">Order Tranking</a>
          </li>

          <li>
            <a href="#" class="footer-link">List of Shops</a>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 <a href="#">diyareg</a>. All Rights Reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="privacy.html" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="terms.html" class="footer-bottom-link">Terms & Conditions</a>
          </li>


        </ul>

        <div class="payment">
          <p class="payment-title">We Support</p>

          <img src="./assets/images/esewa.png" alt="Online payment logos" class="payment-img">
        </div>

      </div>
      <div id="cart-section">
        <button id="close-btn" class="btn-close" onclick="closeCart()">Close</button>
        <h2>Your Cart</h2>
        <ul id="cart-items"></ul>
        <p id="total-price">Total: &pound;0.00</p>
      </div>

      <div id="wishlist-bar" class="wishlist-bar">
        <div class="wishlist-content">
          <!-- Wishlist items will be dynamically added here -->
        </div>
        <button id="close-wishlist" class="close-wishlist-btn">&times;</button>
      </div>
      

  </footer>
  
  


  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script2.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html> 