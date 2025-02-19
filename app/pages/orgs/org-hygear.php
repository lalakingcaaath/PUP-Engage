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
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Merchandise</title>
</head>
<body>
    <section class="store">
        <div class="search-store">
          <input type="text" placeholder="Search the store">
          <a href="/app/pages/store/shoppingcart.html"><button><img src="/app/img/icons8-shopping-bag-24.png" alt="shopping bag"></button></a>
        </div>
        <div class="banner">
            <img src="/app/img/hygear-banner.jpg" alt="banner">
            <h2>PUP Hygears</h2>
        </div>
        <div class="store-card">
            <div class="store-item">
              <a href="/app/pages/store/items/PUP-Hygear-1.php"><img src="/app/img/T8.png" alt="logo"></a>
              <strong>Hygears shirt 1 </strong>
              <p>₱200</p>
              <span>Hygears T-shirt Merch</span>
          </div>
          <div class="store-item">
              <a href="/app/pages/store/items/PUP-Hygear-2.php"><img src="/app/img/T9.png" alt="logo"></a>
              <strong>Hygear t-shirt 2 </strong>
              <p>₱200</p>
              <span>Hygears T-shirt Merch </span>
          </div>
         
          </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2025 Merchandise Store</p>
    </footer>
</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>