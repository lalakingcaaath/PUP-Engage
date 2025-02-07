<?php 
    session_start();

    //Check if the user is logged in
    if (isset($_SESSION['email'])) {
        include 'C:\laragon\www\pup-engage\app\components\header-loggedin.php';
    } else {
        include 'C:\laragon\www\pup-engage\app\components\header-default.php';
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
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>The Programmers' Guild</title>
</head>
<body>


    <section class="organization-details">
        <div class="org-info">
            <img src="/app/img/TPG.jpg" alt="The Programmers' Guild Logo">
            <h2>About The Programmers' Guild</h2>
            <p>The Programmers' Guild is a dynamic, non-academic student organization at the Polytechnic University of the Philippines (PUP) dedicated to fostering a strong community of programmers, developers, and tech enthusiasts.</p>
            <p><strong>Location:</strong> Polytechnic University of the Philippines, Manila</p>
            <p><strong>Established:</strong> 2013</p>
            
        </div>

        <div class="activities">
            <h2>What We Do</h2>
            <ul>
                <li><strong>Coding Competitions:</strong> Participate in hackathons and competitive programming challenges.</li>
                <li><strong>Workshops & Seminars:</strong> Learn new programming languages, frameworks, and industry practices.</li>
                <li><strong>Mentorship Programs:</strong> Get guidance from experienced developers and industry professionals.</li>
                <li><strong>Collaborative Projects:</strong> Work on real-world applications and open-source contributions.</li>
            </ul>
        </div>

        <div class="contact-info">
            <h2>Contact Us</h2>
            <p><strong>Email:</strong> tpg@pup.edu.ph</p>
            <p><strong>Facebook:</strong> <a href="#">facebook.com/PUPTPG</a></p>
            <p><strong>Twitter:</strong> <a href="#">twitter.com/PUPTPG</a></p>
        </div>
    </section>

</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>