<?php
session_start(); 
if (!$_SESSION['admin']){
   header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>
    <style>
      body {
         margin: 0;
         font-family: Arial, sans-serif;
      }

      .navbar {
         background-color: #333;
         overflow: hidden;
      }

      .navbar a {
         float: left;
         display: block;
         color: white;
         text-align: center;
         padding: 14px 16px;
         text-decoration: none;
      }

      .navbar a:hover {
         background-color: #ddd;
         color: black;
      }
   </style>
</head>
<body>
<div class="navbar">
   <a href="admin_page.php">Products</a>
   <a href="orders.php">Orders</a>
   <a href="logout.php">logout</a>
</div>
<div class="container">


<?php
include 'config.php';
$select = mysqli_query($conn, "SELECT o.order_id AS order_id, u.username AS user_id, p.image AS product_image, p.name AS product_name, p.price AS product_price, o.status AS order_status FROM orders o JOIN users u ON o.user_id = u.user_id JOIN products p ON o.product_id = p.id");

?>
<div class="product-display">
   <table class="product-display-table">
      <thead>
      <tr>
         <th>username</th>
         <th>product image</th>
         <th>product name</th>
         <th>product price</th>
         <th>order status</th>
         <th>action</th>
      </tr>
      </thead>
      <?php while($row = mysqli_fetch_assoc($select)){ ?>
      <tr>
         <td><?php echo $row['user_id']?></td>
         <td><img src="uploaded_img/<?php echo $row['product_image']; ?>" height="100" alt=""></td>
         <td><?php echo $row['product_name']; ?></td>
         <td>£<?php echo $row['product_price']; ?>/-</td>
         <td><?php echo $row['order_status']?></td>
         <td>
            <a href="admin_updatestatus.php?id=<?php echo $row['order_id']; ?>" class="btn"> <i class="fas fa-edit"></i> Approve </a>
         </td>
      </tr>
   <?php } ?>
   </table>
</div>

</div>
</body>
</html>