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
    <title>PUP Hygears</title>
</head>
<body>


    <section class="organization-details">
        <div class="org-info">
            <img src="/app/img/Hygear.jpg" alt="PUP Hygears Logo">
            <h2>About PUP Hygears</h2>
            <p>PUP Hygears is a student organization committed to promoting research awareness and innovation among PUP students. The organization serves as a platform for aspiring researchers to develop their skills, expand their knowledge, and engage in scholarly activities that contribute to academic and scientific advancements.</p>
            <p><strong>Location:</strong> Polytechnic University of the Philippines, Manila</p>
          
            <p><strong>Founder:</strong> </p>
        </div>

        <div class="activities">
            <h2>What We Do</h2>
            <ul>
                <li><strong>Research Workshops:</strong> Attend sessions on academic research methodologies and best practices.</li>
                <li><strong>Innovation Projects:</strong> Engage in research-driven projects that contribute to technological and scientific advancements.</li>
                <li><strong>Conferences & Seminars:</strong> Participate in academic discussions and present research findings.</li>
                <li><strong>Community Outreach:</strong> Apply research to solve real-world community problems.</li>
            </ul>
        </div>

        <div class="contact-info">
            <h2>Contact Us</h2>
            <p><strong>Email:</strong> hygears@pup.edu.ph</p>
            <p><strong>Facebook:</strong> <a href="#">facebook.com/PUPHygears</a></p>
            <p><strong>Twitter:</strong> <a href="#">twitter.com/PUPHygears</a></p>
        </div>
    </section>
</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>