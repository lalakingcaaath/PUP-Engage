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