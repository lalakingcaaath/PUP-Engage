<?php 
session_start();

// Check if user is logged in
if (isset($_SESSION['email'])) {
    include '/laragon/www/pup-engage/app/components/header-loggedin.php';
} else {
    include '/laragon/www/pup-engage/app/components/header-default.php';
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

// Fetch product details (Assuming product_id = 1 for this example)
$product_id = 9;
$stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>PUP SETS Store</title>
</head>
<body>
    <section class="store">
      <div class="search-store">
        <input type="text" placeholder="Search the store">
        <a href="/app/pages/store/checkout.php"><button><img src="/app/img/icons8-shopping-bag-24.png" alt="shopping bag"></button></a>
      </div>
    </section>

    <section class="product-page">
        <div class="product-image">
          <img src="/app/img/T11.jpg" alt="Product Image" />
        </div>
        <div class="product-details">
          <h1><?php echo htmlspecialchars($product['name']); ?></h1>
          <p class="price">P<?php echo number_format($product['price'], 2); ?></p>
      
          <form action="/app/php/add_to_cart.php" method="POST">
            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
            <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
            
            <div class="option-group">
              <h3>Color</h3>
              <select name="color">
                <option value="Cyan">Cyan</option>
              </select>
            </div>
      
            <div class="option-group">
              <h3>Size</h3>
              <select name="size">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
            </div>
      
            <div class="option-group">
              <h3>Quantity</h3>
              <input type="number" name="quantity" value="1" min="1">
            </div>
      
            <div class="actions">
              <button type="submit" name="add_to_cart" class="add-to-cart">Add to cart</button>
              <button type="submit" name="buy_now" class="buy-now">Buy Now</button>
            </div>
          </form>
        </div>
    </section>
</body>
</html>

<?php include '/laragon/www/pup-engage/app/components/footer.php'; ?>
