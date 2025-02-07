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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">    <link rel="stylesheet" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/dist/styles.css">
    <link rel="shortcut icon" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" type="image/x-icon">
    <title>Merchandise</title>
</head>
<body>
    <section class="store">
        <div class="search-store">
          <input type="text" placeholder="Search the store">
          <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/store/shoppingcart.html"><button><img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/icons8-shopping-bag-24.png" alt="shopping bag"></button></a>
        </div>
        <div class="banner">
            <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/tpg-banner.jpg" alt="banner">
            <h2>The Programmers' Guild</h2>
        </div>
        <div class="store-card">
            <div class="store-item">
              <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/store/items/TPG-Shirt.php"><img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/T2.jpg" alt="logo"></a>
              <strong>TPG Shirt</strong>
              <p>₱358</p>
              <span>TPG T-Shirt Merch</span>
          </div>
          <div class="store-item">
              <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/store/items/TPG-Totebag.php"><img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/T3.jpg" alt="logo"></a>
              <strong>TPG Zippered Totebag 13" x 15"</strong>
              <p>₱149</p>
              <span>TPG Merch</span>
          </div>
          <div class="store-item">
              <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/store/items/TPG-Lanyard.php"><img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/T4.jpg" alt="logo"></a>
              <strong>TPG Lanyard</strong>
              <p>₱119</p>
              <span>TPG Merch</span>
          </div>
          <div class="store-item">
              <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/store/items/TPG-Dark-Bundle.php"><img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/T7.jpg" alt="logo"></a>
              <strong>TPG Bundle 1 ( Tshirt, Tote Bag, ID Lace) Dark Mode</strong>
              <p>₱588</p>
              <span>TPG Merch</span>
          </div>
          <div class="store-item">
              <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/store/items/TPG-Light-Bundle.php"><img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/T6.jpg" alt="logo"></a>
              <strong>TPG Bundle 2 ( Tshirt, Tote Bag, ID Lace) Light Mode</strong>
              <p>₱588</p>
              <span>TPG T-Shirt Merch</span>
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