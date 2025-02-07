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
    <title>PUP Society of Engineering Technology Students</title>
</head>
<body>


    <section class="organization-details">
        <div class="org-info">
            <img src="/app/img/SET.jpg" alt="PUP SET Logo">
            <h2>About PUP Society of Engineering Technology Students</h2>
            <p>The PUP Society of Engineering Technology Students (SETS) is a student organization dedicated to uniting and empowering students in the field of Engineering Technology. The organization serves as a platform for aspiring engineers and technologists to enhance their technical skills, leadership abilities, and professional development.</p>
            <p><strong>Location:</strong> Polytechnic University of the Philippines, Manila</p>
            <p><strong>Established:</strong> </p>
         
        </div>

        <div class="activities">
            <h2>What We Do</h2>
            <ul>
                <li><strong>Technical Training:</strong> Hands-on experience with industry tools and practices.</li>
                <li><strong>Seminars & Workshops:</strong> Gain insights from industry professionals and experts.</li>
                <li><strong>Competitions & Challenges:</strong> Engage in technical and engineering-related contests.</li>
                <li><strong>Community Outreach:</strong> Initiatives aimed at applying engineering for social good.</li>
            </ul>
        </div>

        <div class="contact-info">
            <h2>Contact Us</h2>
            <p><strong>Email:</strong> set@pup.edu.ph</p>
            <p><strong>Facebook:</strong> <a href="#">facebook.com/PUPSET</a></p>
            <p><strong>Twitter:</strong> <a href="#">twitter.com/PUPSET</a></p>
        </div>
    </section>
</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>