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
    <title>Merchandise Store</title>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Merchandise Store</title>
</head>
<body>
    <section class="store">
        <div class="search-store">
            <input type="text" placeholder="Search the store">
            <a href="/app/pages/store/checkout.php"><button><img src="/app/img/icons8-shopping-bag-24.png" alt="shopping bag"></button></a>
        </div>
        <div class="store-card">
            <div class="store-item">
                <a href="/app/pages/store/items/TPG-Shirt.php"><img src="/app/img/T2.jpg" alt="logo"></a>
                <strong>TPG Shirt</strong>
                <p>₱358</p>
                <span>TPG T-Shirt Merch</span>
            </div>
            <div class="store-item">
                <a href="/app/pages/store/items/TPG-Totebag.php"><img src="/app/img/T3.jpg" alt="logo"></a>
                <strong>TPG Zippered Totebag 13" x 15"</strong>
                <p>₱149</p>
                <span>TPG Merch</span>
            </div>
            <div class="store-item">
                <a href="/app/pages/store/items/TPG-Lanyard.php"><img src="/app/img/T4.jpg" alt="logo"></a>
                <strong>TPG Lanyard</strong>
                <p>₱119</p>
                <span>TPG Merch</span>
            </div>
            <div class="store-item">
                <a href="/app/pages/store/items/CollegeOfEngineering.php"><img src="/app//img/T5.webp" alt="logo"></a>
                <strong>Computer Engineering Shirt</strong>
                <p>₱250</p>
                <span>BS Shirt</span>
            </div>
            <div class="store-item">
                <a href="/app/pages/store/items/TPG-Light-Bundle.php"><img src="/app/img/T6.jpg" alt="logo"></a>
                <strong>TPG Bundle 2 ( Tshirt, Tote Bag, ID Lace) Light Mode</strong>
                <p>₱588</p>
                <span>TPG Merch</span>
            </div>
            <div class="store-item">
                <a href="/app/pages/store/items/TPG-Dark-Bundle.php"><img src="/app/img/T7.jpg" alt="logo"></a>
                <strong>TPG Bundle 1 ( Tshirt, Tote Bag, ID Lace) Dark Mode</strong>
                <p>₱588</p>
                <span>TPG Merch</span>
            </div>
            <div class="store-item">
                <a href="/app/pages/store/items/PUP-Hygear-1.php"><img src="/app/img/T8.png" alt="logo"></a>
                <strong> PUP Hygear Shirt 1 </strong>
                <p>₱200</p>
                <span>Hygear T-Shirt Merch</span>
            </div>
            <div class="store-item">
                <a href="/app/pages/store/items/PUP-Hygear-2.php"><img src="/app/img/T9.png" alt="logo"></a>
                <strong>PUP Hygear Shirt 2 </strong>
                <p>₱200</p>
                <span>Hygear T-Shirt Merch</span>
            </div>
            <div class="store-item">
                <a href="/app/pages/store/items/CompEng_1.php"><img src="/app/img/T11.jpg" alt="logo"></a>
                <strong>Computer Engineering Shirt</strong>
                <p>₱300</p>
                <span>BSCOE T-Shirt Merch</span>
            </div>
            <div class="store-item">
                <a href="/app/pages/store/items/CompEng_2.php"><img src="/app/img/T12.jpg" alt="logo"></a>
                <strong>Computer Engineering Shirt</strong>
                <p>₱300</p>
                <span>BSCOE T-Shirt Merch</span>
            </div>
        </div>
    </section>

</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>