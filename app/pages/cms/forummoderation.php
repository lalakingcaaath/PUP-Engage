<?php 
session_start();

// Start output buffering
ob_start();
include '/laragon/www/pup-engage/app/components/header-loggedin.php';
// Clean the output buffer to remove the header HTML
ob_clean();

// Database connection
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "pup_engage";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch total posts
$postCountSQL = "SELECT COUNT(*) AS totalPosts FROM threads";
$postCountResult = $conn->query($postCountSQL);
$totalPosts = $postCountResult->fetch_assoc()['totalPosts'];

// Fetch total comments
$commentCountSQL = "SELECT COUNT(*) AS totalComments FROM comments";
$commentCountResult = $conn->query($commentCountSQL);
$totalComments = $commentCountResult->fetch_assoc()['totalComments'];

// Fetch thread list with user details
$threadsSQL = "SELECT t.id, t.title, t.createdAt, u.firstName, u.lastName 
               FROM threads t 
               JOIN users u ON t.userID = u.id
               ORDER BY t.createdAt DESC";
$threadsResult = $conn->query($threadsSQL);

// Stop output buffering and discard any leftover content
ob_end_clean();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
            <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/adminlogo.png" alt="Admin Logo">
            <h2>Admin</h2>
        </div>
        <ul>
            <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/dashboard.php"><li>Dashboard</li></a>
            <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/usermanagement.php"><li>User Management</li></a>
            <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/orgmanagement.php"><li>Organization Management</li></a>
            <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/eventmanagement.php"><li>Event Management</li></a>
            <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/forummoderation.php"><li>Forum Moderation</li></a>
            <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/merchandiseapproval.php"><li>Merchandise Approvals</li></a>
        </ul>
    </div>
    <div class="content">
        <div class="content-header">
            <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/icons8-person-96.png" alt="Forum">
            <h2>Forum Moderation</h2>
        </div>
        <div class="search">
            <input type="text" placeholder="Search for threads">
        </div>
        <div class="card">
            <div class="card-item">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/icons8-inbox-96.png" alt="Total Posts">
                <p><?php echo $totalPosts; ?></p>
                <p>Total Posts</p>
            </div>
            <div class="card-item">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/icons8-message-96.png" alt="Total Comments">
                <p><?php echo $totalComments; ?></p>
                <p>Total Comments</p>
            </div>
            <div class="card-item">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/icons8-proactivity-96.png" alt="Active Threads">
                <p>6</p> <!-- Static value -->
                <p>Active Threads</p>
            </div>
            <div class="card-item">
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/icons8-alert-96.png" alt="Reported Posts">
                <p>2</p> <!-- Static value -->
                <p>Reported Posts</p>
            </div>
        </div>
        <table>
            <caption>Thread List</caption>
            <tr>
                <th>#</th>
                <th>Thread Title</th>
                <th>Created by</th>
                <th>Created Date</th>
                <th>Status</th>
            </tr>
            <?php
            if ($threadsResult->num_rows > 0) {
                while ($thread = $threadsResult->fetch_assoc()) {
                    $threadID = $thread['id'];
                    $title = htmlspecialchars($thread['title']);
                    $author = htmlspecialchars($thread['firstName'] . " " . $thread['lastName']);
                    $createdAt = date("F j, Y", strtotime($thread['createdAt']));

                    echo "<tr>
                            <td>$threadID</td>
                            <td>$title</td>
                            <td>$author</td>
                            <td>$createdAt</td>
                            <td>
                                <select name='forumstatus' id='forumstatus-$threadID'>
                                    <option value='Active'>Active</option>
                                    <option value='Lock'>Lock</option>
                                    <option value='Archive'>Archive</option>
                                </select>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No threads available.</td></tr>";
            }
            ?>
        </table>
        <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/details/reported.php"><button>View Reported Posts</button></a>
    </div>
</section>
</body>
</html>

<?php 
$conn->close();
include '/laragon/www/pup-engage/app/components/footer.php';
?>