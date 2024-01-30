<?php
require_once "./signup/db_connect.php"; // Make sure to include the database connection file

session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ./signup/login.html");
    exit;
}

$user_id = $_SESSION['user_id'];

// Retrieve user orders from the database
$sql = "SELECT orders.order_id, products.name, products.image, orders.total_amount
        FROM orders
        JOIN products ON orders.product_id = products.id
        WHERE orders.user_id = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error in SQL query: " . $conn->error);
}

$stmt->bind_param('i', $user_id);
$stmt->execute();

if (!$stmt->execute()) {
    die("Error executing SQL query: " . $stmt->error);
}

$result = $stmt->get_result();

// Display user orders
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add necessary head elements, styles, and scripts if needed -->
    <title>My Orders - Ivy Gemmies</title>
</head>

<body>

    <!-- Your HTML and PHP code to display orders -->
    <h2>My Orders</h2>

    <?php while ($row = $result->fetch_assoc()) : ?>
        <div class="order-item">
            <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" width="50" height="50">
            <p><?php echo $row['name']; ?></p>
            <p><?php echo 'Price: $' . $row['total_amount']; ?></p>
        </div>
    <?php endwhile; ?>

</body>

</html>
