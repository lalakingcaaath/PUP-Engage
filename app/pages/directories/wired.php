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
    <link rel="stylesheet" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/dist/styles.css">
    <link rel="shortcut icon" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" type="image/x-icon">
    <title>Electrical Engineering - PUP Wired</title>
</head>
<body>


    <section class="organization-details">
        <div class="org-info">
            <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/Wired.jpg" alt="PUP Wired Logo">
            <h2>About PUP Wired</h2>
            <p>Electrical Engineering - PUP Wired is a student organization at PUP Manila committed to enhancing the technical expertise and professional growth of engineering students. Through technical training, hands-on workshops, and industry partnerships, the organization equips its members with the skills and knowledge needed to excel in the evolving engineering landscape.</p>
            <p><strong>Location:</strong> Polytechnic University of the Philippines, Manila</p>
            <p><strong>Established:</strong> [Insert Year]</p>
            <p><strong>Founder:</strong> [Insert Founder Name]</p>
        </div>

        <div class="activities">
            <h2>What We Do</h2>
            <ul>
                <li><strong>Technical Training:</strong> Participate in hands-on workshops on electrical engineering concepts and applications.</li>
                <li><strong>Industry Collaborations:</strong> Engage with professionals through seminars and networking events.</li>
                <li><strong>Innovative Projects:</strong> Work on research and development projects in the field of electrical engineering.</li>
                <li><strong>Competitions & Hackathons:</strong> Showcase skills in national and international competitions.</li>
            </ul>
        </div>

        <div class="contact-info">
            <h2>Contact Us</h2>
            <p><strong>Email:</strong> wired@pup.edu.ph</p>
            <p><strong>Facebook:</strong> <a href="#">facebook.com/PUPWired</a></p>
            <p><strong>Twitter:</strong> <a href="#">twitter.com/PUPWired</a></p>
        </div>
    </section>
</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>