<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/dist/styles.css">
    <link rel="shortcut icon" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" type="image/x-icon">
    <title>Reset Password</title>
</head>
<body>
    <header class="header-reset">
        <nav>
            <ul>
                <li><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/index.php"><img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Reset Password</li>
            </ul>
        </nav>
    </header>
    <section class="reset">
        <div class="container">
            <div class="reset-content">
                <label for="reset-pass">Reset Password</label>
                <input type="text" placeholder="Enter your email" name="email" id="email">
                <div class="reset-buttons">
                    <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/login.php"><button>Cancel</button></a>
                    <button type="reset">Reset</button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<?php
    include '../components/footer.php';
?>