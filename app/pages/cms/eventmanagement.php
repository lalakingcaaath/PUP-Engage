<?php
// Start session if needed
session_start();

// Database connection
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "pup_engage"; 

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch events from database
$sql = "SELECT event_id, event_name, organizer_details, event_type, start_date, end_date FROM events ORDER BY start_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Event Management</title>
</head>
<body>
    <header class="subheader">
        <nav>
            <ul>
                <li><a href="/index.php"><img src="/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Event Management</li>
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
                <a href="dashboard.php"><li>Dashboard</li></a>
                <a href="usermanagement.php"><li>User Management</li></a>
                <a href="orgmanagement.php"><li>Organization Management</li></a>
                <a href="eventmanagement.php"><li>Event Management</li></a>
                <a href="forummoderation.php"><li>Forum Moderation</li></a>
                <a href="merchandiseapproval.php"><li>Merchandise Approvals</li></a>
            </ul>
        </div>
        <div class="content">
            <div class="content-header">
                <img src="/app/img/icons8-person-96.png" alt="dashboard">
                <h2>Event Management</h2>
            </div>
            <div class="search">
                <input type="text" placeholder="Search for event">
            </div>
            <div class="card">
                <div class="card-item">
                    <img src="/app/img/icons8-event-accepted-tentatively-96.png" alt="users">
                    <p><?php echo $result->num_rows; ?></p>
                    <p>Total number of events</p>
                </div>
                <!-- You can modify the other counters accordingly -->
            </div>
            <table>
                <caption>Event List</caption>
                <tr>
                    <th>#</th>
                    <th>Event ID</th>
                    <th>Event Name</th>
                    <th>Organizer</th>
                    <th>Event Type</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                    $count = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $count . "</td>";
                        echo "<td>" . $row["event_id"] . "</td>";
                        echo "<td>" . $row["event_name"] . "</td>";
                        echo "<td>" . $row["organizer_details"] . "</td>";
                        echo "<td>" . $row["event_type"] . "</td>";
                        echo "<td>" . $row["start_date"] . "</td>";
                        echo "<td>" . $row["end_date"] . "</td>";
                        echo "</tr>";
                        $count++;
                    }
                } else {
                    echo "<tr><td colspan='7'>No events found</td></tr>";
                }
                ?>
            </table>
            <a href="addevent.php"><button class="highlight">Add event</button></a>
        </div>
    </section>
</body>
</html>

<?php
$conn->close();
include '/laragon/www/pup-engage/app/components/footer.php';
?>
