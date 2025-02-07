<?php
// usermanagement.php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "pup_engage";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all users
$userQuery = "SELECT id, firstName, lastName, studentID, email, createdAt FROM users ORDER BY createdAt DESC";
$userResult = $conn->query($userQuery);

// Fetch forum statistics
$userCountSQL = "SELECT COUNT(*) AS totalUsers FROM users";
$userCountResult = $conn->query($userCountSQL);
$userCount = $userCountResult->fetch_assoc()['totalUsers'];

$postCountSQL = "SELECT COUNT(*) AS totalPosts FROM threads";
$postCountResult = $conn->query($postCountSQL);
$postCount = $postCountResult->fetch_assoc()['totalPosts'];

$activeUserCount = 0;
if (isset($_SESSION['online_users'])) {
    $activeUserCount = count($_SESSION['online_users']);
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
                <img src="/app/img/adminlogo.png" alt="logo">
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
                    <p><?php echo $userCount; ?></p>
                    <p>Total Registered Users</p>
                </div>
                <div class="card-item">
                    <img src="/app/img/icons8-add-user-96.png" alt="active-users">
                    <p><?php echo $activeUserCount; ?></p>
                    <p>Active Users</p>
                </div>
                <div class="card-item">
                    <img src="/app/img/icons8-registration-96.png" alt="posts">
                    <p><?php echo $postCount; ?></p>
                    <p>Total Posts</p>
                </div>
            </div>
            <table>
                <caption>User List</caption>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Student Number</th>
                        <th>Email</th>
                        <th>Date Created</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($userResult->num_rows > 0) {
                        while ($user = $userResult->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $user['id'] . "</td>";
                            echo "<td>" . htmlspecialchars($user['firstName'] . ' ' . $user['lastName']) . "</td>";
                            echo "<td>" . htmlspecialchars($user['studentID']) . "</td>";
                            echo "<td>" . htmlspecialchars($user['email']) . "</td>";
                            echo "<td>" . date("F j, Y, g:i a", strtotime($user['createdAt'])) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No users found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <?php $conn->close(); ?>
    <?php
    include '/laragon/www/pup-engage/app/components/footer.php';
    ?>
</body>
</html>