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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Organization Directory</title>
</head>
<body>
    <section class="directory">
        <div class="search-bar">
            <input type="text" placeholder="Search for organization">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
        <div class="directory-header">
            <h2>Student Organizations</h2>
            <p>Main Campus</p>
        </div>
        <div class="directory-card">
            <div class="directory-item">
                <img src="/app/img/PUPLogo.png" alt="logo">
                <p><strong>The Programmers' Guild</strong><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ab a rerum, quaerat minus quasi ducimus, fugit placeat dolorem quidem nam ullam vel natus distinctio ad deleniti perspiciatis quia praesentium?</p>
            </div>
            <div class="directory-item">
                <img src="/app/img/PUPLogo.png" alt="logo">
                <p><strong>Microsoft Student Community</strong><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ab a rerum, quaerat minus quasi ducimus, fugit placeat dolorem quidem nam ullam vel natus distinctio ad deleniti perspiciatis quia praesentium?</p>
            </div>
            <div class="directory-item">
                <img src="/app/img/PUPLogo.png" alt="logo">
                <p><strong>Society of Electrical Engineering Students</strong><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ab a rerum, quaerat minus quasi ducimus, fugit placeat dolorem quidem nam ullam vel natus distinctio ad deleniti perspiciatis quia praesentium?</p>
            </div>
            <div class="directory-item">
                <img src="/app/img/PUPLogo.png" alt="logo">
                <p><strong>PUP Hygears</strong><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ab a rerum, quaerat minus quasi ducimus, fugit placeat dolorem quidem nam ullam vel natus distinctio ad deleniti perspiciatis quia praesentium?</p>
            </div>
            <div class="directory-item">
                <img src="/app/img/PUPLogo.png" alt="logo">
                <p><strong>Electrical Engineering - Wired</strong><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ab a rerum, quaerat minus quasi ducimus, fugit placeat dolorem quidem nam ullam vel natus distinctio ad deleniti perspiciatis quia praesentium?</p>
            </div>
            <div class="directory-item">
                <img src="/app/img/PUPLogo.png" alt="logo">
                <p><strong>Society of Engineering Technology Students</strong><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ab a rerum, quaerat minus quasi ducimus, fugit placeat dolorem quidem nam ullam vel natus distinctio ad deleniti perspiciatis quia praesentium?</p>
            </div>
        </div>
        <div class="up">
            <button><i class="fa-solid fa-caret-up"></i></button>
        </div>
    </section>
</body>
</html>

<?php
    include '../components/footer.php';
?>