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
    <title>About Us</title>
</head>
<body>
    <section class="about">
        <h2>About Us</h2>
        <p>Welcome to PUP Engage, the dedicated digital platform designed exclusively for the Polytechnic University of the Philippines (PUP) student community.
            At PUP Engage, our mission is to empower students by providing a centralized hub that connects organizations, facilitates collaboration, and strengthens the bonds of the PUP community. This platform is built with the vision of enhancing communication, fostering inclusivity, and streamlining organizational activities for a more connected and thriving campus life.
        </p>
        <h2>What We Offer</h2>
        <ul>
            <li>Organization Directory <br>
                <span>Discover and explore all recognized student organizations and the Student Council in one convenient place. Whether you're looking to join a group or learn more about their activities, the directory provides comprehensive information at your fingertips.    
                </span>
            </li>
            <li>Event Calendar <br>
                <span>Stay informed and never miss out! Our centralized calendar showcases upcoming events, activities, and deadlines, ensuring you're always up-to-date with what’s happening on campus.
                </span>
            </li>
            <li>Member Profiles <br>
                <span>Highlight your journey and affiliations with personalized profiles. Showcase your involvement with student organizations, your contributions, and your achievements.
                </span>
            </li>
            <li>Community Forum <br><span>
                Engage in meaningful conversations, share experiences, and collaborate on projects with fellow students. The forum serves as a space to exchange ideas and foster a sense of community.
            </span></li>
            <li>Merchandise Store <br><span>
                Support your favorite organizations by purchasing merchandise directly through our platform. The integrated online payment system makes it easier than ever to contribute to fundraising efforts while grabbing some cool gear.
            </span></li>
        </ul>
        <h2>Why choose PUP Engage?</h2>
        <p>PUP Engage is more than just a platform—it’s a bridge that connects students, organizations, and opportunities. By bringing everything together in one digital space, we aim to cultivate a culture of collaboration, innovation, and community spirit.
            Join us as we redefine the way PUP students connect, engage, and grow. Together, we can build a more vibrant and unified student community.
        </p>
        <strong>Welcome to your hub for student connections. Welcome to PUP Engage!</strong>
    </section>
</body>
</html>

<?php
    include '../components/footer.php';
?>