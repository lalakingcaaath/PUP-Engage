<?php 
    session_start();

    // Check if the user is logged in
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
    <link rel="stylesheet" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/dist/styles.css">
    <link rel="shortcut icon" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" type="image/x-icon">
    <title>Electrical Engineering - PUP Electrical Engineering Network</title>
</head>
<body>
    <section class="organization-details">
        <div class="org-info">
            <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/EEN.jpg" alt="PUP Electrical Engineering Network Logo">
            <h2>About PUP Electrical Engineering Network</h2>
            <p>PUP Electrical Engineering Network (PUP EEN) is a student organization at PUP Manila dedicated to fostering innovation, collaboration, and excellence in the field of electrical engineering. Through mentorship, technical training, and industry connections, PUP EEN empowers students to excel in their academic and professional pursuits.</p>
            <p><strong>Location:</strong> Polytechnic University of the Philippines, Manila</p>
            <p><strong>Established:</strong> </p>
            <p><strong>Founder:</strong> </p>
        </div>

        <div class="activities">
            <h2>What We Do</h2>
            <ul>
                <li><strong>Mentorship Programs:</strong> Connect with experienced professionals and alumni for career guidance.</li>
                <li><strong>Technical Workshops:</strong> Gain hands-on experience with electrical engineering tools and technologies.</li>
                <li><strong>Industry Partnerships:</strong> Collaborate with leading companies through internships and seminars.</li>
                <li><strong>Research & Innovation:</strong> Engage in projects that push the boundaries of electrical engineering.</li>
                <li><strong>Competitions & Hackathons:</strong> Represent PUP in national and international competitions.</li>
            </ul>
        </div>

        <div class="contact-info">
            <h2>Contact Us</h2>
            <p><strong>Email:</strong> eenetwork@pup.edu.ph</p>
            <p><strong>Facebook:</strong> <a href="#">facebook.com/PUPEENetwork</a></p>
            <p><strong>Twitter:</strong> <a href="#">twitter.com/PUPEENetwork</a></p>
        </div>
    </section>
</body>
</html>

<?php
    include 'C:\laragon\www\pup-engage\app\components\footer.php';
?>
