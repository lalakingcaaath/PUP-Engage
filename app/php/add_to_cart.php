<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: ../login.php");
    exit();
}

// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pup_engage";

$conn = new mysqli($servername, $username, $password, $dbname);
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

// Process Add to Cart
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $total_price = $price * $quantity;

    // Insert into cart
    $stmt = $conn->prepare("INSERT INTO cart (user_id, product_id, color, size, quantity, price) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iissid", $user_id, $product_id, $color, $size, $quantity, $total_price);
    
    if ($stmt->execute()) {
        header("Location: ../pages/store/checkout.php"); // Redirect to checkout page
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
