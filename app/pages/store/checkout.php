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

// Fetch user ID from session
$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
$stmt->bind_param("s", $_SESSION['email']);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$user_id = $user['id'];
$stmt->close();

// Fetch cart items for the user
$stmt = $conn->prepare("SELECT products.name, cart.color, cart.size, cart.quantity, cart.price, products.image 
                        FROM cart 
                        JOIN products ON cart.product_id = products.id 
                        WHERE cart.user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Calculate total
$total_price = 0;
$cart_items = [];

while ($row = $result->fetch_assoc()) {
    $cart_items[] = $row;
    $total_price += $row['price'];
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Checkout</title>
</head>
<body>
    <header class="subheader">
        <nav>
            <ul>
                <li><a href="/index.php"><img src="/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Checkout</li>
            </ul>
        </nav>
    </header>
    
    <section class="store">
        <div class="search-store">
            <input type="text" placeholder="Search the store">
            <a href="./store.php"><button><img src="/app/img/icons8-shopping-bag-24.png" alt="shopping bag"></button></a>
        </div>
    </section>
    
    <section class="checkout">
    <div class="checkout-unit">
        <strong>Product Ordered</strong>
        <strong>Unit Price</strong>
        <strong>Quantity</strong>
        <strong>Item Subtotal</strong>
        <strong>Action</strong>
    </div>
    
    <?php if (count($cart_items) > 0): ?>
        <?php foreach ($cart_items as $item): ?>
            <div class="checkout-deets">
                <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="product-image" width="100">
                <p><?php echo htmlspecialchars($item['name']); ?> <br>
                    <span>Color: <?php echo htmlspecialchars($item['color']); ?>, Size: <?php echo htmlspecialchars($item['size']); ?></span>
                </p>
                <p>P<?php echo number_format($item['price'] / $item['quantity'], 2); ?></p>
                <p><?php echo htmlspecialchars($item['quantity']); ?></p>
                <p>P<?php echo number_format($item['price'], 2); ?></p>
                
                <!-- Remove Button -->
                <form action="/app/php/remove_from_cart.php" method="POST">
                    <input type="hidden" name="color" value="<?php echo htmlspecialchars($item['color']); ?>">
                    <input type="hidden" name="size" value="<?php echo htmlspecialchars($item['size']); ?>">
                    <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($item['name']); ?>">
                    <button type="submit" name="remove_item" class="remove-btn">Remove</button>
                </form>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>

    <form action="/app/php/place_order.php" method="POST">
    <div class="checkout-final">
        <div class="payment-unit">
            <p>Payment Method</p>
            <p>Cash on Delivery</p>
            <p>CHANGE</p>
        </div>
        <div class="payment-deets">
            <p>Total Final<span>P<?php echo number_format($total_price, 2); ?></span></p>
        </div>
        <button type="submit">Place order</button>
    </div>
</form>

<?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
    <p style="color: green; font-weight: bold;">Order was successful! Your cart is now empty.</p>
<?php endif; ?>

</section>

</body>
</html>

<?
    include '/laragon/www/pup-engage/app/components/footer.php';
?>