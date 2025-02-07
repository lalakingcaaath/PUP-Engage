<?php 
    session_start();

    //Check if the user is logged in
    if (isset($_SESSION['email'])) {
        include '/laragon/www/pup-engage/app/components/header-loggedin.php';
    } else {
        include '/laragon/www/pup-engage/app/components/header-default.php';
    }


// Database connection
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "pup_engage";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/dist/styles.css">
    <link rel="shortcut icon" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" type="image/x-icon">
    <title>Forum Announcements</title>
</head>
<body>
    <section class="forum-announcements">
        <div class="forum-hero">
            <div class="forum-hero-content">
                <h1>📢 Forum Announcements</h1>
                <p>Stay updated with the latest news and important updates from the PUP Engage Community Forum.</p>
            </div>
        </div>

        <div class="announcement-content">
            <h1>Latest Announcements</h1>

            <div class="announcement-card">
                <h2>🚀 New Forum Features Released!</h2>
                <p><strong>Date:</strong> February 7, 2025</p>
                <p>We’ve introduced a voting system, profile customization, and real-time notifications! Explore the new features and enhance your forum experience.</p>
            </div>

            <div class="announcement-card">
                <h2>📅 Upcoming Community Meetup</h2>
                <p><strong>Date:</strong> March 15, 2025</p>
                <p>Join us for an exclusive online meetup to discuss future updates, student concerns, and collaboration opportunities.</p>
            </div>

            <div class="announcement-card">
                <h2>⚠️ Forum Maintenance Scheduled</h2>
                <p><strong>Date:</strong> February 10, 2025 (12:00 AM - 3:00 AM)</p>
                <p>The forum will be temporarily unavailable due to scheduled maintenance. We appreciate your patience!</p>
            </div>

            <h2>How to Stay Updated?</h2>
            <ul>
                <li>Enable <strong>email notifications</strong> in your profile settings.</li>
                <li>Follow our official <a href="https://www.facebook.com/ThePUPOfficial">Facebook page</a> for quick updates.</li>
                <li>Bookmark this page and check back regularly.</li>
            </ul>

            <p>Thank you for being a part of the PUP Engage Community. Stay active and connected! 🎉</p>
        </div>
    </section>
</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>
