<?php
// Include your database connection file
include('config.php'); // Replace 'db_connection.php' with the actual name of your database connection file

if(isset($_GET['id'])) {
    $order_id = $_GET['id'];

    // Assuming your status field in the database is named 'status'
    $new_status = 'approved';

    // Update the order status in the database
    $query = "UPDATE orders SET status = '$new_status' WHERE order_id = $order_id";

    // Execute the query
    $result = mysqli_query($conn, $query);

    if($result) {
        // Redirect back to the page where you have the order list
        header("location: orders.php"); // Change 'orders_list.php' to the actual name of your orders list page
        exit();
    } else {
        echo "Error updating order status: " . mysqli_error($conn);
    }
}

// Close the database connection if needed

?>
