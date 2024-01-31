<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Now</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            transition: filter 0.5s ease; /* Add a transition for smooth blur effect */
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            filter: blur(0); /* Initial state: no blur */
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        img {
            max-width: 20%;
            height: auto;
            margin-top: 10px;
        }

        .logo img {
            width: 500px;
            height: 100px;
        }

        .buttons {
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            margin-right: 10px;
            font-size: 16px;
            cursor: pointer;
        }

        .qr-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 999;
            display: none;
            text-align: center;
        }

        .qr-label {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .qr-image {
            max-width: 80%;
            height: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .done-button {
            display: block;
            margin-top: 10px;
            margin-left: 250px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        /* Make only the price text red */
        p.price {
            color: #333; /* Set the default color */
        }

        p.price span {
            color: red; /* Set the color for the price text within the span */
        }

        /* Blur effect */
        .blurry {
            filter: blur(5px); /* Increase or decrease the blur effect as needed */
        }
    </style>
</head>
<body>
    <div class="container" id="mainContainer">
        <header>
            <a href="#" class="logo">
                <img src="./assets/images/logo-no-background.png" alt="IvyGemmies">
            </a>
        </header>

        <?php
        session_start();

        // Retrieve product details from query parameters
        $productName = isset($_GET['productName']) ? $_GET['productName'] : 'Product Name Not Available';
        $imageSrc = isset($_GET['imageSrc']) ? $_GET['imageSrc'] : 'Image Source Not Available';
        $price = isset($_GET['price']) ? $_GET['price'] : 'Price Not Available';
        $productid = isset($_GET['productid']) ? $_GET['productid'] : 'Product Not Available';

        // Get existing selected products from the session or initialize an empty array
        $selectedProducts = isset($_SESSION['selected_products']) ? $_SESSION['selected_products'] : [];

        // Add the current product to the selected products array
        $selectedProducts[] = [
            'productName' => $productName,
            'imageSrc' => $imageSrc,
            'price' => $price,
            'productid' => $productid
        ];

        // Store the updated selected products array in the session
        $_SESSION['selected_products'] = $selectedProducts;
        ?>

        <p>Product Name: <?php echo $productName; ?></p>
        <p>Image:</p>
        <img src="<?php echo $imageSrc; ?>" alt="<?php echo $productName; ?>" id="<?php echo $productid; ?>" class="order">
        <!-- Apply the "price" class to the price element and use a span for the price text -->
        <p class="price">Price:<span> &pound;<?php echo $price; ?></span></p>

        <div class="buttons">
            <button onclick="orderphp()">Buy Now</button>
            <button onclick="window.location.href='index.php'">Home</button>
        </div>
    </div>

    <!-- QR Code container -->
    <div class="qr-container" id="qrContainer">
        <div class="qr-label">Payment Method: eSewa QR</div>
        <img src="./assets/images/qr.jpg" alt="QR Code" class="qr-image">
        <button class="done-button" onclick="doneClicked()">Done</button>
    </div>

    <script>
        function orderphp() {
            // Blur everything except the QR code container
            document.getElementById('mainContainer').classList.add('blurry');

            const id = document.querySelector(".order").getAttribute("id");
            const url = `order.php?&productid=${id}`;

            // Display QR image
            const qrContainer = document.getElementById("qrContainer");
            qrContainer.style.display = "block";
        }

        function doneClicked() {
            // Remove blur effect when "Done" is clicked
            document.getElementById('mainContainer').classList.remove('blurry');

            const id = document.querySelector(".order").getAttribute("id");
            const url = `order.php?&productid=${id}`;

            // Hide QR container
            const qrContainer = document.getElementById("qrContainer");
            qrContainer.style.display = "none";

            // Display success message
            alert("Congratulations! Your order has been successfully placed.");

            // Redirect to index.php
            window.location.href = url;
        }
    </script>
</body>
</html>
