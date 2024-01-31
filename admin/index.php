<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignIn&SignUp</title>
    <link rel="stylesheet" type="text/css" href="../signup/style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="login.php" class="sign-in-form" method="post">
            <h2 class="title">Sign In</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" />
            </div>
            <div class="input-field">
              <i class="fas fa-map-marker-alt"></i>
              <input  type="text"placeholder="Location" name="location" id="locationInput" />
            </div>
           
           

            <input type="submit" value="Login" class="btn solid" />

            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>


          
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
            <div class="logo">
              <img src="../signup/img/logo-no-background.png" class="image" alt="">
            </div> <!-- Move the closing div tag to close the logo div here -->
      </div>
      

        <div class="panel right-panel">
            <div class="content">
             <div class="logo">
              <img src="../signup/img/logo-no-background.png" class="image" alt="">
             </div>
            </div>
        </div>

    <script src="./app.js"></script>
    <script>
      // Function to get the user's current location
      function getUserLocation() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
            (position) => {
              const latitude = position.coords.latitude;
              const longitude = position.coords.longitude;
              const locationInput = document.getElementById("locationInput");

              // Reverse geocoding using OpenStreetMap Nominatim API
              const reverseGeocodeUrl = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}&zoom=18&addressdetails=1`;

              fetch(reverseGeocodeUrl)
              .then((response) => response.json())
              .then((data) => {
                // Extract area and city information
                const area = data.address ? data.address.suburb || data.address.neighbourhood || "" : "";
                const city = data.address ? data.address.city || data.address.town || data.address.village : "";

                // Set the location in the input fields
                if (locationInput) {
                  locationInput.value = `(${latitude.toFixed(4)}, ${longitude.toFixed(4)}, "${area ? area + ", " : ""}${city}")`;
                }
              })
              .catch((error) => {
                console.error("Error fetching reverse geocoding data:", error);
              });
            },
            (error) => {
              console.error("Error getting user location:", error);
            }
          );
        } else {
          console.error("Geolocation is not supported by this browser.");
        }
      }

      // Call the function to get the user's location
      getUserLocation();
    </script>
  </body>
</html>
