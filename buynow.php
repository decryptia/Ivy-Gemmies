<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Now</title>
    <style>
        /* Paste the CSS code here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
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

        /* Make only the price text red */
        p.price {
            color: #333; /* Set the default color */
        }

        p.price span {
            color: red; /* Set the color for the price text within the span */
            
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <a href="#" class="logo">
                <img src="./assets/images/logo-no-background.png" alt="IvyGemmies">
            </a>
        </header>

        <?php
        // Retrieve product details from query parameters
        $productName = isset($_GET['productName']) ? $_GET['productName'] : 'Product Name Not Available';
        $imageSrc = isset($_GET['imageSrc']) ? $_GET['imageSrc'] : 'Image Source Not Available';
        $price = isset($_GET['price']) ? $_GET['price'] : 'Price Not Available';
        $productid = isset($_GET['productid']) ? $_GET['productid'] : 'Product Not Available';
        ?>

        <p>Product Name: <?php echo $productName; ?></p>
        <p>Image:</p>
        <img src="<?php echo $imageSrc; ?>" alt="<?php echo $productName; ?>" id="<?php echo $productName; ?> ">
        <!-- Apply the "price" class to the price element and use a span for the price text -->
        <p class="price">Price:<span> &pound;<?php echo $price; ?></span></p>

        <div class="buttons">
            <button onclick="window.location.href=">Buy Now</button>
            <button onclick="window.location.href='index.php'">Home</button>
        </div>
    </div>
</body>
</html>
