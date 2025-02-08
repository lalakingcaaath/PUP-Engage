<?php
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pup_engage";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch total registered users
$userQuery = "SELECT COUNT(*) AS total_users FROM users";
$userResult = $conn->query($userQuery);
$userCount = $userResult->fetch_assoc()['total_users'];

// Fetch total registered organizations
$orgQuery = "SELECT COUNT(*) AS total_orgs FROM organizations";
$orgResult = $conn->query($orgQuery);
$orgCount = $orgResult->fetch_assoc()['total_orgs'];

// Fetch total upcoming & past events
$eventQuery = "SELECT COUNT(*) AS total_events FROM events";
$eventResult = $conn->query($eventQuery);
$eventCount = $eventResult->fetch_assoc()['total_events'];

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Dashboard</title>
</head>
<body>
    <header class="subheader">
        <nav>
            <ul>
                <li><a href="/index.php"><img src="/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Dashboard</li>
            </ul>
        </nav>
    </header>
    <section class="main-content">
        <div class="sidenav">
            <div class="profile">
                <img src="/app/img/adminlogo.png" alt="logo">
                <h2>Admin</h2>
            </div>
            <ul>
                <a href="/app/pages/cms/dashboard.php"><li>Dashboard</li></a>
                <a href="/app/pages/cms/usermanagement.php"><li>User Management</li></a>
                <a href="/app/pages/cms/orgmanagement.php"><li>Organization Management</li></a>
                <a href="/app/pages/cms/eventmanagement.php"><li>Event Management</li></a>
                <a href="/app/pages/cms/forummoderation.php"><li>Forum Moderation</li></a>
                <a href="/app/pages/cms/merchandiseapproval.php"><li>Merchandise Approvals</li></a>
            </ul>
        </div>
        <div class="content">
            <div class="content-header">
                <img src="/app/img/icons8-dashboard-24.png" alt="dashboard">
                <h2>Dashboard</h2>
            </div>
            <div class="card">
                <div class="card-item">
                    <img src="/app/img/icons8-person-96.png" alt="users">
                    <p><?php echo $userCount; ?></p>
                    <p>Total Registered Users</p>
                </div>
                <div class="card-item">
                    <img src="/app/img/icons8-community-96.png" alt="orgs">
                    <p><?php echo $orgCount; ?></p>
                    <p>Total Organizations Registered</p>
                </div>
                <div class="card-item">
                    <img src="/app/img/icons8-calendar-96.png" alt="events">
                    <p><?php echo $eventCount; ?></p>
                    <p>Upcoming & Past Events</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<?php include '/laragon/www/pup-engage/app/components/footer.php'; ?>
