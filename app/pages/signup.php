<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Sign Up</title>
</head>
<body>
    <header class="header-signup">
        <nav>
            <ul>
                <li><a href="/index.php"><img src="/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Sign Up</li>
            </ul>
        </nav>
    </header>
    <section class="signup">
        <div class="signup-content">
            <div class="hero-text">
                <img src="/app/img/PUPLogo.png" alt="PUP Logo">
                <h2>PUP Engage: <br> Your Hub for Student Connections!</h2>
            </div>
            <div class="signup-form">
                <form>
                    <label for="fname">First Name</label>
                    <input type="text" placeholder="Enter your first name" id="fname">
                    <label for="lname">Last Name</label>
                    <input type="text" placeholder="Enter your last name" id="lname">
                    <label for="studentID">Student ID</label>
                    <input type="text" placeholder="Enter your Student ID" id="studentID">
                    <label for="email">Email</label>
                    <input type="text" placeholder="Enter your email" name="email" id="email">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Enter your password" name="password" id="password">
                    <button type="submit">Register</button>
                    <label for="checkbox"><input type="checkbox" name="checkbox" id="checkbox">I agree</label>
                    <p>By checking you agree that you are a student at the Polytechnic University of the Philippines.</p>
                </form>
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
                <li><a href="#">Mechandise Store</a></li>
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