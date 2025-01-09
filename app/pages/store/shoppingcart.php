<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Shopping Cart</title>
</head>
<body>
    <header class="subheader">
        <nav>
            <ul>
                <li><a href="/index.php"><img src="/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Shopping Cart</li>
            </ul>
        </nav>
    </header>
    <section class="store">
        <div class="search-store">
            <input type="text" placeholder="Search the store">
            <a href="/app/pages/store/shoppingcart.php"><button><img src="/app/img/icons8-shopping-bag-24.png" alt="shopping bag"></button></a>
        </div>
    </section>
    <section class="cart">
        <div class="unit-data">
            <strong>Product</strong>
            <strong>Unit Price</strong>
            <strong>Quantity</strong>
            <strong>Total Price</strong>
            <strong>Actions</strong>
        </div>
        <div class="unit-deets">
            <input type="checkbox">
            <img src="https://placehold.co/100x100.png" alt="product-image">
            <p>CEA Shirt <span>Variations: Small, Maroon</span></p>
            <p>P150</p>
            <p>1</p>
            <p>P150</p>
            <p>Delete</p>
        </div>
        <div class="unit-checkout">
            <input type="checkbox">
            <p>Total (1 item): P150</p>
            <a href="/app/pages/store/checkout.html"><button>Checkout</button></a>
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