<?php

// Initialize online users tracking if not set
if (!isset($_SESSION['online_users'])) {
    $_SESSION['online_users'] = [];
}

// Update last active time for logged-in user
if (isset($_SESSION['user_id'])) {
    $_SESSION['online_users'][$_SESSION['user_id']] = time();
}

// Remove inactive users after 5 minutes
$inactiveTime = 300; // 5 minutes
$currentTime = time();

foreach ($_SESSION['online_users'] as $userID => $lastActive) {
    if ($currentTime - $lastActive > $inactiveTime) {
        unset($_SESSION['online_users'][$userID]); // Remove inactive users
    }
}
?>


<header class="main-header">
        <nav>
            <ul>
                <li><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/index.php"><img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" alt="PUP logo"></a></li>
                <li><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/index.php">Home</a></li>
                <li><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/directory.php">Directory</a></li>
                <li><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/generalcalendar.php">Calendar</a></li>
                <li><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/forum.php">Forum</a></li>
                <li><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/store/store.php">Store</a></li>
                <li><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/profile.php">Profile</a></li>
                <li><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>