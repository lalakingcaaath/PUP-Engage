<?php
// Start session
session_start();

// Database Connection
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "pup_engage";

// Create connection
$conn = new mysqli($servername, $username, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch Organization ID dynamically from URL (fallback to default org_id if not set)
$org_id = isset($_GET['org_id']) ? intval($_GET['org_id']) : 5;

// Fetch Organization Details
$org_query = "SELECT * FROM organizations WHERE id = $org_id";
$org_result = $conn->query($org_query);

// Check if query executed successfully
if (!$org_result) {
    die("Error fetching organization: " . $conn->error);
}

// Fetch organization details safely
$organization = $org_result->fetch_assoc();
$org_name = isset($organization['name']) ? htmlspecialchars($organization['name']) : 'Organization Not Found';
$org_desc = isset($organization['description']) ? htmlspecialchars($organization['description']) : 'No description available';
$org_email = isset($organization['email']) ? htmlspecialchars($organization['email']) : 'No email provided';
$org_date = isset($organization['established_date']) ? htmlspecialchars($organization['established_date']) : 'Unknown date';

// Fetch Users NOT in Organization
$user_query = "SELECT id, CONCAT(firstName, ' ', lastName) AS full_name, email FROM users 
               WHERE id NOT IN (SELECT user_id FROM members WHERE organization_id = $org_id)";
$user_result = $conn->query($user_query);

// Fetch Members (Removed status and active fields)
$members_query = "SELECT users.id, CONCAT(users.firstName, ' ', users.lastName) AS full_name, users.email, members.role, members.date_joined 
                  FROM members JOIN users ON members.user_id = users.id WHERE members.organization_id = $org_id";
$members_result = $conn->query($members_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,wght@0,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/styles.css">
    <script src="/app/js/addMemberModal.js" defer></script>
    <script>
        function confirmRemove() {
            return confirm("Are you sure you want to remove this member?");
        }
    </script>
    <link rel="shortcut icon" href="/app/img/PUPLogo.png" type="image/x-icon">
    <title>Organization Profile</title>
</head>
<body>
    <header class="subheader">
        <nav>
            <ul>
                <li><a href="/index.php"><img src="/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Organization Profile</li>
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
                <a href="/app/pages/cms/dashboard.php"><li>Dashboard</li></a>
                <a href="/app/pages/cms/usermanagement.php"><li>User Management</li></a>
                <a href="/app/pages/cms/orgmanagement.php"><li>Organization Management</li></a>
                <a href="/app/pages/cms/eventmanagement.php"><li>Event Management</li></a>
                <a href="/app/pages/cms/forummoderation.php"><li>Forum Moderation</li></a>
                <a href="/app/pages/cms/merchandiseapproval.php"><li>Merchandise Approvals</li></a>
                <a href="/app/pages/cms/report.php"><li>Reports</li></a>
            </ul>
        </div>

        <div class="content">
            <div class="content-header">
                <img src="/app/img/icons8-community-96.png" alt="organization">
                <h2>PUP Hygears</h2>
            </div>

            <div class="org-details">
                <div class="logo-display">
                    <img src="/app/img/hygears.jpg" alt="Organization Logo" id="org-logo">
                </div>                

                <label for="orgName">Organization Name</label>
                <input type="text" name="orgName" id="orgName" placeholder="PUP Hygears" disabled>

                <label for="orgDeets">Description</label>
                <textarea name="orgDeets" id="orgDeets" placeholder="A student organization committed to promoting research awareness and innovation among PUP students." disabled></textarea>

                <label for="orgEmail">Organization Email</label>
                <input type="email" name="orgEmail" id="orgEmail" placeholder="hygears@pup.edu.ph" disabled>

                <label for="orgDate">Established Date</label>
                <input type="text" name="orgDate" id="orgDate" placeholder="2017-03-05" disabled>
            </div>

            <h3>Members</h3>
            <table>
                <caption>Member List</caption>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Date Joined</th>
                    <th>Action</th>
                </tr>
                <?php if ($members_result->num_rows > 0): ?>
                    <?php $count = 1; ?>
                    <?php while ($member = $members_result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo htmlspecialchars($member['full_name']); ?></td>
                            <td><?php echo htmlspecialchars($member['email']); ?></td>
                            <td><?php echo htmlspecialchars($member['role']); ?></td>
                            <td><?php echo htmlspecialchars($member['date_joined']); ?></td>
                            <td>
                                <form action="/app/pages/cms/details/remove_member.php" method="POST" onsubmit="return confirmRemove();">
                                    <input type="hidden" name="organization_id" value="<?php echo $org_id; ?>">
                                    <input type="hidden" name="member_id" value="<?php echo $member['id']; ?>">
                                    <button type="submit" class="remove-btn">Remove</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="6">No members found.</td></tr>
                <?php endif; ?>
            </table>
            <a href="#" onclick="event.preventDefault(); showAddMemberModal();">
                <button class="highlight">Add Member</button>
            </a>

            <!-- Add Member Modal -->
            <div id="addMemberModal" class="modal">
                <div class="modal-content">
                    <span class="close-btn" onclick="hideAddMemberModal()">&times;</span>
                    <h2>Add Member</h2>
                    <form action="/app/pages/cms/details/add_member.php" method="POST">
                        <input type="hidden" name="organization_id" value="<?php echo $org_id; ?>">
                        
                        <label for="user_id">Select User:</label>
                        <select id="user_id" name="user_id" required>
                            <option value="">-- Select a User --</option>
                            <?php while ($user = $user_result->fetch_assoc()): ?>
                                <option value="<?php echo $user['id']; ?>">
                                    <?php echo htmlspecialchars($user['full_name'] . " (" . $user['email'] . ")"); ?>
                                </option>
                            <?php endwhile; ?>
                        </select>

                        <label for="role">Role:</label>
                        <input type="text" id="role" name="role" required placeholder="e.g., Moderator">

                        <button type="submit" class="highlight">Add Member</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php $conn->close(); ?>
