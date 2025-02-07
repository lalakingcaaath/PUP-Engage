<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/dist/styles.css">
    <link rel="shortcut icon" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" type="image/x-icon">
    <title>Organization Management</title>
</head>
<body>
    <header class="subheader">
        <nav>
            <ul>
                <li><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/index.php"><img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Organization Management</li>
            </ul>
        </nav>
    </header>
    <section class="main-content">
        <div class="sidenav">
            <div class="profile">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/tpg-logo.jpg" alt="logo">
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
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/report.php">
                    <li>Reports</li>
                </a>
            </ul>
        </div>
        <div class="content">
            <div class="content-header">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/icons8-community-96.png" alt="organization">
                <h2>Organization Management</h2>
            </div>
            <div class="search">
                <input type="text" placeholder="Search for organizations">
            </div>
            <table>
                <caption>Organization List</caption>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Organization Name</th>
                    <th>Status</th>
                    <th>No. of members</th>
                    <th>Date created</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>TPG</td>
                    <td>The Programmers' Guild</td>
                    <td>Active</td>
                    <td>10</td>
                    <td>October 23, 2024</td>
                </tr>
            </table>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/details/addorg.php"><button class="highlight">Add organization</button></a>
                <a href="#"><button>Remove</button></a>
        </div>
    </section>
</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>