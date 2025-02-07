<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: ../login.php");
    exit();
}

// Database Connection
$conn = new mysqli("localhost", "root", "", "pup_engage");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user ID
$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
$stmt->bind_param("s", $_SESSION['email']);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$user_id = $user['id'];
$stmt->close();

// Move cart items to "orders" table
$stmt = $conn->prepare("INSERT INTO orders (user_id, product_id, color, size, quantity, price) 
                        SELECT user_id, product_id, color, size, quantity, price FROM cart WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->close();

// Clear the cart
$stmt = $conn->prepare("DELETE FROM cart WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->close();

// Close database connection
$conn->close();

// Redirect back to checkout page with success message
header("Location: ../pages/store/checkout.php?success=1");
exit(); // Ensure script stops here
?>
