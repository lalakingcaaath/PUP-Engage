<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
header("Location: https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/login.php"); // Redirect to the login page or another page
exit();
?>
