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
    <header class="main-header">
        <nav>
            <ul>
                <li><a href="/index.php"><img src="/app/img/PUPLogo.png" alt="PUP logo"></a></li>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/app/pages/directory.php">Directory</a></li>
                <li><a href="/app/pages/generalcalendar.php">Calendar</a></li>
                <li><a href="/app/pages/forum.php">Forum</a></li>
                <li><a href="/app/pages/store/store.php">Store</a></li>
                <li><a href="/app/pages/login.php">Sign In</a></li>
                <li><a href="/app/pages/signup.php">Register</a></li>
            </ul>
        </nav>
    </header>
    <section class="store">
      <div class="search-store">
        <input type="text" placeholder="Search the store">
        <a href="/app/pages/store/shoppingcart.html"><button><img src="/app/img/icons8-shopping-bag-24.png" alt="shopping bag"></button></a>
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
            <a href="/app/pages/store/shoppingcart.html"><button class="add-to-cart">Add to cart</button></a>
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
              <a href="/app/pages/store/orgs/tpg.html"><button><img src="/app/img/icons8-store-24.png" alt="store">View Shop</button></a>
            </div>
          </div>
          <p>Joined: October 23, 2024</p>
          <p>Products: 5</p>
        </div>
      </section>

      <section class="store">
        <div class="store-card">
          <div class="store-item">
            <a href="/app/pages/store/items/item-boilerplate.html"><img src="/app/img/cpeshirt.png" alt="logo"></a>
            <strong>TPG Shirt</strong>
            <p>₱150</p>
            <span>TPG T-Shirt Merch</span>
        </div>
        <div class="store-item">
            <a href="/app/pages/store/items/item-boilerplate.html"><img src="/app/img/cpeshirt.png" alt="logo"></a>
            <strong>TPG Shirt</strong>
            <p>₱150</p>
            <span>TPG T-Shirt Merch</span>
        </div>
        <div class="store-item">
            <a href="/app/pages/store/items/item-boilerplate.html"><img src="/app/img/cpeshirt.png" alt="logo"></a>
            <strong>TPG Shirt</strong>
            <p>₱150</p>
            <span>TPG T-Shirt Merch</span>
        </div>
        <div class="store-item">
            <a href="/app/pages/store/items/item-boilerplate.html"><img src="/app/img/cpeshirt.png" alt="logo"></a>
            <strong>TPG Shirt</strong>
            <p>₱150</p>
            <span>TPG T-Shirt Merch</span>
        </div>
        <div class="store-item">
            <a href="/app/pages/store/items/item-boilerplate.html"><img src="/app/img/cpeshirt.png" alt="logo"></a>
            <strong>TPG Shirt</strong>
            <p>₱150</p>
            <span>TPG T-Shirt Merch</span>
        </div>
        </div>
      </section>
      
    <footer>
        <div class="links">
            <ul>
                <li>Quick Links</li>
                <li><a href="/app/pages/directory.php">Organization Directory</a></li>
                <li><a href="/app/pages/generalcalendar.php">Event Calendar</a></li>
                <li><a href="/app/pages/forum.php">Forum</a></li>
                <li><a href="/app/pages/store/store.php">Mechandise Store</a></li>
                <li><a href="/app/pages/about.php">About Us</a></li>
            </ul>
        </div>
        <div class="socmed">
            <p class="touch">Keep in touch</p>
            <a href="https://www.facebook.com/ThePUPOfficial"><img src="/app/img/icons8-facebook-logo-50.png" alt="facebook"></a>
            <a href="https://x.com/ThePUPOfficial"><img src="/app/img/icons8-twitter-50.png" alt="twitter"></a>
            <a href="https://www.youtube.com/user/pupcreatv"><img src="/app/img/icons8-youtube-50.png" alt="youtube"></a>
            <a href="https://www.linkedin.com/school/polytechnic-university-of-the-philippines/posts/?feedView=all"><img src="/app/img/icons8-linkedin-50.png" alt="linkedin"></a>
            <p class="info">PUP Contact Information</p>
            <p>Phone: <span>(+63 2) 5335-1PUP (5335-1787) or 5335-1777</span></p>
            <p>Email: <span>inquire@pup.edu.ph</span></p>
        </div>
        <p class="copyright">&copy; 2024 PUP Engage. All rights reserved</p>
    </footer>
</body>
</html>