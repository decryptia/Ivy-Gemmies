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

        </button>
        
        <button class="header-action-btn" onclick="window.location.href='myorders.php'">
            <p class="header-action-label">My Orders</p>
        </button>
        <button class="header-action-btn" onclick="window.location.href='logout.php'">
            <ion-icon name="log-out-outline"></ion-icon>
            <p class="header-action-label">logout</p>
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
            <a href="#home" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#diya" class="navbar-link">Shop</a>
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
        - #HERO
      -->

      <section class="hero" id="home" style="background-image: url('./assets/images/model-demonstrating-earrings-ring.jpg')">
        <div class="container">

          <div class="hero-content">

          

            <h3 class="h1 hero-title">Unveil Radiance with IvyGemmies' Treasured Gems</h3>

            <a href="#diya"><button class="btn btn-primary">Shop Now</button></a>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="service">
        <div class="container">

          <ul class="service-list">

            <li class="service-item">
              <div class="service-item-icon">
                <img src="./assets/images/service-icon-1.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Free Shipping</p>

                <p class="service-item-text">On All Order Over $599</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="./assets/images/service-icon-2.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Easy Returns</p>

                <p class="service-item-text">30 Day Returns Policy</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="./assets/images/service-icon-3.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Secure Payment</p>

                <p class="service-item-text">100% Secure Gaurantee</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="./assets/images/service-icon-4.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Special Support</p>

                <p class="service-item-text">24/7 Dedicated Support</p>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CATEGORY
      -->

      <section class="section category">
        <div class="container">
         
          <ul class="category-list">

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/engagementring.webp" alt="Rings" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Rings</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/TINY-HOLLOW-HOOP-EARRINGS-WEAR-IT-WITH_750x.webp" alt="Earrings" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Earring</a>
            </li>
           
            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/10.jpg" alt="Earring" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Earrings</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/29.jpg" alt="Necklace" loading="lazy" width="510"
                  height="600" class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Necklace</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/RSTAS06.webp" alt="Jewelry" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Ring</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="./assets/images/38.jpg" alt="silverbracelet" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="#" class="btn btn-secondary">Silver Bracelet</a>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #PRODUCT
      -->

      <section class="section product">
        <div class="container">

          <h2 id="diya" class="h2 section-title">Products of the week</h2>

          <ul class="filter-list">

            <li>
              <button class="filter-btn  active">Best Seller</button>
            </li>

            
          </ul>

          <ul class="product-list">

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/earrings.jpg" alt="Diamond earrings" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-badge red"> -25%</div>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Diamond Earring</a>
                  </h3>

                  <div class="card-price">
                    <data value="800.75">&pound;800.75</data>

                    <data value="600.57">&pound;600.57</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/15.jpg" alt="Fit Twill Shirt for Woman" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-badge green"> New</div>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Long Gold chain Necklace</a>
                  </h3>

                  <div class="card-price">
                    <data value="62.00">&pound;500.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/27.jpg" alt="Gold earring with Pink stone" loading="lazy"
                      width="800" height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Gold earring with Pink stones</a>
                  </h3>

                  <div class="card-price">
                    <data value="32.00">&pound;32.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/ring.jpg" alt="White diamond ring" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">White Diamond Ring</a>
                  </h3>

                  <div class="card-price">
                    <data value="84.00">&pound;84.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/30.jpg" alt="Gold leaf necklace" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Gold Leaf Necklace</a>
                  </h3>

                  <div class="card-price">
                    <data value="45.00">&pound;45.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/28.jpg" alt="Gold Bangles with stones" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Gold Bangles with stone</a>
                  </h3>

                  <div class="card-price">
                    <data value="30.00">&pound;30.00</data>

                    <data value="38.00">&pound;38.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/14.jpg" alt="Traditional Gold Chained Necklace" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Traditional Gold Chained Necklace</a>
                  </h3>

                  <div class="card-price">
                    <data value="25.00">&pound;25.00</data>

                    <data value="39.00">&pound;39.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/39.jpg" alt="Flower-style Gold Ring" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Flower Style Gold ring</a>
                  </h3>

                  <div class="card-price">
                    <data value="85.00">&pound;85.00</data>

                    <data value="99.00">&pound;99.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/45.jpg" alt="Diamond set" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Diamond Set</a>
                  </h3>

                  <div class="card-price">
                    <data value="32.00">&pound;32.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/22.jpg" alt="Traditional Gold Bangles" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-badge green">New</div>

                  <div class="card-actions">

                    <button class="card-action-btn" aria-label="Quick view">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Traditional Gold Bangles</a>
                  </h3>

                  <div class="card-price">
                    <data value="71.00">&pound;71.00</data>
                  </div>
                </div>

              </div>
            </li>

          </ul>

          <a href="products.php"><button class="btn btn-outline">View All Products</button></a>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->






      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter">
        <div class="container">

          <div class="newsletter-card" style="background-image: url('./assets/images/newsletter-bg.png')">

            <h2 class="card-title">Subscribe Newsletter</h2>

            <p class="card-text">
              Enter your email below to be the first to know about new collections and product launches.
            </p>

            <form action="" class="card-form">

              <div class="input-wrapper">
                <ion-icon name="mail-outline"></ion-icon>

                <input type="email" name="emal" placeholder="Enter your email" required class="input-field">
              </div>

              <button type="submit" class="btn btn-primary w-100">
                <span>Subscribe</span>

                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </button>

            </form>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
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
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html> 