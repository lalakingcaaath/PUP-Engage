<?php 
    session_start();

    //Check if the user is logged in
    if (isset($_SESSION['email'])) {
        include '/laragon/www/pup-engage/app/components/header-loggedin.php';
    } else {
        include '/laragon/www/pup-engage/app/components/header-default.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Item Boilerplate</title>
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
          <img src="/app/img/cpeshirt.png" alt="Product Image" />
        </div>
        <div class="product-details">
          <h1>BS CpE / BS Computer Engineering - Tanglaw Course Tees</h1>
          <p class="price">P150-250</p>
      
          <div class="option-group">
            <h3>Color</h3>
            <div class="buttons">
              <button>Black</button>
              <button>Brown</button>
              <button>White</button>
              <button>Maroon</button>
            </div>
          </div>
      
          <div class="option-group">
            <h3>Size</h3>
            <div class="buttons">
              <button>S</button>
              <button>M</button>
              <button>L</button>
              <button>XL</button>
            </div>
          </div>
      
          <div class="option-group">
            <h3>Quantity</h3>
            <div class="quantity-control">
              <button>-</button>
              <input type="number" value="1" min="1" />
              <button>+</button>
            </div>
          </div>
      
          <div class="actions">
            <a href="/app/pages/store/checkout.php"><button class="add-to-cart">Add to cart</button></a>
            <button class="buy-now">Buy Now</button>
          </div>
        </div>
      </section>

      <section class="desc-grp">
        <div class="desc-item">
          <h3>Item Description</h3>
          <p>College of Engineering Shirt</p>
          <p>Size: Small to X-Large</p>
          <p>Colors: Black, Brown, White, Maroon</p>
          <p>Material: Cotton</p>
        </div>
        <div class="desc-item">
          <div class="seller">
            <img src="/app/img/tpg-logo.jpg" alt="profile-image" class="seller-img">
            <div class="seller-desc">
              <h3>The Programmers' Guild</h3>
              <a href="/app/pages/store/orgs/tpg.php"><button><img src="/app/img/icons8-store-24.png" alt="store">View Shop</button></a>
            </div>
          </div>
          <p>Joined: October 23, 2024</p>
          <p>Products: 5</p>
        </div>
      </section>

      <section class="store">
        <div class="store-card">
          <div class="store-item">
            <a href="/app/pages/store/items/item-boilerplate.php"><img src="/app/img/cpeshirt.png" alt="logo"></a>
            <strong>TPG Shirt</strong>
            <p>₱150</p>
            <span>TPG T-Shirt Merch</span>
        </div>
        <div class="store-item">
            <a href="/app/pages/store/items/item-boilerplate.php"><img src="/app/img/cpeshirt.png" alt="logo"></a>
            <strong>TPG Shirt</strong>
            <p>₱150</p>
            <span>TPG T-Shirt Merch</span>
        </div>
        <div class="store-item">
            <a href="/app/pages/store/items/item-boilerplate.php"><img src="/app/img/cpeshirt.png" alt="logo"></a>
            <strong>TPG Shirt</strong>
            <p>₱150</p>
            <span>TPG T-Shirt Merch</span>
        </div>
        <div class="store-item">
            <a href="/app/pages/store/items/item-boilerplate.php"><img src="/app/img/cpeshirt.png" alt="logo"></a>
            <strong>TPG Shirt</strong>
            <p>₱150</p>
            <span>TPG T-Shirt Merch</span>
        </div>
        <div class="store-item">
            <a href="/app/pages/store/items/item-boilerplate.php"><img src="/app/img/cpeshirt.png" alt="logo"></a>
            <strong>TPG Shirt</strong>
            <p>₱150</p>
            <span>TPG T-Shirt Merch</span>
        </div>
        </div>
      </section>
</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>