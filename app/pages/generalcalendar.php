<?php 
    session_start();

    //Check if the user is logged in
    if (isset($_SESSION['email'])) {
        include '../components/header-loggedin.php';
    } else {
        include '../components/header-default.php';
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
    <title>Event Calendar</title>
</head>
<body>
    <section class="general-calendar">
        <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=Asia%2FManila&mode=MONTH&showPrint=0&src=MzA2ODU1MTRkZDUxMDUyZWE3NjA5OTFiNWFjMWNmNGUxOTc1MWUwZTY4MzJjYmZlNjAzMjU2NjQxNTU0ZDA0YUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%237CB342" style="border:solid 1px #777" width="1000" height="600" frameborder="0" scrolling="no"></iframe>
    </section>
</body>
</html>

<?php
    include '../components/footer.php';
?>