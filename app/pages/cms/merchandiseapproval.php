<?php
session_start();
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "pup_engage"; 

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch merchandise data from the database
$sql = "SELECT id, item_name, vendor_name, item_image, created_at, status FROM merchandise ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/dist/styles.css">
    <link rel="shortcut icon" href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" type="image/x-icon">
    <title>Merchandise Approvals</title>
</head>
<body>
    <header class="subheader">
        <nav>
            <ul>
                <li><a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/index.php"><img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/PUPLogo.png" alt="PUP Logo"></a></li>
                <li>PUP Engage</li>
                <li>Merchandise Approvals</li>
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
                <img src="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/img/icons8-person-96.png" alt="dashboard">
                <h2>Merchandise Approvals</h2>
            </div>
            <div class="search">
                <input type="text" placeholder="Search for merchandise">
            </div>
            <table>
                <caption>Merchandise List</caption>
                <tr>
                    <th>ID</th>
                    <th>Item Image</th>
                    <th>Item Name</th>
                    <th>Vendor Name</th>
                    <th>Submission Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['id']}</td>
                            <td><img src='{$row['item_image']}' width='50' height='50' alt='Item Image'></td>
                            <td>{$row['item_name']}</td>
                            <td>{$row['vendor_name']}</td>
                            <td>{$row['created_at']}</td>
                            <td>
                                <select name='status' onchange='updateStatus({$row['id']}, this.value)'>
                                    <option value='Pending' " . ($row['status'] == 'Pending' ? 'selected' : '') . ">Pending</option>
                                    <option value='Approved' " . ($row['status'] == 'Approved' ? 'selected' : '') . ">Approved</option>
                                    <option value='Rejected' " . ($row['status'] == 'Rejected' ? 'selected' : '') . ">Rejected</option>
                                    <option value='Flagged' " . ($row['status'] == 'Flagged' ? 'selected' : '') . ">Flagged</option>
                                </select>
                            </td>
                            <td><a href='delete_item.php?id={$row['id']}' onclick='return confirm(\"Are you sure you want to delete this item?\")'>Delete</a></td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No merchandise items found</td></tr>";
                }
                ?>
            </table>
            <a href="https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/details/additem.php"><button class="highlight">Add Merchandise</button></a>
        </div>
    </section>

    <script>
       function updateStatus(itemId, newStatus) {
    fetch('https://60c5-136-158-24-254.ngrok-free.app/pup-engage/app/pages/cms/update_status.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `id=${itemId}&status=${newStatus}`
    })
    .then(response => response.text())
    .then(data => alert(data))
    .catch(error => alert('Error updating status'));
}

    </script>
</body>
</html>

<?php
$conn->close();
?>
