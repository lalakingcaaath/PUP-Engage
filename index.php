<?php 
    session_start();

    //Check if the user is logged in
    if (isset($_SESSION['email'])) {
        include '../pup-engage/app/components/header-loggedin.php';
    } else {
        include '../pup-engage/app/components/header-default.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/dist/styles.css">
    <link rel="shortcut icon" href="./app/img/PUPLogo.png" type="image/x-icon">
    <title>Home</title>
</head>
<body>
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to PUP Engage: <br> Your Hub for Student Connections!</h1>
            <p>Explore organizations, join events, collaborate, and grow as a community.</p>
            <a href="./app/pages/cms/dashboard.php"><button>Explore Now</button></a>
            <a href="./app/pages/login.php"><button class="highlight">Join Us</button></a>
        </div>
    </section>
</body>
</html>

<?php
    include '../pup-engage/app/components/footer.php';
?>