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
    <link rel="stylesheet" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/dist/styles.css">
    <link rel="shortcut icon" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Organization Directory</title>
</head>
<body>
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
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/TPG.jpg" alt="logo">
                <p><strong><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/directories/tpg.php">The Programmers' Guild</a></strong><br> A dynamic, non-academic student organization at PUP dedicated to fostering a strong community of programmers, developers, and tech enthusiasts.</p>
            </div>
            <div class="directory-item">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/MSC.jfif" alt="logo">
                <p><strong><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/directories/msc.php">Microsoft Student Community</a></strong><br> A student-led organization at PUP fostering a passion for technology, innovation, and professional growth.</p>
            </div>
            <div class="directory-item">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/SET.jpg" alt="logo">
                <p><strong><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/directories/sets.php">Society of Engineering Technology Students</a></strong><br> A student organization at PUP uniting and empowering students in the field of Engineering Technology.</p>
            </div>
            <div class="directory-item">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/Hygear.jpg" alt="logo">
                <p><strong><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/directories/hygears.php">PUP Hygears</a></strong><br> A student organization committed to promoting research awareness and innovation among PUP students.</p>
            </div>
            <div class="directory-item">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/Wired.jpg" alt="logo">
                <p><strong><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/directories/wired.php">Electrical Engineering - PUP Wired</a></strong><br> A student organization at PUP Manila dedicated to enhancing engineering students' technical expertise through training and industry partnerships.</p>
            </div>
            <div class="directory-item">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/EEN.jpg" alt="logo">
                <p><strong><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/directories/een.php">PUP Electrical Engineering Network</a></strong><br> A student organization at PUP dedicated to uniting and empowering Electrical Engineering students through training and collaboration.</p>
            </div>
        </div>
        <div class="up">
            <button><i class="fa-solid fa-caret-up"></i></button>
        </div>
    </section>
</body>
</html>

<?php
    include '../components/footer.php';
?>