<?php
// Start or resume a session
session_start();

// Check if selected_products is set in the session
if (isset($_SESSION['selected_products']) && !empty($_SESSION['selected_products'])) {
    $selectedProducts = $_SESSION['selected_products'];

    // Display all selected products
    echo '<div class="container">';
    echo '<p>Selected Products in My Orders:</p>';
    foreach ($selectedProducts as $selectedProduct) {
        echo '<p>Product Name: ' . $selectedProduct['productName'] . '</p>';
        echo '<p>Image:</p>';
        echo '<img src="' . $selectedProduct['imageSrc'] . '" alt="' . $selectedProduct['productName'] . '" class="order" style="max-width: 20%; height: auto;">';
        echo '<p class="price">Price: &pound;' . $selectedProduct['price'] . '</p>';
        echo '<hr>';
    }
    echo '</div>';
}

// Check if the selected product is stored in the session
if (isset($_SESSION['selected_product']) && !empty($_SESSION['selected_product'])) {
    $selectedProduct = $_SESSION['selected_product'];
    // Retrieve product details
    $productName = $selectedProduct['productName'];
    $imageSrc = $selectedProduct['imageSrc'];
    $price = $selectedProduct['price'];
    $productid = $selectedProduct['productid'];

    // Display the selected product
    echo '<div class="container">';
    echo '<p>Selected Product in My Orders:</p>';
    echo '<p>Product Name: ' . $productName . '</p>';
    echo '<p>Image:</p>';
    echo '<img src="' . $imageSrc . '" alt="' . $productName . '" class="order">';
    echo '<p class="price">Price: &pound;' . $price . '</p>';
    echo '</div>';
} else {
    // Set default values if the session variable is not set
    $productName = 'Product Name Not Available';
    $imageSrc = '#';
    $price = 'N/A';
    $productid = 'N/A';

    // Display a message for no selected product
    echo '<div class="container">';
    echo '</div>';
}
?>
