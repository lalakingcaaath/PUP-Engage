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
    <title>Microsoft Student Community</title>
</head>
<body>


    <section class="organization-details">
        <div class="org-info">
            <img src="/app/img/MSC.jfif" alt="Microsoft Student Community Logo">
            <h2>About Microsoft Student Community</h2>
            <p>The Microsoft Student Community at Polytechnic University of the Philippines (PUP) is a student-led organization dedicated to fostering a passion for technology, innovation, and professional growth.</p>
            <p><strong>Location:</strong> Polytechnic University of the Philippines, Manila</p>
            <p><strong>Established:</strong> January 2024</p>
       
        </div>

        <div class="activities">
            <h2>What We Do</h2>
            <ul>
                <li><strong>Workshops & Webinars:</strong> Regular sessions on the latest Microsoft technologies and tools.</li>
                <li><strong>Hackathons & Competitions:</strong> Opportunities to apply skills and solve real-world problems.</li>
                <li><strong>Mentorship Programs:</strong> Guidance from experienced professionals and alumni.</li>
                <li><strong>Networking Events:</strong> Connect with like-minded students, industry experts, and potential employers.</li>
            </ul>
        </div>

        <div class="contact-info">
            <h2>Contact Us</h2>
            <p><strong>Email:</strong> msc@pup.edu.ph</p>
            <p><strong>Facebook:</strong> <a href="#">facebook.com/PUPMSC</a></p>
            <p><strong>Twitter:</strong> <a href="#">twitter.com/PUPMSC</a></p>
        </div>
    </section>
</body>
</html>
<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>