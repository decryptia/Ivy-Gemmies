<?php
require_once "./signup/db_connect.php";
function getTotalAmount($product_id, $conn) {
    

    $stmt = $conn->prepare("SELECT price FROM products WHERE id =?");
    $stmt->bind_param('i', $product_id);
    $stmt->execute();

    $stmt->store_result();
    $stmt->bind_result($price);
    $stmt->fetch();

    // Close the database connection after fetching the result
    

    return $price; // Return 0 if the product is not found or for error handling
}

// Function to get delivery location from the users table
function getDeliveryLocation($user_id, $conn) {
   

    $stmt = $conn->prepare("SELECT location FROM users WHERE user_id= ?");
    $stmt->bind_param('i', $user_id);
    $stmt->execute();

    $stmt->store_result();
    $stmt->bind_result($location);
    $stmt->fetch();

    // Close the database connection
   

    return $location; // Return an empty string if the user is not found or for error handling
}

// Function to insert data into the orders table
function insertOrder($user_id, $order_date, $status, $product_id, $conn) {
    // Get total amount and delivery location
    $total_amount = getTotalAmount($product_id, $conn);
    $delivery_location = getDeliveryLocation($user_id, $conn);
   
    // Prepare the SQL statement
    $sql = "INSERT INTO orders (user_id, order_date, total_amount, status, product_id, delivery_location)
             VALUES (?, ?, ?, ?, ?, ?)";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param('isssis', $user_id, $order_date, $total_amount, $status, $product_id, $delivery_location);
    

    // Execute the statement
    $stmt->execute();

    // Close the database connection
    mysqli_close($conn);

    
}
session_start();
// Example usage:
$user_id = $_SESSION['user_id']; // Replace with the actual user ID
$order_date = date('Y-m-d'); // Use the current date
$status = 'Pending'; // Replace with the actual status
$product_id = isset($_GET['productid']) ? $_GET['productid'] : null;


// Check if product_id is provided in the GET request
if ($product_id !== null) {
    // Call the function to insert the order
    insertOrder($user_id, $order_date, $status, $product_id, $conn);

    // Optionally, you can redirect the user or display a success message
    echo "Order placed successfully!";
    header("Location: ./index.php");
} else {
    // Handle the case where product_id is not provided
    echo "Product ID is missing in the GET request.";
}
?>
