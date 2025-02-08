<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/dist/styles.css">
    <link rel="shortcut icon" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" type="image/x-icon">
    <title>Forum Moderation</title>
</head>
<body>
    <header class="subheader">
        <nav>
            <ul>
                <li><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/index.php"><img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Forum Moderation</li>
            </ul>
        </nav>
    </header>
    <section class="main-content">
        <div class="sidenav">
            <div class="profile">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/adminlogo.png" alt="logo">
                <h2>Admin</h2>
            </div>
            <ul>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/dashboard.php">
                    <li>Dashboard</li>
                </a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/usermanagement.php">
                    <li>User Management</li>
                </a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/orgmanagement.php">
                    <li>Organization Management</li>
                </a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/eventmanagement.php">
                    <li>Event Management</li>
                </a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/forummoderation.php">
                    <li>Forum Moderation</li>
                </a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/merchandiseapproval.php">
                    <li>Merchandise Approvals</li>
                </a>
            </ul>
        </div>
        <div class="content">
            <div class="content-header">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/icons8-person-96.png" alt="dashboard">
                <h2>Forum Moderation</h2>
            </div>
            <div class="reported-content">
                <div class="post">
                    <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/icons8-person-96.png" alt="profile-image">
                    <div class="reported-profile">
                        <strong>Snitch sa CEA</strong>
                        <p>Clark John Mones</p>
                    </div>
                </div>
                <div class="reported-by">
                    <p>Reported by: Jhun Tolentino</p>
                    <p>Reason: Hate Speech</p>
                    <p>Date: 12/13/2024</p>
                </div>
            </div>
            <div class="reported-container">
                <button class="highlight">Approve</button>
                <button>Reject</button>
            </div>
            <div class="reported-content">
                <div class="post">
                    <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/icons8-person-96.png" alt="profile-image">
                    <div class="reported-profile">
                        <strong>Snitch sa CEA</strong>
                        <p>Clark John Mones</p>
                    </div>
                </div>
                <div class="reported-by">
                    <p>Reported by: Jhun Tolentino</p>
                    <p>Reason: Hate Speech</p>
                    <p>Date: 12/13/2024</p>
                </div>
            </div>
            <div class="reported-container">
                <button class="highlight">Approve</button>
                <button>Reject</button>
            </div>
        </div>
    </section>
</body>
</html>

<?php include '/laragon/www/pup-engage/app/components/footer.php'; ?>