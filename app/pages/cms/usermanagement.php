<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>User Management</title>
</head>
<body>
    <header class="subheader">
        <nav>
            <ul>
                <li><a href="/index.php"><img src="/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>User Management</li>
            </ul>
        </nav>
    </header>
    <section class="main-content">
        <div class="sidenav">
            <div class="profile">
                <img src="/app/img/tpg-logo.jpg" alt="logo">
                <h2>Admin</h2>
            </div>
            <ul>
                <a href="/app/pages/cms/dashboard.php">
                    <li>Dashboard</li>
                </a>
                <a href="/app/pages/cms/usermanagement.php">
                    <li>User Management</li>
                </a>
                <a href="/app/pages/cms/orgmanagement.php">
                    <li>Organization Management</li>
                </a>
                <a href="/app/pages/cms/eventmanagement.php">
                    <li>Event Management</li>
                </a>
                <a href="/app/pages/cms/forummoderation.php">
                    <li>Forum Moderation</li>
                </a>
                <a href="/app/pages/cms/merchandiseapproval.php">
                    <li>Merchandise Approvals</li>
                </a>
                <a href="/app/pages/cms/report.php">
                    <li>Reports</li>
                </a>
            </ul>
        </div>
        <div class="content">
            <div class="content-header">
                <img src="/app/img/icons8-person-96.png" alt="dashboard">
                <h2>User Management</h2>
            </div>
            <div class="search">
                <input type="text" placeholder="Search for users">
            </div>
            <div class="card">
                <div class="card-item">
                    <img src="/app/img/icons8-person-96.png" alt="users">
                    <p>100</p>
                    <p>Total registered users</p>
                </div>
                <div class="card-item">
                    <img src="/app/img/icons8-add-user-96.png" alt="orgs">
                    <p>35</p>
                    <p>Active Users</p>
                </div>
                <div class="card-item">
                    <img src="/app/img/icons8-denied-96.png" alt="events">
                    <p>35</p>
                    <p>Inactive Users</p>
                </div>
                <div class="card-item">
                    <img src="/app/img/icons8-registration-96.png" alt="sales">
                    <p>35</p>
                    <p>Recent Registrations</p>
                </div>
            </div>
            <table>
                <caption>User List</caption>
                <tr>
                    <th></th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Date created</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>lalakingcaaath</td>
                    <td>Jericho Pio</td>
                    <td>piojericho@gmail.com</td>
                    <td>Active</td>
                    <td>January 10,2025</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>clarkyyy</td>
                    <td>Clark John Mones</td>
                    <td>clarkjohnmones@gmail.com</td>
                    <td>Active</td>
                    <td>December 13,2024</td>
                </tr>
            </table>
        </div>
    </section>
</body>
</html>

<?php
    include '/laragon/www/pup-engage/app/components/footer.php';
?>