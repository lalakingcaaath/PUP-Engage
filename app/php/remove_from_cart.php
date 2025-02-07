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

// Remove item from cart
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove_item'])) {
    $color = $_POST['color'];
    $size = $_POST['size'];
    $product_name = $_POST['product_name'];

    // Find the product ID based on the name
    $stmt = $conn->prepare("SELECT id FROM products WHERE name = ?");
    $stmt->bind_param("s", $product_name);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
    $product_id = $product['id'];
    $stmt->close();

    // Delete the item from the cart
    $stmt = $conn->prepare("DELETE FROM cart WHERE user_id = ? AND product_id = ? AND color = ? AND size = ?");
    $stmt->bind_param("iiss", $user_id, $product_id, $color, $size);

    if ($stmt->execute()) {
        header("Location: ../pages/store/checkout.php"); // Redirect back to checkout page
        exit();
    } else {
        echo "Error removing item: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
