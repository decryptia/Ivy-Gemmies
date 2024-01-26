<?php
// session_start();

// Include the database connnection file
include 'db_connect.php' ;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate and authenticate user
    $stmt = $conn->prepare("SELECT user_id, username, password_hash FROM users WHERE username = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $db_username, $db_password_hash);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $db_password_hash)) {
            // Password is correct, set session variables
            session_start();
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $db_username;

            // Insert user location into the database
            $location = $_POST['location'];
            $updateStmt = $conn->prepare("UPDATE users SET location = ? WHERE user_id = ?");
            $updateStmt->bind_param('si', $location, $user_id);
            $updateStmt->execute();

            // Redirect to a dashboard or home page
            header("Location: ../index.php");
            exit();
        } else {
            // Password is incorrect
            $_SESSION['login_error'] = "Invalid password";
        }
    } else {
        // Username not found
        $_SESSION['login_error'] = "Username not found";
        echo '<script>alert("Username not found. Press OK to login.")</script>';
        echo '<script>window.location.href = "login.html";</script>';
    }

    // Close statement
    $stmt->close();
}

// Close database connnection
$conn->close();
?>