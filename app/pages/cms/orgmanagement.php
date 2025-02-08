<?php
// Database Connection
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "pup_engage";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mapping of org_id to their respective file names
$org_files = [
    1 => "orgtpu.php",   // The Programmers' Guild
    2 => "orgpen.php",   // PUP Electrical Engineering Network
    3 => "orgsets.php",  // Society of Engineering Technology Students
    4 => "orgmsc.php",   // Microsoft Student Community
    5 => "orghygr.php",  // PUP Hygears
    6 => "orgeepw.php",  // Electrical Engineering - PUP Wired
];

// Query to fetch organizations and count their members
$org_query = "SELECT 
                o.id AS org_id, 
                o.name AS org_name, 
                o.established_date, 
                (SELECT COUNT(*) FROM members m WHERE m.organization_id = o.id) AS member_count
              FROM organizations o";

$org_result = $conn->query($org_query);
?>

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
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/adminlogo.png" alt="logo">
                <h2>Admin</h2>
            </div>
            <ul>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/dashboard.php"><li>Dashboard</li></a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/usermanagement.php"><li>User Management</li></a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/orgmanagement.php"><li>Organization Management</li></a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/eventmanagement.php"><li>Event Management</li></a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/forummoderation.php"><li>Forum Moderation</li></a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/merchandiseapproval.php"><li>Merchandise Approvals</li></a>
                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/report.php"><li>Reports</li></a>
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
                    <th>Organization Name</th>
                    <th>No. of members</th>
                    <th>Date created</th>
                    <th>Actions</th>
                </tr>
                <?php if ($org_result->num_rows > 0): ?>
                    <?php while ($org = $org_result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($org['org_name']); ?></td>
                            <td><?php echo $org['member_count']; ?></td>
                            <td><?php echo date("F d, Y", strtotime($org['established_date'])); ?></td>
                            <td>
                                <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/details/<?php echo isset($org_files[$org['org_id']]) ? $org_files[$org['org_id']] : 'default.php'; ?>?org_id=<?php echo $org['org_id']; ?>">
                                    <button>View/Edit</button>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="4">No organizations found.</td></tr>
                <?php endif; ?>
            </table>
        </div>
    </section>
</body>
</html>

<?php
$conn->close();
?>
